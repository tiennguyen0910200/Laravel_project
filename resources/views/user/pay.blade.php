<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/css/home.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<form>
					<label>Full name</label>
					<input type="text" name="">
					<label>Phone</label>
					<input type="text" name="">
					<label>Email</label>
					<input type="text" name="">
					<label>Address</label>
					<input type="text" name="">
					<label>Means of payment</label>
					<select>
						<option>Airpay</option>
						<option>Direct payment</option>
					</select>
				</form>
			</div>
			<!-- @foreach($son as $son)
			<div class="col-sm-6">
				<div style="border: 1px solid #fef3f5; width: 300px;height: 500px; margin-bottom: 30px;">
					<center><img style="width: 150px;height: 150px;" src="{{'/storage/'.$son->img}}"></center>
					<h2 class="name"><b>{{$son->name}}</b></h2>
					<h4 style="color: #f8c6c7" >{{number_format($son->newPrice)}}VND</h4>
					<center><span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span></center>
						<br>
						<center><form method="GET" action="/user/detail/{{$son->id}}">
							<button type="submit" class="btn btn-warning">Detail</button>
						</form></center>
					</div>
				</div>
				@endforeach -->
			</div>
		</div>

	</body>
	</html>