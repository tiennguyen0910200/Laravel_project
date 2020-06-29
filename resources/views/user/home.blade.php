<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" type="text/css" href="/css/home.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	@include('partials\head')<br>
	<div class="navbar">
		<a href="/home">Home</a>
		<a href="/home">Lipstip</a>
		<div class="dropdown">
			<button class="dropbtn">Dropdown 
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Link 1</a>
				<a href="#">Link 2</a>
				<a href="#">Link 3</a>
			</div>
		</div> 
		<div class="col-sm-6" style="margin-right: -550px;">
			<form action="/search" method="POST" role="search" id="search">
				<input type="search" name="search" placeholder="Search">
			</form>
		</div>
	</div>
	<br>
	@include('partials\slide')<br>
	<h1 class="title">SẢN PHẨM KHUYẾN MÃI</h1>
	<br>
	<hr>
	<div class="container">
		<div class="row" >
			@foreach($son as $todo)
			<div class="col-sm-3">
				<div style="border: 1px solid #fef3f5; width: 300px;height: 500px; margin-bottom: 30px;">
					<center><img class="img" src="{{'/storage/'.$todo->img}}"/></center>
					<!-- 	<h2>{{ $todo->discount}}</h2> -->
					<br>
					<h2 class="name"><b>{{ $todo->name}}</b></h2>

					<div style="display: flex; justify-content: center;">
						<strike><h4 style="color: #f8c6c7" >{{number_format($todo->oldPrice)}}VND</h4></strike>
						<h4 style="margin-left: 60px; color: #de030a">{{number_format($todo->newPrice)}}VND</h4>
					</div>
					<br>
					<center><span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span></center>
						<br>
						<center><form method="GET" action="/user/detail/{{$todo->id}}">
							<button type="submit" class="btn btn-danger">Detail</button>
						</form></center>
					</div>
				</div>
				@endforeach
			</div>
			<center><button type="submit" class="btn btn-outline-danger">Show all</button></center>
			<br>
		</div>
		<marquee><h1 class="title">SẢN PHẨM NỔI BẬT</h1></marquee>
		<br>
		<hr>
		<div class="container">
			<div class="row" >
				@foreach($son as $todo)
				<div class="col-sm-3">
					<div style="border: 1px solid #fef3f5; width: 300px;height: 500px; margin-bottom: 30px;">
						<center><img class="img" src="{{'/storage/'.$todo->img}}"/></center>
						<h2 class="name"><b>{{ $todo->name}}</b></h2>

						<div style="display: flex; justify-content: center;">
							<strike><h4 style="color: #f8c6c7" >{{number_format($todo->oldPrice)}}VND</h4></strike>
							<h4 style="margin-left: 60px; color: #de030a">{{number_format($todo->newPrice)}}VND</h4>
						</div>
						<br>
						<center><span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span></center>
							<br>
							<center><form method="GET" action="/user/detail/{{$todo->id}}">
								<button type="submit" class="btn btn-warning">Detail</button>
							</form></center>
						</div>
					</div>
					@endforeach
				</div>
				<center><button type="submit" class="btn btn-outline-danger">Show all</button></center>
				<br>
			</div>
			<center><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d245407.9521591056!2d108.105655!3d16.039562!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9e0d602a6827ba6d!2zQsOqIFRodWkgVHLhu4tuaA!5e0!3m2!1svi!2sus!4v1593405446793!5m2!1svi!2sus" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></center>
			@include('partials\foot')
		</body>
		</html>