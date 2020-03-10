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
    <link href="{{asset('assets/bootstrap/css/popper.min.css')}}" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="{{asset('assets/fontawesome/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <style>
    a {
        color: #20809f;
        text-decoration: none;
        background-color: transparent;
    }

    #logo {
        width: 65%;
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
        font-size: 30px;
        color: #20809f;
    }

    .button-call {
        border: 1px #fff solid;
        color: #fff;
        font-weight: 600;
        font-size: 19px;
        border-radius: 3px;
    }

    .sidebar-menu li {
        padding: 9px 9px;
        border-bottom: 1px #ddd solid;
        width: 100%;
    }

    .sidebar-menu li a {
        text-transform: uppercase;
        text-decoration: none;
    }

    .title-menu {
        border-bottom: 2px #20809f solid;
    }


    .title-menu i {
        background-color: #20809f;
        padding: 0 32px 0px 5px;
        font-size: 29px;
        color: #ffc400;
        border-top-right-radius: 90px;
    }

    .mainSection {
        margin: 10px 0;
    }

    .button-call i {
        color: #20809f;
        font-weight: 600;
        padding: 1px;
    }
    </style>
</head>

<body>
    <header id="mainHeader">
        <div class="container">
            <div class="row py-1">
                <div class="col-md-3">
                    <div class="rounded float-left align-middle">
                        <a href="http://127.0.0.1:8000/">
                            <img id="logo" src="assets/images/logo.svg" alt="Logo ChuyenWEB">
                        </a>
                    </div>
                </div>
                <div class="col">
                    <nav class="rounded  d-block text-uppercase">
                        <ul class="nav nav-pills  mx-auto text-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Bài viết</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Link 1</a>
                                    <a class="dropdown-item" href="#">Link 2</a>
                                    <a class="dropdown-item" href="#">Link 3</a></div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sản Phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Diễn đàn</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Chia sẻ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-md-3 text-right">
                    <div class="rounded my-2">
                        <a href="#">
                            <i class="fab fa-youtube-square icon-header"></i>
                        </a>
                        <a href="#">
                            <i class="fas fa-envelope icon-header"></i>
                        </a>
                        <a href="https://fb.com/phuong97nhp" target="_back">
                            <i class="fab fa-facebook-square icon-header"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div id="mainContainer" class="mb-3">

        <div id="app">
            <home-component></home-component>
        </div>

    </div>
    <footer id="mainFooter">
        <div class="container">
            <div class="row my-5">
                <a href="#" class="button-call text-uppercase">
                    <i style=" background-color: #fff; ">Gọi ngay:</i>
                    <i>086 984 7865</i>
                </a>
            </div>
        </div>
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
</body>

</html>