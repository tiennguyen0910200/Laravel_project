<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div style="display: flex; background-color: #ff828d; color: white;">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<b><i>Tiên Tiên- Shop son môi đẹp,chính hãng</i></b>
				</div>
				<div class="col-sm-6">
					<i class="fas fa-envelope">&emsp;nguyenthitien226@gmail.com</i>&emsp;
					<i class="fas fa-phone-square">&emsp;(+84)77 665 0195</i>
					<i class="fab fa-facebook-square"></i>
					<i class="fab fa-instagram"></i>
					<i class="fab fa-youtube"></i>


				</div>
			</div>
		</div>
		<a href="/user/cart"><i class="fas fa-cart-plus"></i></a>&emsp;
		<form action="/auth/logout" method="GET">
			<button type="submit" class="btn btn-outline-info">Logout</button>
		</form>
		@if(Auth::user())
		<h4>Hi: {{ Auth::user()->name}}<i class="far fa-smile-wink"></i></h4>
		@else
		@endif
	</div>
	<div style="display: flex;background-color: #fef3f5;">
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<div style="display: flex;">
						<img width="200px;" height="200px;" src="https://i.imgur.com/tjzuOjj.png">
						<div style="display: flex; margin-top: 70px;">
							<i class="fab fa-facebook-square"></i>	
							<div>
								<b>FaceBook</b>
								<a href=""></a> 
							</div>	
						</div>&emsp;
						<div style="display: flex;margin-top: 70px;">
							<i class="fas fa-award"></i>
							<div>
								<b>Bảo đảm chất lượng</b>
								<p>100% chính hãng</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div style="display: flex;margin-top: 70px;">
						<div style="display: flex;">
							<i class="fas fa-shipping-fast"></i>
							<div>
								<b>Free ship</b>
								<p>Đơn hàng từ 900k</p>
							</div>
						</div>
						<div style="display: flex;">
							<i class="fas fa-phone"></i>
							<div>
								<b>Hotline: 0776650195</b>
								<p>Tư vấn miễn phí 20/24</p>
							</div>

						</div>&emsp;

					</div>

				</div>

			</div>
		</div>
	</div><br>
	

</body>
</html>



