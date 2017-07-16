<!DOCTYPE html>
<head>
<title>OGPA Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="OGPA" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" >
<link rel="stylesheet" href="{{asset('css/semantic.min.css')}}" >

<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('admin-asset/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('admin-asset/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('admin-asset/css/font.css')}}" type="text/css"/>
<link href="{{asset('admin-asset/css/font-awesome.css')}}" rel="stylesheet"> 
<link rel="stylesheet" href="{{asset('admin-asset/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('admin-asset/css/persian-datepicker.css')}}">
<link rel="stylesheet" href="{{asset('admin-asset/css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->

</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        VISITORS
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<?php 
    use App\Messages;
    use App\Complaint;
    $msg = Messages::count('id'); 

?>
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a href="{{route('messages.index')}}">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">{{$msg}}</span>
            </a>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning"></span>
            </a>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <!-- user login dropdown start-->
            <div class="ui label green">Logged in as <strong>{{Session::get('username')}}</strong></div>
            <a href="{{route('logout')}}" class="ui button orange tiny"><i>Logout</i></a>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside >
    <div id="sidebar" class="nav-collapse" style="overflow-y:scroll;">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{route('admin')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('jobs.index')}}">
                        <i class="fa fa-suitcase"></i>
                        <span>Job Oppurtunities</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('news.index')}}">
                        <i class="fa fa-newspaper-o"></i>
                        <span>News</span>
                    </a>
                </li>
                 <li>
                    <a href="{{route('contacts.index')}}">
                        <i class="fa fa-phone"></i>
                        <span>Contacts</span>
                    </a>
                </li>
                 <li>
                    <a href="{{route('stories.index')}}">
                        <i class="fa fa-quote-left"></i>
                        <span>Stories</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('messages.index')}}">
                        <i class="fa fa-envelope"></i>
                        <span>Messages</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('resources.index')}}">
                        <i class="fa fa-database"></i>
                        <span>Resources</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('agendas.index')}}">
                        <i class="fa fa-book"></i>
                        <span>Agendas</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('meetings.index')}}">
                        <i class="fa fa-users"></i>
                        <span>Meetings</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('national_participants.index')}}">
                        <i class="fa fa-users"></i>
                        <span>National Participants</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('events.index')}}">
                        <i class="fa fa-users"></i>
                        <span>Events & Seminars</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('users')}}">
                        <i class="fa fa-user-plus"></i>
                        <span>Users</span>
                    </a>
                </li>

                <!-- <li>
                    <a href="login.html">
                        <i class="fa fa-user"></i>
                        <span>Login Page</span>
                    </a>
                </li> -->
                
            </ul>          
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->