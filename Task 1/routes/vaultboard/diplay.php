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
	<div class = "card">
		<table>
		<td>
			<input type="text" name="name" placeholder="Search Job" class = "form-control"/>
		
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
	</div>
	
<?php
if(isset($_POST['submit'])){
	$search = $_POST['name'];
	echo $search;
	$sql = "SELECT name,place,date FROM post where name='$search'";
$result = $conn->query($sql);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Job</th>
      <th scope="col">Place</th>
	  <th scope="col">Date</th>
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
	   
        </tr></tbody>
		<?php
    }
}
?>
</div>
</form>