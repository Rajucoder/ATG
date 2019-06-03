<!DOCTYPE html>
	<html>
	<head>
		<title>View Profile</title>
		
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
 		<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
    	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-multiselect.css">
	  	<link rel="stylesheet" type="text/css" href="../../assets/bootstrap-tagsinput.css">
	  	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	   	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>  
      	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
      	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>    	
    	<script type="text/javascript" src="../../assets/bootstrap-multiselect.js"></script>
    	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
 		<script type="text/javascript" src="../../assets/bootstrap-tagsinput.js"></script>
 		<style type="text/css">
 			 .active {
              background-color: #FF69B4;
            }

 		</style>
	</head><script type="text/javascript"></script>
	<body>
		
		<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark" style="font-size: 0.75em;">
		  <a class="navbar-brand" href="#" ><button class="btn text-light" style=" "><h5> VAULT BOARD</h5></button></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #FF69B4;">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		       <li class="nav-item ">
		       <a class="nav-link" href="../home.php"><button class="btn  text-light">Home</button><span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="#"><button class="btn  text-light">Profile</button><span class="sr-only">(current)</span></a>
		      </li>
		      
		      
		    </ul>
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="#"><button class="btn text-light ">Build Profile</button></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#"><button class="btn text-light ">Edit Profile</button></a>
		      </li>
		      <li class="nav-item">
		        <form method="get" action="../../logout.php"> <button name="logout" type="submit" class="btn btn-danger text-light ">Logout</button></form>
		      </li>
    		</ul>

		  </div>
		</nav>
<br>
		<div class="container" style="margin-top: 75px;">
				<div class="row">				
					<div class="col col-lg-3 col-md-3 col-sm-3 " style="font-size: 0.75em;">
						<div class="position-fixed">

																					<p><h5> </h5></p>
							<p>Profile Completed : 0% </p>							
							<ul class="list-group">
						 	 <a href="profile.php" class="list-group-item list-group-item-action">Profile</a>
						 	 <a href="social.php" class="list-group-item list-group-item-action">Social Account</a>
						 	 <a href="password.php" class="list-group-item list-group-item-action">Change Password</a>
						 
						 </ul>
						  
					</div>
				</div>
				</div>
				</div>
				<div class=" col col-lg-9 col-md-9 col-sm-9 ml-auto" style="padding-left:50px;font-size: 0.85em">
					  <div id="recruiterview" class="card">
					  	<div class="card-header">
					  	<div class="card-title" style="padding-left: 10px">
						<form method='post' action='#'>
				<div class="settings-section change-password hidden">
				<div class="settings-section-header">
					<h3>Change Password</h3>
				</div>
				<div class="settings-section-content">
					<div class="section-form">

						<div class="formgroup">
							<div class="label" for="old-password">Old Password*</div>
							<input type="password" class='form-control' id="old-password" name="oldPassword"  placeholder="Old Password">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<div class="label" for="new-password">New Password*</div>
							<input type="password" class='form-control' id="new-password" name="newPassword" placeholder="New Password">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<div class="label" for="confirm-password">Confirm Password*</div>
							<input type="password" class='form-control' id="confirm-password" name="confirmPassword" placeholder="Confirm Password">
                            <div  id="" class="error hidden"></div>
						</div>
						<div class="formgroup">
							<div class="save-container">
										<button class='btn btn-primary'><span class="button green submit ">Save</span></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</form>
</body>
</html>