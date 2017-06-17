<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Open Government Partnership Afghanistan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="{{asset('css/style.css')}}" rel="stylesheet" />
<link href="{{asset('css/jquery.fancybox.css')}}" rel="stylesheet"> 
<link href="{{asset('css/flexslider.css')}}" rel="stylesheet" /> 
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/semantic.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/flag.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/modal.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('css/icon.min.css')}}">
<link rel="stylesheet" href="css/fullcalendar.min.css"/>


 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
<style type="text/css">
		.btn-circle.btn-xl {
		  border-radius: 50%;
		  width: 140px;
		  height: 140px;
		  padding: 10px 16px;
		  font-size: 24px;
		  line-height: 1.33;
		}
		.btn-circle.btn-xl:hover {
		  border: 4px solid #c9c9c9;
		  box-shadow: 0px 0px 20px 10px rgba(0,0,0,0.6)
		}
		.btn-text {
			line-height: 3;
		}
		.social-padding {
			padding-left:0;
		}
		html, body {
		  height: 100%;
		  margin: 0;
		}
		.footer{
		  height:100%;
          width:100%;
		}
		.panel a {
			color:black;
		}
        .ui.menu:first-child {
            margin-bottom:1px;
            margin-top:5px;
        }
        section.section-padding.gray-bg {
            margin-top:5px;
        }
	</style>
</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 	  
        <p class="pull-left hidden-xs"><span>
        	<a href="" style="padding-right:10px;font-weight:bold;font-size:14px;color:white">English</a>
        	<a href="" style="padding-right:10px;font-weight:bold;font-size:14px;color:white">دری</a>
        	<a href="" style="padding-right:10px;font-weight:bold;font-size:14px;color:white">پښتو</a>
        </span></p>
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
		<div class="container-fluid" style="background-image:url({{asset('img/header-bg.png')}});height:100px">
			<div class="col-md-11">
				<img src="{{asset('img/ogpa.png')}}" style="height:98px;margin-left:6.4%;padding-top:3px">
				<img src="{{asset('img/header-center.png')}}" style="height:98px;margin-left:33%">
                <img src="{{asset('img/ogp.png')}}" style="height:98px;margin-left:26%">
			</div>
            </div>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <!-- <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img style="width:85px;height:42px" src="{{asset('img/ogpa.png')}}" alt="logo"/></a>
                </div> -->





<!-- Semantic Menu Demo-->


<!-- Old Menu 

                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{route('home')}}">Home</a></li> 
						 <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('ogp')}}">OGP Introduction</a></li>
                            <li><a href="{{route('ogpa')}}">OGPA Introduction</a></li>
                            <li><a href="{{route('working_group')}}">Working Groups</a></li> 
                            <li><a href="{{route('carriers')}}">Carrier & Opportunities</a></li>
                            <li><a href="{{route('news')}}">OGP News</a></li>
                        </ul>
                    </li> 
						<li><a href="{{route('themes1')}}">Themes</a></li>
						<li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Resources<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('agendas')}}">Agendas</a></li>
                            <li><a href="{{route('meetings')}}">Meeting Minutes</a></li>
                            <li><a href="{{route('assesment')}}">Self-Assesment Reports</a></li> 
                            <li><a href="{{route('irm')}}">IRM Reports</a></li>
                            <li><a href="{{route('consultation')}}">Consultation Papers</a></li>
                            <li><a href="{{route('action_plan')}}">National Action Plans</a></li>
                        </ul>
                    </li>
                        <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Participants<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('global_participants')}}">Global Participants</a></li>
                            <li><a href="{{route('national_participants')}}">National Participants</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">Calendar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('seminars')}}">Seminars</a></li>
                            <li><a href="{{route('events')}}">Events</a></li>
                            <li><a href="{{route('sessions')}}">Sessions</a></li> 
                        </ul>
                    </li>
                        <li><a href="{{route('stories')}}">Success Stories</a></li>
                        <li><a href="{{route('contacts')}}">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>-->
        <!-- Semantic Menu Demo-->



  
</div>
<div class="container">
    <div class="ui secondary menu" >
    <div class="ui stackable right secondary  menu large" id="hybrid">
        <a href="{{route('home')}}" class="item">Home</a>
          <div class="ui dropdown item">
          About Us <i class="icon dropdown"></i>
          <div class="menu">
              <a href="{{route('ogp')}}" class="item">OGP Introduction</a>
              <a href="{{route('ogpa')}}" class="item">OGPA Introduction</a>
              <a href="{{route('working_group')}}" class="item">Working Groups</a>
              <a href="{{route('opportunities')}}" class="item">Carrier & Opportunities</a>
              <a href="{{route('news')}}" class="item">OGP News</a>
              <a href="{{route('themes1')}}" class="item">Themes</a>

          </div>
          </div>
          <a href="{{route('themes1')}}" class="item">Themes</a>
          <div class="ui dropdown item">
          Resources
          <i class="icon dropdown"></i>
          <div class="menu">
            <a class="item" href="{{route('agendas')}}">Agendas</a>            
            <a class="item" href="{{route('meetings')}}">Meeting Minutes</a>
            <a class="item" href="{{route('assesment')}}">Self-Assesment Reports</a>
            <a class="item" href="{{route('irm')}}">IRM Reports</a>
            <a class="item" href="{{route('consultation')}}">Consultation Papers</a>
            <a class="item" href="{{route('action_plan')}}">National Action Plans</a>                                          

          </div>
          </div>
          
          <div  class="ui dropdown item">
          Participants
          <i class="icon dropdown"></i>
          <div class="menu">
            <a class="item" href="{{route('global_participants')}}">Global Participants</a>
            <a class="item" href="{{route('national_participants')}}">National Participants</a>
          </div>
          </div>
          <div class="ui dropdown item">
              Calendar
              <i class="icon dropdown"></i>
              <div class="menu">
                <a class="item" href="{{route('seminars')}}">Seminars</a>
                <a class="item" href="{{route('events')}}">Events</a>
                <a class="item" href="{{route('sessions')}}">Sessions</a>

              </div>

          </div>
            <a class="item" href="{{route('stories')}}">Success Stories</a>
            <a class="item" href="{{route('contacts')}}">Contacts</a>

    </div>    
</div>

</div>

	</header>
    <style>
    .ui.large.breadcrumb {
        margin-bottom:10px;
    }
    </style>    