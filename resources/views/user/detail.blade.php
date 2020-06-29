<!DOCTYPE html>
<html>
<head>
	<title></title>
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
</head>
<body>
	@include('partials\head')
    <div class="container">
		<div class="row">
			<div class="col-sm-6">
				<img style="width: 450px;height: 450px;border: 1px solid #fef3f5;" src="{{'/storage/'.$sanpham->img}}"/>
            </div>
			<div class="col-sm-6">
				<h2 style="color: #ff828d;"><b>Tên son: {{$sanpham->name}}</b></h2><hr>
				<h4 style="color: #ff828d;"><i>Mô tả: {{$sanpham->description}}</i></h4><br>
				<strike><h4>Giá cũ: {{number_format($sanpham->oldPrice)}}VND</h4></strike>
				<h4>Giá mới: {{number_format($sanpham->newPrice)}}</h4><br>
				<form method="GET" action="/user/cart/{{$sanpham->id}}">
					<button type="submit" class="btn btn-outline-warning">Mua ngay nào!</button>
				</form>
			</div>
		</div>
	</div>
	<br>
	@include('partials\foot');
</body>
</html>