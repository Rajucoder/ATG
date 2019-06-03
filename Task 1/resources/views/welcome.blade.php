<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
		  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="d-flex justify-content-center">
				
                <div class=""><table>
				<tr>
				<td></td><td>@if (session()->has('message'))
					<div class="alert alert-info">
						{{ session('message') }}
					</div>
				@endif</td></tr>
				<tr>
				<td></td><td>@if (session()->has('message1'))
					<div class="alert alert-danger">
						{{ session('message1') }}
					</div>
				@endif</td></tr>
                   <form method="post" action="{{URL::to('/about')}}">
					   {{csrf_field()}}
				   <tr><td>Name:</td>
				   <td><input type="text" class="form-control form-rounded"  name="name" placeholder="Name"/></td></tr><br>
				   <tr><td>Email Id:</td>
				   <td><input type="email" class="form-control form-rounded"  name="Email" placeholder="Email"/></td></tr><br>
				   <tr><td>Pin Code:</td>
				   <td><input type="text" class="form-control form-rounded"  name="pin" pattern="[0-9]{6}" maxlength="6" placeholder="Pin code"></td></tr><br>
				   <tr><td><input type="submit" name="submit" class="btn btn-success"/></td>
				   <td></td>
				   </tr>
				   </form>
				   <table>
                </div>
            </div>
        </div>
    </body>
</html>


