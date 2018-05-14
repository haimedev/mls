<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{asset('css/layout/header.css')}}">
	<title>Money Lending System</title>
    <link rel="stylesheet" type="text/css" href= @yield('css')/>
    <link rel=" stylesheet" type="text/css" href="{{asset('css/haime_bootstrap.css')}}"/>
</head>
<body>
    <div id="header">
        <img src="{{asset('image/mls_logo.png')}}"/>
    </div>
    @yield('body')
</body>
<script src="{{asset('js/jquery321.js')}}"></script>
<script src= @yield('javascript')></script>
</html>
