<?php  
 //fetch.php  
 $connect = mysqli_connect("localhost", "root", "", "post_job");  
 if(isset($_POST["id"]))  
 {  
      $query = "SELECT * FROM tbl_employee WHERE job_id = '".$_POST["id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>