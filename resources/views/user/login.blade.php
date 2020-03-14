@extends('layouts.master')


@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body style="background-color: #ACCDFC">


<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 mx-auto">
			@include('error.errors')

      @if(session('regsuc'))
      {{ session('regsuc') }}
      @endif

		<form action="{{route('user.login.show')}}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}

  			<div class="form-group">
    		<label for="exampleInputName1">Name</label>
    		<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name">
     		</div>

        <div class="form-group">
        <label for="exampleInputName1">Password</label>
        <input type="Password" class="form-control" id="exampleInputName1" name="password" placeholder="Enter password">
        </div>
   		
  			<input type="submit" class="btn btn-primary" name="submit" value="Login">

			</form>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

@endsection