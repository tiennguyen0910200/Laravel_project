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
</head>
<body>
	@include('partials\head')
	<ul class="nav nav-tabs" role="tablist">
		<li class="nav-item">
			<a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">Manage Lipsticks</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">Manage Users</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">Manage Orders</a>
		</li>
	</ul>
	<div class="tab-content">
		<div class="tab-pane active" id="tabs-1" role="tabpanel">
			<h1 style="text-align: center;color: #ff828d;">Manage Lipsticks</h1><br>
			<form class="form" method="POST" action="/admin/create" enctype="multipart/form-data">
				@csrf
				<center><button type="submit" class="btn btn-info">Add</button></center>
			</form>

			<table class="table">
				<tr style="color:#ff828d; font-size: large;font-weight: bold;">
					<td>Name</td>
					<td>Old Price</td>
					<td>New Price</td>
					<td>Photo</td>
					<td></td>
				</tr>
				@foreach($sons as $todo)
				<tr>
					<th>
						{{ $todo->name}}
					</th>
					<th style="color: #f8c6c7">
						{{number_format($todo->oldPrice)}}VND
					</th>
					<th>
						{{number_format($todo->newPrice)}}VND
					</th>
					<th>
						<img style="width: 200px; height: 200px;" src="/{{'storage/' .$todo->img}}" />
					</th>
					<th>
						<form method="POST" action="/admin/dashboard/{{$todo->id}}">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-outline-success">Delete</button>
						</form>
					</th>
					<th>
						<form method="GET" action="/admin/{{$todo->id}}/edit">
							@csrf
							<button type="submit" class="btn btn-outline-info">Edit</button>
						</form>
					</th>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="tab-pane" id="tabs-2" role="tabpanel"><br>
			<h1 style="text-align: center;color: #ff828d;">Manage Users</h1><br>
			<br>
			<table class="table">
				<tr style="color:#ff828d; font-size: large;font-weight: bold;">
					<td>Username</td>
					<td>Name</td>
					<td>Day of birth</td>
					<td>Role</td>
					<td></td>
				</tr>
				@foreach($users as $user)
				<tr>
					<th>
						{{ $user->username}}
					</th>
					<th>
						{{ $user->name}}
					</th>
					<th>
						{{ $user->dob}}
					</th>
					<th>
						{{ $user->role}}
					</th>
					<th>
						<form method="POST" action="/admin/dashboard/{{$user->id}}">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-outline-success">Delete</button>
						</form>
					</th>
				</tr>
				@endforeach
			</table>
		</div>
		<div class="tab-pane" id="tabs-3" role="tabpanel">
			<h1 style="text-align: center;color: #ff828d;">Manage Orders</h1><br>
			<table class="table">
				<tr style="color:#ff828d; font-size: large;font-weight: bold;">
					<th>User_id</th>
					<th>Name</th>
					<th>Phone</th>
					<th>Address</th>
					<th>Detail</th>
				</tr>
				@foreach($orders as $orders)
				<tr>
					<td>
						{{ $orders->user_id}}
					</td>
					<td>
						{{ $orders->name}}
					</td>
					<td>
						{{ $orders->phone}}
					</td>
					<td>
						{{ $orders->address}}
					</td>
					<td>
						{{ $orders->detail}}
					</td>
					<td>
						<form method="POST" action="/admin/dashboard/{{$orders->id}}">
							@csrf
							@method("DELETE")
							<button type="submit" class="btn btn-outline-success">Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
	@include('partials\foot')
</body>
</html>