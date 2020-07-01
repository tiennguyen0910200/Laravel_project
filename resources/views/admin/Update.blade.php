<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="{{'/admin/'.$data ->id}}" enctype="multipart/form-data">
		@csrf
		@method("PATCH")
		<h4>Name: </h4>
		<input type="" name="name" value="{{$data -> name}}">
		<h4>Quantity: </h4>
		<input type="" name="quantity" value="{{$data -> quantity}}">
		<h4>Old Price: </h4>
		<input type="" name="oldPrice" value="{{$data -> oldPrice}}">
		<h4>New Price: </h4>
		<input type="" name="newPrice" value="{{$data -> newPrice}}">
		<h4>Choose picture: </h4>
		<input type="file" name="img">
		<button type="submit" class="btn btn-outline-danger">Update</button>
	</form>

</body>
</html>