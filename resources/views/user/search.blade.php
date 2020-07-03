 <!DOCTYPE html>
 <html lang="en">

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
    @include('partials\head')<br>
    <a href="/home" style="text-decoration: none;">Home</a>
    <div class="container">
            <div class="row" >
               @foreach ($research as $search)
                <div class="col-sm-3">
                    <div style="border: 1px solid #fef3f5; width: 300px;height: 500px; margin-bottom: 30px;">
                        <center><img class="img" src="{{'/storage/'.$search->img}}"/></center>
                        <h2 class="name"><b>{{$search->name}}</b></h2>
                            <div style="display: flex; justify-content: center;">
                            <strike><h4 style="color: #f8c6c7" >{{number_format($search->oldPrice)}}VND</h4></strike>
                            <h4 style="margin-left: 30px; color: #de030a">{{number_format($search->newPrice)}}VND</h4>
                        </div>
                        <br>
                        <center><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span></center>
                            <br>
                            <center><form method="GET" action="/user/detail/{{$search->id}}">
                                <button type="submit" class="btn btn-danger">Detail</button>
                            </form></center>
                        </div>
                    </div>
                    @endforeach
                </div>
                <br>
            </div>
    @include('partials\foot')

</body>

</html>
