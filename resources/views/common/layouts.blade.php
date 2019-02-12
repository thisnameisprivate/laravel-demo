<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel表单篇 - @yield('title')</title>
    @section('style')
        <style>
            .title{height:200px; width:100%; font-size:2rem; font-weight:800; text-align:center; line-height:200px;}
            .content{border:1px solid #ccc; height:500px; width:100%;}
            .footer{color:gray; font-size:0.5rem; height:200px; width:100%; text-align:center; line-height:200px;}
        </style>
    @show
</head>
<body>
@section('header')
    <div class="title">laravel-表单篇</div>
@show
@section('content')
    <div class="content">
1
    </div>
@show
@section('footer')
    <div class="footer">2019-02-10</div>
@show
</body>
@section('javascript')
@show
</html>