<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <center>
	<div class="box">
		<form class="form" method="POST" action="/admin/create" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label for="title" style="float: left; font-size: 18px;"> Name</label>
				<input type="text" class="form-control" name = "name">
			</div>
			<div class="form-group">
				<label for="title" style="float: left; font-size: 18px;"> Description</label>
				<input type="text" class="form-control" name = "description">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Discount</label>
				<input type="text" class="form-control" name = "discount">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> Old Price</label>
				<input type="text" class="form-control" name = "oldPrice">
			</div>
			<div class="form-group">
				<label for="author" style="float: left; font-size: 18px;"> New Price</label>
				<input type="text" class="form-control" name = "newPrice">
			</div>
			<div class="form-group">
				<label > Photo</label>
				<input type="file" class="form-control" name = "img" >
			</div>

			<button type="submit" class="btn btn-warning" style=" font-size: 18px; color:green ;">Submit</button>
		</form>
	</div>
</center>
</body>
</html>