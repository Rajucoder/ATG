<!doctype html>


<html>
<head>
       <!-- Global site tag (gtag.js) - Google Analytics -->


<meta charset="utf-8">

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!--<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">-->
  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
	
<link href="css/simpleGridTemplate.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/Animate.css" rel="stylesheet" type="text/css">
<link href="css/animate.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Kodchasan" rel="stylesheet">
<style>
    .tiltContain{margin-top:0%;} 
    .btnTilt{height: 75px;background:rgba(225,225,225,0.2) ;  color:white; font-family: Comfortaa;}

    .textDarkShadow{
    text-shadow: 0px 0px 3px #000,3px 3px 5px #003333; 
}
    /*    #btn1,#btn2,#btn3,#btn4,#btn5,#btn6{display:none;}*/
</style>

<body onload="logoBeat()" style="font-family: 'Kodchasan', sans-serif;">
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Vaultboard</div>
      <div class="list-group list-group-flush">
        
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

?>
    
<!-- Main Container -->
<div class="container-fluid" style=" background-image: url('img/mainBackg.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed;">

       

	
    <div class="hero" style=" color:darksmoke;" >
	
            <h1 style="padding:50px; font-size: 100px;"><strong>VAULTBOARD</strong></h1>
		<div style="width: 100%" class="row" >
		
			<div class="col-md-9"  >
                           <div style=" margin-top: 30px;">
                                <h1>Find jobs</h1>
                     <form class="example" action="applyindex.php">
  <input style="color:#000" type="text" placeholder="Search.." name="q">
  <button type="submit"><i class="glyphicon glyphicon-search"></i></button>
</form></div>
                            
                            <div class="container row">
							<table class="table">
							<thead>
							<tr>
      <th scope="col">Job</th>
      <th scope="col">Apply</th>
	  <th scope="col">Preview</th>
    </tr>
  </thead>
                                <?php  $name=$category=$minexp=$salary=$industry=$desc=$role=$eType=$status=$msg="";


include 'connect.php';
    
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
      if($result->num_rows>0){
    while(  $row=$result->fetch_assoc()){
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
                                
								<thead>
    
								<tbody>
                                    <tr>
									<td>
									<h3><?php echo $name;?></h3></td>
                                    
                                    <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Apply</button></td>
		                           
									<td><a href="preview.php?id=<?php echo $pid;?>"><button type="button" class="btn btn-danger" > Preview</button></a></td>
									<td><button type="button" class="btn btn-danger" >Refer</button></td></tr>
								</tbody>	
                                
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
	  <div class="container" >
	  <div class="col-md-5">
		<div class="alert alert-success">
			<?php 
				echo "('Applied Successfully')";
			?>
		</div>
		</div>
</div>
</div>
</div>	
</div>  
                            	
                              
    
	<?php } ?>	
	</table>
	<?php
	}else{
                                    echo "Search returned no results";
                                } ?>
                            </div>
                            
                            
		</div>
	
                    <div style=" height: 100vh; " class="col-md-3">
                       
                        <br><br> 
                        <div style='padding:10px'>
                            <h3>Jobs by Category</h3>
                             <form>
                            <div> 
                               
                            <select class="form-control" name='category'>
                                <?php include "categoryOptions.php";?>
                            </select><br>
                                <input class="btn btn-success pull-right" type="submit" value="Search"/>
                                </div>
                            </form>
                        </div><br><br>
                        <br><br> 
                        <div style='padding:10px'>
                            <h3>Jobs by Industry</h3>  
                            <form>
                            <select class="form-control" name='industry'>
                                <?php include "industryOptions.php";?>
                            </select><br>
                            <input class="btn btn-success pull-right" type="submit" value="Search"/>
                            </form>
                        </div> 
                        
                    </div>   
		</div>                       
		
		
		
	
	
	
</div>
  
     
    
</div>
        
        
<!--first row -->

<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script>
	$(document).ready(function(){
		$('.preview').on('click',function(){
			$('#pre_view').modal('show');
			
			$tr=$(this).closest('tr');
			
			var data=$tr.children('td').map(function(){
				return $(this).text();
			}).get();
			
			$('#jobtitle').val(data[0]);
		});
	});
</script>

</div>
</body>
</html>
