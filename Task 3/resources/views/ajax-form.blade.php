<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
  <style>
   .error{ color:red; } 
  </style>
</head>
  
<body>
  
<div class="container">
    <h2 style="margin-top: 10px;">ATG Assignment 3</h2>
    <br>
    <br>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
    </div>
    <br>
    @endif
    <form id="contact_us" method="post" action="javascript:void(0)">
      @csrf
	 
	  
		
      <div class="form-group">
        <label for="formGroupExampleInput">Name</label>
        <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
        <span class="text-danger">{{ $errors->first('name') }}</span>
      </div>
      <div class="form-group">
        <label for="email">Email Id</label>
        <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
        <span class="text-danger">{{ $errors->first('email') }}</span>
      </div>      
      <div class="form-group">
        <label for="mobile_number">Pin Code Number</label>
        <input type="text" name="mobile_number" class="form-control" id="mobile_number" placeholder="Please enter Pin Code number" maxlength="10">
        <span class="text-danger">{{ $errors->first('mobile_number') }}</span>
      </div>
      <div class="alert alert-success d-none" id="msg_div">
              <span id="res_message"></span>
      </div>
      <div class="form-group">
       <button type="submit" id="send_form" class="btn btn-success">Submit</button>
      </div>
    </form>
  
</div>
<script>
   if ($("#contact_us").length > 0) {
    $("#contact_us").validate({
      
    rules: {
      name: {
        required: true,
        maxlength: 50
      },
  
       mobile_number: {
            required: true,
            digits:true,
            minlength: 6,
            maxlength:6,
        },
        email: {
                required: true,
                maxlength: 50,
                email: true,
            },    
    },
    messages: {
        
      name: {
        required: "Please enter name",
        maxlength: "Your last name maxlength should be 50 characters long."
      },
      mobile_number: {
        required: "Please enter Pin Code number",
        minlength: "The Pin Code number should be 6 digits",
        digits: "Please enter only numbers",
        maxlength: "The Pin Code number should be 6 digits",
      },
      email: {
          required: "Please enter valid email",
          email: "Please enter valid email",
          maxlength: "The email name should less than or equal to 50 characters",
        },
         
    },
    submitHandler: function(form) {
     $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#send_form').html('Sending..');
      $.ajax({
        url: 'http://localhost/laravel-ajaxform/public/save-form' ,
        type: "POST",
        data: $('#contact_us').serialize(),
        success: function( response ) {
            $('#send_form').html('Submit');
            $('#res_message').show();
            $('#res_message').html(response.msg);
            $('#msg_div').removeClass('d-none');
 
            document.getElementById("contact_us").reset(); 
            setTimeout(function(){
            $('#res_message').hide();
            $('#msg_div').hide();
            },10000);
        }
      });
    }
  })
}
</script>
</body>
</html>