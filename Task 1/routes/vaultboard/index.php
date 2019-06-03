<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">-->
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <style>
  .modal-lg {
    max-width: 50%;
}
  </style>

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Vaultboard</div>
      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item list-group-item-action bg-light">Post Job</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">My Posted Job</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Search Candidate</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
      </nav>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "post_job";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	$var = 1;
    // output data of each row
     if(isset($var)) { 
        $name=  "vaultboadcxzrd";
         $email =  "vaultboard@gmail.com";
}
?>
      <div class="container-fluid">
        <div class="col-md-8">
                            <img src="vaultboardicon.jpg" class="img-circle img-responsive" width="200" style="margin: 20%; box-shadow: 0px 0px 20px #1e1e1e;">
                            <h4>User Name</h4>
                            <h3><?php echo $name; ?></h3>
                             <h4>Email</h4>
                            <h3><?php echo $email; ?></h3>
							<button type = "button" class="btn btn-danger btn-block">Update Profile</button><br><br>
							<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#myModal">Post Job</button><br><br>
							<a href="jobsearch.php"><button type="button" class="btn btn-danger btn-block">View</button></a><br><br>
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <div class="container" >
            <form method="post" action="store.php">	
                <h3>Post a JOB</h3>
					<input type="hidden" name='updateid' id='updateid'/>
				   
						<div class="col-md-12">
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
                            <button type="submit" name="submitPost" id="submit" class = "btn btn-primary">Post</button>
                        </div>
						
                   
                
				</div>
            </form>
			
			
</div>  

      
   
</div>
</div>      
</div>
</div>
    <!-- /#page-content-wrapper --> 
</div>
  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  
  <>

</body>

</html>
