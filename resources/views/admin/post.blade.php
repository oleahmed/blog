@extends('layouts.admin')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>creat-post</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
</head>
<body style="background-color: #7D8CED">


<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 mx-auto">
			@include('error.errors')

      @if(session('regsuc'))
      {{ session('regsuc') }}
      @endif

		<form action="{{ route('admin.post') }}" method="POST" enctype="multipart/form-data">
			{{csrf_field()}}
  			<div class="form-group">
    		<label for="exampleInputName1">Name</label>
    		<input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter name">
     		</div>

        <div class="form-group">
        <label for="exampleInputName1">Details</label>
        <textarea class="form-control" id="exampleInputName1" name="details" placeholder="Enter details"></textarea>
        </div>
   		
  			<input type="submit" class="btn btn-primary" name="submit" value="post">

			</form>
    </div>
  </div>
</div>

<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
</body>
</html>

@endsection
