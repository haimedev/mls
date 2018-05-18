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
        <a href="/"/><img src="{{asset('image/mls_logo.png')}}"/></a>
        @if(Session::has("loggedAdmin") && Session::get("loggedAdmin") != "")
        <div class="navbar">
            <a href="#home">Home</a>
            <div class="dropdown">
                <button class="dropbtn">Client 
                </button>
                <div class="dropdown-content">
                    <a href="/client/create">New</a>
                    <a href="#">Update</a>
                    <a href="#">Delete</a>
                </div>
            </div> 
            <div class="dropdown">
                <button class="dropbtn">Admin 
                </button>
                <div class="dropdown-content">
                    <a href="/sys_admin/create">New</a>
                    <a href="/sys_admin">Record</a>
                </div>
            </div> 
        </div>
        @endif
    </div>
    @yield('body')
</body>
<script src="{{asset('js/jquery321.js')}}"></script>
<script src= @yield('javascript')></script>
</html>
