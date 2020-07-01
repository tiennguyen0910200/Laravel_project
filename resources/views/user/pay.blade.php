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
	<style type="text/css">
		.txinput{
			margin-left: 180px;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<h2 style="text-align: center; color:#b70e15 ">Customer Information</h2><br>
				<form method="GET" action="/user/order">
					<div style="display: flex;">
						<label style="margin-right: 190px;">Full name</label>
						<input type="text" name="name">
					</div><br>
					<div style="display: flex;">
						<label style="margin-right: 215px;">Phone</label>
						<input type="text" name="phone">
					</div><br>
					<div style="display: flex;">
						<label style="margin-right: 200px;">Address</label>
						<input type="text" name="address">
					</div><br>
					<div style="display: flex;">
						<label style="margin-right: 200px;">Means of payment</label>
						<select>
							<option>Airpay</option>
							<option>Direct payment</option>
						</select>
					</div><br>
					<center><button type="submit" class="btn btn-danger">Order</button></center>
				</form>
				
			</div>
			<div class="col-sm-6">
				<?php $total=0 ?>
				<table class="table">
					<tr style="background-color: #fff3f5;">
						<th>Name</th>
						<th>Image</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total</th>
					</tr>
					@foreach($carts as $cart)
					<tr>
						<td>{{$cart->inforProduct->name}}</td>
						<td><img src="/storage/{{$cart->inforProduct->img}}" width="100px;" height="100px;"></td>
						<td>{{number_format($cart->inforProduct->newPrice)}}VND</td>
						<td>{{$cart->quantity}}</td>
						<td>{{number_format($cart->inforProduct->newPrice * $cart->quantity)}}VND</td>
						<?php
						$total = $total + $cart->inforProduct->newPrice * $cart->quantity; 
						?>
					</tr>
					@endforeach
				</table>
				<h4>Tạm Tính:{{number_format($total)}}</h4><br>
				<div style="display: flex; height: 30px;">
					<input style="margin-right: 180px;" type="text" name="" placeholder="Nhập mã giảm">
					<button type="button" class="btn btn-warning">Áp dụng mã giảm</button>
				</div><br>
				<h4>Tổng:{{number_format($total)}}VND</h4>

				
			</div>
			
		</div>
	</div>

</body>
</html>