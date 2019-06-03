<html>
<head>
 
<meta charset="utf-8">

			<link href="bootstrap.css" rel="stylesheet" type="text/css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
			<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
			<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
			<link href="css/Animate.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			 
			<link href="css/Animate.css" rel="stylesheet" type="text/css">
			<link href="css/animate.min.css" rel="stylesheet" type="text/css">
			
<style>
table {
    border-collapse: separate;
    border-spacing: 1em;
}
</style>
</head>

<body>
<?php
include 'connect.php';
$id=$_GET['id'];
$sql = "select * from post where job_id='$id'"; 
 $result = $conn->query($sql);
 while($row=$result->fetch_assoc()){
            $pid= $row['job_id'];
            $jobtitle= $row['role'];
            $category=$row['category'];
            $minexp=$row['minexp'];
            $salary=$row['salary'];
            $industry=$row['industry'];
            $desc=$row['desc'];
            $name=$row['name'];
			$status=$row['question'];
			?>
								<div class="col-md-12">
								<h3 style="color: #2196F3"><?php echo $jobtitle;?></h3>
                                    <h5 style="color: #2196F3">By <?php echo $name;?></h5><br>
                                    <h5><b>Experiance required:</b><?php echo $minexp;?> years </h5><br>
                                    <h5><b>Salary:</b><?php echo $salary;?> </h5><br>
									<h5><b>Category:</b><?php echo $category;?> </h5><br>
									<h5><b>Description:</b><pre><?php echo $desc;?></pre> </h5><br>
									<?php if($status=="Yes") {?>
									<form action="question.php" method="post">
									<input type="hidden" name="id" value="<?php echo $pid;?>"/><button class="btn btn-danger preview">Apply</button></form>
									<?php
									 }else{
										 ?>
										 
										 <form action="applyindex.php" method="post">
										<input type="hidden" name="id" value="<?php echo $pid;?>"/><button class="btn btn-danger preview">Apply</button></form>
										<?php
									 }
									?>	
									
									</div>									
<?php 
			
		
 }
?>									
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <div class="container" >
		
</div>
</div>
</div>	
</div>  
</body>									
</html>									
			
			


							