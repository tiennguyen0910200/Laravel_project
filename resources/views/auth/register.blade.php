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
        <center><h1 style="font-style: italic; ">REGISTER</h1></center>
        <hr>
        <br>
        <form action="/auth/register" method="POST">
            @csrf
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Username</label>
                <input type="text" class="form-control" name = "username" placeholder="Username">
            </div>
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Password</label>
                <input type="text" class="form-control" name = "password" placeholder="Password">
            </div>
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Name</label>
                <input type="text" class="form-control" name = "name" placeholder="Name">
            </div>
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Day of birth</label>
                <input type="text" class="form-control" name = "dob" placeholder="Class">
            </div>
            <div class="form-group">
                <label  style="float: left; font-size: 18px;"> Role</label>
                <input type="text" class="form-control" name = "role" placeholder="role">
            </div>
            <center><button type="submit" class="btn btn-dark">Register</button></center>
        </form>
    </div>

</body>
</html>