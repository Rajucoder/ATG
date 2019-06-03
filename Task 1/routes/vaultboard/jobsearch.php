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
<br>
<body>

<?php
include 'connect.php';
?>
<div style=" margin-top: 30px;margin-left:30px;margin-right:500px">
                                <h1>Find jobs</h1>
                     <form class="example" action="jobsearch.php">
  <input class="form-control" style="color:#000" type="text" placeholder="Search.." name="q">
  <button class="form-control" type="submit"><i class="glyphicon glyphicon-search"></i></button>
</form></div>
<?php
$sql = "select * from post  order by date";  
       
        if(isset($_GET['q'])){
          $sql = "select *  from post where name LIKE '%".$_GET['q']."%' order by date";
        }
      if(isset($_GET['industry'])){
          $sql = "select * from post where industry='".$_GET['industry']."' order by date";
        }
      if(isset($_GET['category'])){
        $sql = "select * from post where category='".$_GET['category']."' order by date";
      }
     
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
		<td style="display:none"><?php echo " ".$row["job_id"]." ";?></td>
	   <td><?php echo " ".$row["name"]." ";?></td>
	   
	   <td style="display:none"><?php echo " ".$row["category"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["minexp"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["salary"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["industry"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["desc"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["role"]." ";?></td>
	   <td style="display:none"><?php echo " ".$row["place"]." ";?></td>
	   <form method="post" action="update.php">
	   <td><a href="view.php?id=<?php echo $row["job_id"];?>"><button type="button" class="btn btn-success btn-xs" >View</button></a></td>
        <td><button type="button" class="btn btn-warning btn-xs edit_data" name="id" value="<?php echo $row['job_id'];?>">Edit</button></td>
		<td><a href="delete.php?id=<?php echo $row["job_id"];?>"><button type="button" class="btn btn-danger btn-xs" >Delete</button></a></td>
		</tr></form>
	   
		
<div class="container-fluid">
        <div class="col-md-8">
	<div class="modal fade" id="editmodal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <div class="container" >
            <form method="post" action="update.php">	
                <h3>Post a JOB</h3>
					<input type="hidden" name='updateid' id='updateid'/>
				   <div class = "card">
						<div class="col-md-6">
                        <div class="form-group">
                            <label class = "text-center card-header">Job Title:</label>
                            
                            <input type="text" name="name" id='name' class="form-control" placeholder="Job Title" />
                        </div>
                        <div class="form-group">
                            <label class = "text-center card-header">Job Category</label>
                            <select type="text" name="category" id='category' class="form-control" placeholder="Category">
                               <?php include 'categoryOptions.php';?> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label class = "text-center card-header">Minimum Experiance</label>
                            <input type="text" name="minexp" id='minexp' class="form-control" placeholder="Minimum Expireince"  />
                        </div>
                        <div class="form-group">
                             <label class = "text-center card-header">Salary Budget</label>
                            <input type="text" name="salary" id='salary' class="form-control" placeholder="Salary" />
                        </div>
                         <div class="form-group">
                             <label class = "text-center card-header">Job industry</label>
                             <select type="text" name="industry" id='industry' class="form-control" placeholder="Industry" >
                                 <?php include 'industryOptions.php';?>
                             </select>
                        </div>
						

                      <div> 
                    
					
                    
                        <div class="form-group">
                            <label class = "text-center card-header">Job requirements</label>
                            <textarea name="desc"  id='desc' class="form-control" placeholder="Description" style="height: 120px;"></textarea>
                        </div>
                         <div class="form-group">
                              <label class = "text-center card-header">Role</label>
                            <input type="text" name="role" id='role' class="form-control" placeholder="Role" />
                        </div>
                         <div class="form-group">
                              <label class = "text-center card-header">Place</label>
                            <input type="text" name="place" id='place' class="form-control" placeholder="Place" />
                        </div>
						
                         <div class="form-group">
                            <button type="submit" name="submitPost" class = "btn btn-primary">Edit</button>
                        </div>
						
                   
                
				</div>
            </form>
			
			
</div>  
</div>
      
   
</div>
</div>      
</div>
</div>
<?php
    }

?> 

<script>
	$(document).ready(function(){
		$('.edit_data').on('click',function(){
			$('#editmodal').modal('show');
			
			$tr=$(this).closest('tr');
			
			var data=$tr.children('td').map(function(){
				return $(this).text();
			}).get();
			$('#updateid').val(data[0]);
			$('#name').val(data[1]);
			$('#category').val(data[2]);
			$('#minexp').val(data[3]);
			$('#salary').val(data[4]);
			$('#industry').val(data[5]);
			$('#desc').val(data[6]);
			$('#role').val(data[7]);
			$('#place').val(data[8]);
		});
	});
</script>
</div>
</div>
</body>
</html>