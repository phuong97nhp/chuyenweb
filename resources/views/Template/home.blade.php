<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('Title')</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <style>
    #logo {
        width: 50%;
    }

    #mainHeader {
        background-color: #fffffff1;
        box-shadow: 1px 0px 5px 0px;
        z-index: 99999;
        top: 0;
        position: fixed;
        width: 100%;
        overflow: hidden;
        border-bottom: 3px #ffc400 solid;
    }

    #mainFooter {
        background-color: #20809f;
        background-image: url('assets/images/bg-footer.jpg');
        box-shadow: 1px 0px 5px 0px;
        height: 300px;
        border-top: 3px #ffc400 solid;
    }

    #mainContainer {
        margin-top: 70px;
        min-height: 500px;
    }

    .icon-header {
        font-size: 35px;
        color: #20809f;
    }
    </style>
</head>

<body>
    <header id="mainHeader" class="container-fluid">
        <div class="row py-1">
            <div class="col-md-4">
                <div class="rounded float-left align-middle">
                    <a href="#">
                        <i class="fas fa-bars icon-header"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <a href="http://127.0.0.1:8000/">
                    <img id="logo" class="rounded mx-auto d-block" src="assets/images/logo.svg" alt="Logo ChuyenWEB">
                </a>
            </div>
            <div class="col-md-4 ">
                <div class="rounded float-right align-middle">
                    <a href="#">
                        <i class="fab fa-youtube-square icon-header"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-envelope icon-header"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-facebook-square icon-header"></i>
                    </a>
                    <a href="#">
                        <i class="fas fa-phone-square icon-header"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <div id="mainContainer">

        <div id="app">
            <home-component></home-component>
        </div>

    </div>
    <footer id="mainFooter">
        sfsf
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
</body>

</html>