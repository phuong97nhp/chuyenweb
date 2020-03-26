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
    <link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
    <style>
    * {
        font-family: 'Lora', serif;
    }

    p {
        font-family: 'Lora', serif;
        font-size: 20px;
        font-weight: 500;
    }

    nav li a {
        font-family: 'Lora', serif;
        font-size: 15px;
        font-weight: 600;
        color: #fff;
    }

    a {
        color: #20809f;
        text-decoration: none;
        background-color: transparent;
    }

    .contact-phone {
        color: #fff;
        font-size: 20px;
        font-weight: 600;
        border: 1px solid;
        padding: 6px 28px;
    }

    #logo {
        width: 65%;
    }

    #mainHeader {
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
        /*margin-top: 70px;
        min-height: 500px;*/
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

    .sidebar-menu {
        background-color: azure;
    }


    .title-menu i {
        background-color: #20809f;
        padding: 0 32px 0px 5px;
        font-size: 29px;
        color: #ffc400;
        border-top-right-radius: 90px;
    }

    .mainSection {
        margin: 50px 0;
    }

    .button-call i {
        color: #20809f;
        font-weight: 600;
        padding: 1px;
    }

    .sub-item-content {
        width: 65%;
        padding: 7px;
    }

    .sub-item-img {
        width: 35%;
        background-color: #f9f9f9;
    }

    .item-date {
        font-size: 13px;
        line-height: 8px;
        color: #ffc400;
    }

    .item-title {
        font-size: 24px;
        line-height: 20px;
        color: #20809f;
        margin-bottom: auto;
    }

    .item-post {
        display: flex;
        border: 1px #ddd solid;
        background-color: azure;
        margin: 0 0 5px;
    }

    .item-content {
        font-size: 15px;
        line-height: normal;
    }

    .item-more {
        float: right;
        font-weight: 600;
    }

    .item-cat {
        font-size: 13px;
        font-weight: 700;
        color: #ffc400;
    }

    .sub-item-img img {
        width: 100%;
    }

    .flip-box {
        background-color: transparent;
        width: 190px;
        height: 190px;
        margin: 0 auto;
        perspective: 1000px;
    }

    .flip-box-inner {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        transition: transform 0.8s;
        transform-style: preserve-3d;
    }

    .flip-box:hover .flip-box-inner {
        transform: rotateY(180deg);
    }

    .flip-box-front,
    .flip-box-back,
    .flip-box-back-perent {
        position: absolute;
        width: 100%;
        height: 100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
    }

    .flip-box-front {
        transform: rotate(45deg);
        border: 4px red solid;
        box-shadow: #423b24 2px 1px 5px;
        color: black;
    }

    .flip-box-back {
        transform: rotateY(180deg);
    }

    .flip-box-back-perent {
        box-shadow: #423b24 2px 1px 5px;
        border: 5px red solid;
        transform: rotate(45deg);
    }


    .icon-flip-tech {
        font-size: 93px;
        transform: rotate(-45deg);
        top: 24%;
        color: #20809f;
        position: absolute;
        left: 25%;
    }

    .text-flip-tech {
        font-size: 20px;
        top: 60%;
        color: #20809f;
        position: absolute;
        left: 20%;
    }

    .flip-box-back h4 {
        color: #20809f;
        transform: rotate(-45deg);
        position: absolute;
        top: 40%;
        right: 19%;
        font-size: 30px;
    }

    #mainHeaderBanner {
        background-image: url('assets/images/banner1.png');
        height: 700px;
    }

    #mainHeaderBanner h2 {
        margin: 0;
        font-size: 25px;
        position: absolute;
        right: 20px;
        top: 60%;
    }

    #mainHeaderBanner img {
        margin: 0;
        width: 36%;
        position: absolute;
        right: 20px;
        top: 40%;
    }

    .back-Ground-Header {
        background-color: #ffc400;
    }

    .no-Back-Ground-Header {
        background-color: #ffffff4a;
    }

    .typed-cursor {
        opacity: 1;
        -webkit-animation: blink 0.7s infinite;
        -moz-animation: blink 0.7s infinite;
        animation: blink 0.7s infinite;
    }

    @keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-webkit-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes blink {
        0% {
            opacity: 1;
        }

        50% {
            opacity: 0;
        }

        100% {
            opacity: 1;
        }
    }

    #bottom-to-top {
        position: fixed;
        bottom: 30px;
        border-radius: 1px;
        display: none;
        right: 30px;
        z-index: 99999;
    }

    .show-img-product {
        width: 100%;
        height: auto;
        display: block;
        margin: 0 0 8px;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3);
        -webkit-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3);
        -moz-box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.3);
        -webkit-transition: all ease-in-out 7.2s;
        -moz-transition: all ease-in-out 7.2s;
        -o-transition: all ease-in-out 7.2s;
        position: absolute;
        top: 0;
    }

    .show-img-product:hover {
        top: 100%;
        transform: translateY(-100%);
        -webkit-transform: translateY(-100%);
        -moz-transform: translateY(-100%);
        -o-transform: translateY(-100%);
        -ms-transform: translateY(-100%);
    }

    .text-name-domain-project {
        z-index: 9999;
        top: 5px;
        padding: 3px;
        left: 5px;
        font-weight: 600;
        letter-spacing: 1.5px;
        position: absolute;
        font-size: 15px;
        color: #20809f;
        background-color: #ffc400;
    }

    .button-more-product {
        width: 70px;
        height: 47px;
        background-color: #ffc400;
        top: 84%;
        color: #ffffff;
        left: 84%;
        position: relative;
        font-weight: bold;
        font-size: 19px;
        padding: 6px;
        animation: button-more-product 5s 1;
        border-radius: 5px;
        -webkit-border-radius: 5px;
    }

    @keyframes button-more-product {
        0% {
            transform: rotate(0deg);
            left: -30px;
        }

        100% {
            transform: rotate(-360deg);
            left: 84%;
        }
    }

    .product-detail {
        height: 252px;
        margin: 15px 0;
        width: 100%;
        position: relative;
        border-radius: 5px;
        -webkit-box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.2);
        overflow: hidden;
    }
    </style>
</head>

<body>
    <button id="bottom-to-top" type="button" class="btn btn-info"><i class="fas fa-arrow-up"></i></button>
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
                        <a class="contact-phone" href="tell:0869847865">Liện hệ: 0869847865</a>
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
    </footer>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('assets/jquery/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/fontawesome/js/all.min.js')}}"></script>
    <script src="{{asset('assets/jquery/typed.js')}}"></script>
    <script>
    $(function() {
        $(".element").typed({
            strings: ["trao đổi kiến thức.", "thiết kế và xây dựng website chất lượng."],
            typeSpeed: 0
        });
    });

    $(document).on('scroll', function() {
        var height = $(document).scrollTop();
        if (height > 20) {
            // js for header
            $('#mainHeader').addClass('back-Ground-Header');
            $('#mainHeader').removeClass('no-Back-Ground-Header');
            // bottom to top
            $('#bottom-to-top').css('display', 'block');
        } else if (height < 20) {
            $('#mainHeader').removeClass('back-Ground-Header');
            $('#mainHeader').addClass('no-Back-Ground-Header');
            $('#bottom-to-top').css('display', 'none');
        }

    });

    $(document).ready(function() {
        $('#bottom-to-top').on('click', function() {
            $(document).scrollTop(0, 4000000);
        });
    });
    </script>

</body>

</html>