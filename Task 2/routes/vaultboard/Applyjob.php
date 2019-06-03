<html>
<head>

<meta charset="utf-8">

<link href="bootstrap.css" rel="stylesheet" type="text/css">
<style>
table {
    border-collapse: separate;
    border-spacing: 1em;
}
</style>
</head>
<br>

<div class="container">
<form method="post" action="">

	<div class="row">
	<?php
		include 'connect.php';
		if(isset($_POST['submitPost'])){
			$searchKey = $_POST['name'];
			$sql = "select * form WHERE name LIKE '%$searchKey%'";
		}else{
			$sql = "select * from post";
		}
		
		$result = $conn->query($sql);
	?>
	<div class = "card">
		<table>
		<td>
			<input type="text" name="name" placeholder="Search Job" value="<?php echo $searchKey;?>" class = "form-control"/>
		
		</td>
		<td>
			<input type="text" placeholder="Location" class = "form-control"/>
		</td>
		<td>
			<input type="text" placeholder="Comapany" class = "form-control"/>
		</td>
		<td>
			Experience:
		</td>
		<td> <input type="text" placeholder="Experience" class = "form-control"/></td>
		<td>
                <button type="submit" name="submitPost" class = "btn btn-primary" class="btnContact pull-right" >Search Job</button>
        </td>
		</table>
		</form>
	</div>
	<table class="table">
  <thead>
    <tr>
      <th scope="col">Job</th>
      <th scope="col">Place</th>
	  <th scope="col">Date</th>
	  
	  <th scope="col">Apply</th>
    </tr>
  </thead>
  <?php
    while($row = $result->fetch_assoc()) {
	?>
	<tbody>
	<tr>
	   <td><?php echo " ".$row["name"]." ";?></td>
	   <td><?php echo " ".$row["place"]." ";?></td>
	   <td><?php echo " ".$row["date"]." ";?></td>
	   
	   <form method="post" action="question.php">
        <td><input type="hidden" name="id" value="<?php echo $row['job_id'];?>"/><button type = "submit" class = "btn btn-primary">Apply</button></td></tr></form>
	   
        </tr></tbody>
		<?php
    }
	
	?>
	</table>
	</div>
</div>
</form>