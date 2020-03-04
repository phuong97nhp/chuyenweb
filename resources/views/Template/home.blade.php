<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trao đổi chia sẽ học hỏi về kiến thức làm website</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets2/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
        <home-component></home-component>
    </div>
    <script src="{{asset('js/app.js')}}" ></script>
    <script src="{{asset('assets2/jquery/jquery-3.4.1.min.js')}}" ></script>
    <script src="{{asset('assets2/bootstrap/js/bootstrap.min.js')}}" ></script>
</body>
</html>