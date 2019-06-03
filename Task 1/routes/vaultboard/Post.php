
<html>
<head>

<meta charset="utf-8">

<link href="bootstrap.css" rel="stylesheet" type="text/css">

</head>
<div class="container" >
            <form method="post" >	
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
                              <label class = "text-center card-header">Employment Type</label>
                              <select type="text" name="eType" class="form-control" >
                                  <option>Permanent</option>
                                  <option>Part-Time</option>
                              </select>
                        </div>
						<label>Do you want Screening question</label><br>
                         <label class="radio-inline">
                              <input type="radio" name="status" value="Yes" onChange="setQuestion(this)">Yes
						</label>
						<label class="radio-inline">
							<input type="radio" name="status" value="No" onChange="setQuestion(this)">No
						</label>
                         <div class="form-group">
                            <button type="submit" name="submitPost" class = "btn btn-primary" class="btnContact pull-right" > Post Job</button>
                        </div>
                    </div>
                </div>
				</div>
            </form>
			
			<script>
				function setQuestion(x){
					if(x.value == "Yes"){
						document.getElementById('question').style.display='block';
					} else{
						document.getElementById('question').style.display='none';
						removeQuestion();
					}
				}
				function removeQuestion(){
					var index=parseInt(document.getElementById("questionIndex").value)-1;
					if(index<0){

					}else{
						for(var i=0;i<=index;i++){
							var divID=document.getElementById('questionDiv_'+i);
							divID.parentNode.removeChild(divID);
						}
					}
					document.getElementById("questionIndex").value=0;
				}
				function addQuestion(){
					var myDiv = document.getElementById("question_type");
					var array = ["Video","Audio","Text"];
					var index = parseInt(document.getElementById("questionIndex").value);
					var div=document.createElement("div");
					div.id="questionDiv_"+index;
					 var x = document.createElement("LABEL");
					var t = document.createTextNode("Question Type");
					x.appendChild(t);
					var selectList = document.createElement("select");
					selectList.id="select_"+index;
					x.setAttribute("for",selectList.id )
					div.appendChild(x);
					selectList.style.marginBottom="15px";
					div.appendChild(selectList);
					myDiv.appendChild(div);
					div.classList.add('form-group');
					for (var i = 0; i < array.length; i++) {
						var option = document.createElement("option");
						option.value = array[i];
						option.text = array[i];
						selectList.appendChild(option);
					}
					document.getElementById("select_"+index).classList.add('form-control');
					document.getElementById("select_"+index).setAttribute('onchange','questionValue(this)');
					index=index+1;
					document.getElementById("questionIndex").value=parseInt(index);
					return false;
				}
				function questionValue(e){
					var questionValue=e.options[e.selectedIndex].text;
					var index=parseInt(e.id.split('_')[1]);
					var div=e.parentNode;
					if(document.getElementById('questionTypeDiv_'+index)==null){	
						var divText=addDivQuestionType(index);
						if(questionValue.toUpperCase()=="TEXT"){
							addText(divText,index);
						}
						if(questionValue.toUpperCase()=="AUDIO"){
							addAudio(divText,index);
						}
						if(questionValue.toUpperCase()=="VIDEO"){
							addVideo(divText,index);
						}
						div.appendChild(divText);
					} else{
						div.removeChild(div.childNodes[2]);
						var divText=addDivQuestionType(index);
						if(questionValue.toUpperCase()=="TEXT"){
							addText(divText,index)
						}
						if(questionValue.toUpperCase()=="AUDIO"){
							addAudio(divText,index);
						}
						if(questionValue.toUpperCase()=="VIDEO"){
							addVideo(divText,index);
						}
						div.appendChild(divText);
					}
				}
				function addDivQuestionType(index){
					var divText=document.createElement("div");
					divText.id="questionTypeDiv_"+index;
					divText.classList.add('form-group');
					return divText;
				}
				function addText(divText,index){
					var inputText=document.createElement('input');
					inputText.type="text";
					inputText.id="questionType_"+index;
					inputText.classList.add('form-control');
					divText.appendChild(inputText);
				}
				function addVideo(divText,index){
					var inputText=document.createElement('input');
					inputText.type="file";
					inputText.id="questionType_"+index;
					inputText.classList.add('form-control');
					divText.appendChild(inputText);
				}
				function addAudio(divText,index){
					var inputText=document.createElement('input');
					inputText.type="file";
					inputText.id="questionType_"+index;
					inputText.classList.add('form-control');
					divText.appendChild(inputText);
				}
				
			</script>
</div>                   
		
</body>
</html>