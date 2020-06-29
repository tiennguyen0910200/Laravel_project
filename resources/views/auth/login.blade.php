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
    <div>
        <center><h1 style="font-style: italic; ">LOGIN</h1></center>
        <br>
        <form action="/auth/login" method="POST">
            @csrf
            <!-- dùng post để bảo mật -->
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Username</label>
                <input type="text " class="form-control" placeholder="Enter your username" name = "username" >
            </div>
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name = "password">
            </div>
            <p style="color: red">{{ Request::get('error')}}</p>

            <button type="submit" class="btn btn-dark">Login</button>
        </form>
    </div>

</body>
</html>