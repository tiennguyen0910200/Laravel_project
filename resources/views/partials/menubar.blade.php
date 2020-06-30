<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		/* Navbar container */
		.navbar1 {
			width:70%;
			overflow: hidden;
			text-align: center;
			border-top: solid black;
			border-width: 1px;
			border-color: silver;
			margin: auto;
		}


		/* Navigation links */

		.navbar1 a {
			float: left;
			font-size: 16px;
			color: black;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}


		/* The subnavigation menu */

		.subnav {
			float: left;
			overflow: hidden;
		}


		/* Subnav button */

		.subnav .subnavbtn {
			font-size: 16px;
			border: none;
			outline: none;
			color: black;
			padding: 14px 16px;
			background-color: inherit;
			font-family: inherit;
			margin: 0;
		}


		/* Add a red background color to navigation links on hover */

		.navbar a:hover,
		.subnav:hover .subnavbtn {
			background-color: none;
		}


		/* Style the subnav content - positioned absolute */

		.subnav-content {
			background: #fff3f5;
			display: none;
			position: absolute;
			top: 330px;
			background-color: none;
			width: auto;
			z-index: 1;
		}


		/* Style the subnav links */

		.subnav-content a {
			float: center;
			color: black;
			text-decoration: none;
		}


		/* Add a grey background color on hover */

		.subnav-content a:hover {
			color: #c0c0c0;
		}


		/* When you move the mouse over the subnav container, open the subnav content */

		.subnav:hover .subnav-content {
			display: block;
		}

		.top-bar {
			display: inline;
		}

		.top-bar .top-bar_left {
			float: left;
			padding-top: 10px;
		}

		.top-bar .top-bar_right {
			float: right;
			padding-top: 10px;
		}

		.top-bar_right a {
			direction: none;
			color: black;
		}

		.top-bar_right a:hover {
			color: #8a8a5c;
		}

		h1.name-shop a {
			color: #e72222 !important;
			font-family: florence, cursive, sans-serif;
		}

		h1.name-shop a:hover {
			color: #e72222 !important;
			text-decoration: none !important;
		}

		.cart {
			margin-top: 10px;
			float: right;
		}

		.cart a {
			color: black;
		}

		.cart a:hover {
			text-decoration: none;
		}

		.search-bar {
			display: inline;
		}

	</style>
</head>
<body>
	<div class="navbar1">
		<a href="/home">Home</a>
		<a href="#home">About Us</a>
		<div class="subnav">
			<a class="subnavbtn" href="">New Lipstick <i class="fa fa-caret-down"></i></a>
			<div class="subnav-content">
				<a href="#deliver">3CE Xanh</a>
				<a href="#package">Missha</a>
				<a href="#express">Innisfree</a>
			</div>
		</div>
		<div class="subnav">
			<a class="subnavbtn" href="#bring">Hot Lipstick <i class="fa fa-caret-down"></i></a>
			<div class="subnav-content">
				<a href="#link1">Mac</a>
				<a href="#link2">3CE</a>
				<a href="#link3">KiKo</a>
				<a href="#link4">INK</a>
			</div>
		</div>
		<div class="subnav">
			<a class="subnavbtn" href="#bring">Contact <i class="fa fa-caret-down"></i></a>
			<div class="subnav-content">
				<a href="#link1">Link 1</a>
				<a href="#link2">Link 2</a>
				<a href="#link3">Link 3</a>
				<a href="#link4">Link 4</a>
			</div>
		</div>
		<div class="col-sm-6" style="margin-right: -550px;">
			<form class="search-form" action="/user/search">
				<input type="search" name="search" placeholder="Search">
			</form>
		</div>
	</div>
</body>
</html>
