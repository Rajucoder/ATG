<html>
<head>

<meta charset="utf-8">

<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>
<div class="container" >
            <form method="post" action="">	
                <h3>Post a JOB</h3>
               <div class="row">
				   <div class = "card">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class = "text-center card-header">Job Title:</label>
                            
                            <input type="text" name="name" class="form-control" placeholder="Job Title" />
                        </div>
                        <div class="form-group">
                            <label class = "text-center card-header">Job Category</label>
                            <select type="text" name="category" class="form-control" placeholder="Category">
                               <?php include 'categoryOptions.php';?> 
                            </select>
                        </div>
                        <div class="form-group">
                            <label class = "text-center card-header">Minimum Experiance</label>
                            <input type="text" name="minexp" class="form-control" placeholder="Minimum Expireince"  />
                        </div>
                        <div class="form-group">
                             <label class = "text-center card-header">Salary Budget</label>
                            <input type="text" name="salary" class="form-control" placeholder="Salary" />
                        </div>
                         <div class="form-group">
                             <label class = "text-center card-header">Job industry</label>
                             <select type="text" name="industry" class="form-control" placeholder="Industry" >
                                 <?php include 'industryOptions.php';?>
                             </select>
                        </div>
						<div id='question_type'> 
						<input type="hidden" class="form-control" id='questionIndex' name='questionIndex' value=0>
						<br>
						</div>
						<div id='question' style="display:none;" >
							<button name="submitPost" class = "btn btn-primary" class="btnContact pull-right" onClick="return addQuestion()">Add question</button>
						</div>

                       
                    </div>
					</div>
					<div class = "card">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class = "text-center card-header">Job requirements</label>
                            <textarea name="desc" class="form-control" placeholder="Description" style="width: 100%; height: 120px;"></textarea>
                        </div>
                         <div class="form-group">
                              <label class = "text-center card-header">Role</label>
                            <input type="text" name="role" class="form-control" placeholder="Role" />
                        </div>
                         <div class="form-group">
                              <label class = "text-center card-header">Place</label>
                            <input type="text" name="place" class="form-control" placeholder="Place" />
                        </div>
						
                         <div class="form-group">
                            <button type="submit" name="submitPost" class = "btn btn-primary" class="btnContact pull-right" > Post Job</button>
                        </div>
                    </div>
                </div>
				</div>
            </form>
			
			
</div>                   
		
</body>
</html>