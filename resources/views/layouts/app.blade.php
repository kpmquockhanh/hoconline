<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<link rel="icon" href="/favo_ico.png" type="image/x-icon">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">--}}
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<style>
    body {font-family: "Lato", sans-serif}
    .mySlides {display: none}
     .active a{
         color: red !important;
         /*margin-left: 20px;*/
     }
    .nav-item a{
        color: #333;
    }
</style>
</style>
@yield('style')
<body>

<!-- Navbar -->
{{--<div class="w3-top" style="z-index: 9999;">--}}
    {{--<div class="w3-bar w3-black w3-card">--}}
        {{--<a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>--}}
        {{--<a href="{{route('home')}}" class="w3-bar-item w3-button w3-padding-large">TRANG CHỦ</a>--}}
        {{--<a href="{{route('course.index')}}" class="w3-bar-item w3-button w3-padding-large w3-hide-small">KHÓA HỌC</a>--}}
        {{--<a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">TOUR</a>--}}
        {{--<a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>--}}
        {{--<div class="w3-dropdown-hover w3-hide-small">--}}
            {{--<button class="w3-padding-large w3-button" title="More">TRỢ GIÚP <i class="fa fa-caret-down"></i></button>--}}
            {{--<div class="w3-dropdown-content w3-bar-block w3-card-4">--}}
                {{--<a href="#" class="w3-bar-item w3-button">Hướng dẫn đăng kí</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button">Hướng dẫn thanh toán</a>--}}
                {{--<a href="#" class="w3-bar-item w3-button">Tìm hiểu về đội ngũ giảng viên</a>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--@auth('user')--}}
            {{--<a class="dropdown-toggle w3-right w3-padding-large w3-hover-red w3-hide-small text" style="text-decoration: none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--Welcome, User {{\Auth::guard()->user()->name}}</a>--}}
            {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                {{--<a href="{{route('manage.index')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right text" style="text-decoration: none;"><i class="fa fa-user-alt"></i> Quản lí</a>--}}
                {{--<a href="{{route('logout')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-out-alt"></i> Logout</a>--}}
            {{--</div>--}}
        {{--@elseauth('admin')--}}
            {{--<a class="dropdown-toggle w3-right w3-padding-large w3-hover-red w3-hide-small text" style="text-decoration: none;" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--Welcome, Admin {{\Auth::guard('admin')->user()->name}}</a>--}}
            {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                {{--<a href="{{route('manage.index')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right text" style="text-decoration: none;"><i class="fa fa-user-alt"></i> Quản lí</a>--}}
                {{--<a href="{{route('logout')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-out-alt"></i> Logout</a>--}}
            {{--</div>--}}
        {{--@else--}}

            {{--<a href="{{route('login')}}" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-in-alt"></i> login</a>--}}
        {{--@endauth--}}
            {{--<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
                {{--<a href="{{route('manage.index')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right text" style="text-decoration: none;"><i class="fa fa-user-alt"></i> Quản lí</a>--}}
                {{--<a href="{{route('logout')}}" class="dropdown-item w3-padding-medium w3-hover-red w3-hide-small w3-right"><i class="fa fa-sign-out-alt"></i> Logout</a>--}}
            {{--</div>--}}
        {{--<a href="#" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>--}}
    {{--</div>--}}
{{--</div>--}}

<!-- Page content -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">DEVPRO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav w-100">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">TRANG CHỦ <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('course.index')}}">KHÓA HỌC </a>
            </li>
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    TRỢ GIÚP
                </a>
                <div class="dropdown-menu bg-light border-0" style="border-radius: 0 0 5px 5px" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Hướng dẫn đăng kí</a>
                    <a class="dropdown-item" href="#">Hướng dẫn thanh toán</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Đội ngũ giảng viên</a>
                </div>
            </li>
            <li class="text-dark dropdown">
                @auth('user')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hi, {{\Auth::guard('user')->user()->name}}
                    </a>
                @elseauth('admin')
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Hi, Admin {{\Auth::guard('admin')->user()->name}}
                    </a>
                @else
                    <a class="nav-link" href="{{route('login')}}">ĐĂNG NHẬP</a>
                @endauth

                @auth('user')
                    <div class="dropdown-menu bg-light border-0" style="border-radius: 0 0 5px 5px;left: -7rem; right: 0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('user.index')}}">Khóa học</a>
                        <a class="dropdown-item" href="#">Thanh toán</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('admin.logout')}}">Đăng xuất</a>
                    </div>
                @endauth
                    @auth('admin')
                    <div class="dropdown-menu bg-light border-0" style="border-radius: 0 0 5px 5px;left: -7rem; right: 0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('admin.index')}}">Dashboard</a>
                        {{--<a class="dropdown-item" href="#">Thanh toán</a>--}}
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a>
                    </div>
                @endauth

            </li>
        </ul>
        {{--<div class="bg-light">--}}
            {{--<form class="form-inline">--}}
                {{--<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
                {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
        {{--</div>--}}
    </div>
</nav>



@yield('content')
<script src="js/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

</body>
</html>
