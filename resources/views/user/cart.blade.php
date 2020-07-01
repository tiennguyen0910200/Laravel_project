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
	@include('partials\head')<br>
	<a href="/home" style="text-decoration: none;">Continue Shopping</a>
	<table class="table">
		<tr style="background-color: #fff3f5;">
			<td>Picture</td>
			<td>Name</td>
			<td>Price</td>
			<td>Quantity</td>
			<td>Total</td>
			<td></td>

		</tr>
		@foreach($cartdata as $cart)
		<tr>
			<th>
				<img style="width: 150px;height: 150px;" src="{{'/storage/'.$cart->img}}">
			</th>
			<?php 
			$total=0;
			?>
			<th>{{$cart->name}}</th>
			<th>{{number_format($cart->newPrice)}}VND</th>
			<th><a href="/user/cart/{{$cart->id}}/increase"><button type="button"class="btn btn-light">+</button></a>
				<input type="text" name="quantity" value="{{$cart->quantity}}"  >
				<a href="/user/cart/{{$cart->id}}/crease"><button type="button" class="btn btn-light">-</button></a></th>
				<th>{{number_format($cart->newPrice * $cart->quantity)}}VND</th>
				<th>
					<form method="POST" action="/user/cart/{{$cart->id}}">
						@csrf
						@method("DELETE")
						<button type="submit" class="btn btn-info">Delete</button>
					</form>
				</th>
			</tr>
			@endforeach
		</table>
		<hr><br>
				<center><form method="GET" action="/user/pay">
					<button type="submit" class="btn btn-danger">Thanh Toán</button>
				</form></center>
	    <br>
		@include('partials\foot')
	</body>
	</html>


