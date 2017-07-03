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
<link rel="stylesheet" href="css/modal.min.css"/>
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
		  height:auto;
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
        header .navbar {
          min-height:40px;
        }
        .footer {
          min-height: 55%;
        }

        
	</style>
</head>
<body class="body">
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> 	
      <div class="col-md-6 col-xs-6 lang" style="padding-left:5%">
    <span class="col-md-1" style="margin-left:-7%"><a  style="color:white;font-weight:bold;font-size:15px" href="javascript:void(0)" class="languageSwitcher" id="en" >English</a></span>
    <span class="col-md-1"  style="margin-left:3%"><a  style="color:white;font-weight:bold;font-size:15px" href="javascript:void(0)" class="languageSwitcher" id="dr" >دری</a></span>
    <span class="col-md-1"  style="margin-left:-2%"><a  style="color:white;font-weight:bold;font-size:15px" href="javascript:void(0)" class="languageSwitcher" id="pa" >پشتو</a></span>
  </div>
  <div class="col-md-6 tel">
        <p class="pull-right"><i class="fa fa-phone"></i>Tel No. (+001) 123-456-789</p>
        </div>
      </div>
    </div>
  </div>
</div>
	<!-- start header -->
	<header>
		<div class="container-fluid" style="background-image:url({{asset('img/header-bg.png')}});">
      <div class="col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-0.5">
        <img src="{{asset('img/logo.png')}}" style="height:98px;padding-top:3px">
      </div>
      <div class="col-md-3 col-md-offset-1 col-xs-3 col-xs-offset-1">
        <img src="{{asset('img/header-center.png')}}" style="height:98px;">
      </div>
      <div class="col-md-2 col-md-offset-2  col-xs-2 col-xs-offset-2">
        <img src="{{asset('img/ogp.png')}}" style="height:97px;padding-top:1px">
      </div>
      </div>
    <div class="navbar navbar-default navbar-static-top">
            <div class="container">
       






</div>
      <div class="navbar navbar-default navbar-static-top">
<div class="container">
    <!-- <div class="ui secondary menu" > -->
    <div class="ui stackable secondary menu large" id="hybrid">
        <a href="{{route('home')}}" class="right item">{{ trans('home.home')}}</a>
          <div class="ui dropdown item">
          {{ trans('home.about')}}<i class="icon dropdown"></i>
          <div class="menu">
              <a href="{{route('ogp')}}" class="item">OGP Introduction</a>
              <a href="{{route('ogpa')}}" class="item">OGPA Introduction</a>
              <a href="{{route('working_groups')}}" class="item">Working Groups</a>
              <a href="{{route('opportunities')}}" class="item">Career & Opportunities</a>
              <a href="{{route('news')}}" class="item">OGPA News</a>

          </div>
          </div>
          <a href="{{route('themes1')}}" class="item">Themes</a>
          <div class="ui dropdown item">
          Resources
          <i class="icon dropdown"></i>
          <div class="menu">
            <a class="item" href="{{route('agendas')}}">Agendas</a>            
            <a class="item" href="{{route('meetings')}}">Meeting Minutes</a>
            <a class="item" href="{{route('assessment')}}">Self-Assessment Reports</a>
            <a class="item" href="{{route('irm')}}">IRM Reports</a>
            <a class="item" href="{{route('consultation')}}">Consultation Papers</a>
            <a class="item" href="{{route('action_plan')}}">National Action Plans</a>                                          

          </div>
          </div>
          <div class="field">
          <div  class="ui dropdown item">
          Participants
          <i class="icon dropdown"></i>
          <div class="menu">
            <a class="item" href="{{route('global_participants')}}">Global Participants</a>
            <a class="item" href="{{route('national_participants')}}">National Participants</a>
          </div>
          </div>
          </div>
          <div class="ui dropdown item">
              Calendar
              <i class="icon dropdown"></i>
              <div class="menu">
                <a class="item" href="{{route('seminars')}}">Seminars</a>
                <a class="item" href="{{route('events')}}">Events</a>
                <a class="item" href="{{route('sessions')}}">Sessions</a>
                <a class="item" href="{{route('forum_meetings')}}">Forum Meetings</a>

              </div>

          </div>
            <a class="item" href="{{route('stories')}}">Success Stories</a>
            <a class="item" href="{{route('contacts')}}">Contacts</a>

    </div>    
<!-- </div> -->

</div>
<script>

</script>
	</header>
</div>
    <style>
    .ui.large.breadcrumb {
        margin-bottom:10px;
    }

    </style>    