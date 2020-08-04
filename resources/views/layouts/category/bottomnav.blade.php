<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce @yield('title')</title>
    <link href="{{ asset('css/fontawesome/css/all.css') }}" rel="stylesheet">
</head>

    <style>
        #navbar {
            min-height: 150px;
            height: relative;
            background-color: white;
            color: #FFFFFF;
            font-size:.8em;
            margin-top:25px;
            padding-top: 15px;
            padding-bottom: 10px;
            position:fixed;
            left:0;
            bottom:0;
            width:100%;

        }
        p {
            color: wheat;
            
        }
    </style>
<body>
@yield('bottom')
<nav id="navbar" class="navbar navbar-expand-md navbar-dark bg-dark fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
            <p> WhatsApp : <i class="fab fa-whatsapp fa-2x"></i><br>XXXXXXXXXXXX </p>
            </div>
            <div class="col-sm-3">
                <p> Twitter : <i class="fab fa-twitter fa-2x"></i><br><a href="#">example@twitter.com </a></p>
            </div>
            <div class="col-sm-3">
                <p> Facebook : <i class="fab fa-facebook fa-2x"></i><br><a href="#">example@facebook.com</a></p>
            </div>
            <div class="col-sm-3">
                <p> Instagram : <i class="fab fa-instagram fa-2x"></i><br><a href="#">example@insatagram.com</a></p>
            </div>
        </div>
    </div>
</nav>
</body>

</html>
    