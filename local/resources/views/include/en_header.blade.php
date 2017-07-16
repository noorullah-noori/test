<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Open Government Partnership Afghanistan</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com/" />
<!-- css -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/jquery.fancybox.css')}}" rel="stylesheet"> 
<link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet" /> 
<link rel="stylesheet" href="{{asset('assets/css/modal.min.css')}}"/>
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/semantic.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/modal.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/icon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/fullcalendar.min.css')}}"/>

 
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
		  /*border: 4px solid #c9c9c9;*/
		 -webkit-box-shadow: inset -1px -3px 61px -5px rgba(0,0,0,0.75);
-moz-box-shadow: inset -1px -3px 61px -5px rgba(0,0,0,0.75);
box-shadow: inset -1px -3px 61px -5px rgba(0,0,0,0.75);
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
      /*position:fixed;*/
      bottom: 0;
      top:90%;
		}
		.panel a {
			color:black;
		}
        .ui.menu:first-child {
            margin-bottom:-1px;
            margin-top:0px;
        }
        section.section-padding.gray-bg {
            margin-top:5px;
        }
        header .navbar {
          min-height:40px;
        }

      #content{
        min-height:47%;
      }
      @font-face {
        font-family:"Yekan" ;
        src:url("{{asset('fonts/Yekan.woff')}}") ;
      }
      @font-face {
          font-family:"BTitr" ;
          src:url("{{asset('fonts/BTitr.woff')}}") ;
      }
      .lang{
        display: inline;
        color:white;
        font-weight:bold;
        font-size:14px;
        font-family: "Yekan",arial;
        padding-right:3px;
        /*padding-top: 1px;*/
      }
      .nav>li>a {
            padding-right:6px;
            margin-top: 4px;
            margin-bottom: -2px;
            padding: 5px;
      }
      .nav-pills>li>a:hover {
        background-color:transparent;
        color:white;
        text-decoration: none;

      }

        @media only screen and (max-width: 40em) { 
  #ogp {
   width:20px;
   left:-20px;
   bottom: 0px;
   top:1px;
    }
    #ogpa {
   
    }
    #middle {
      height: 85px;
    }
  }
      
	</style>
</head>
<body class="body">
<div id="wrapper" class="home-page">
<div class="topbar">
  <div  class="container">
  <nav class="header-nav-top" style="margin-top:-7px;float:left">           
 
       <ul class="nav nav-pills">
          
           <li class="">
            <a href="javascript:void(0)" class="lang languageSwitcher" style="font-family:Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;" id="en">English</a>
          </li>
          <li class=""> 
            <a href="javascript:void(0)" class="lang languageSwitcher my_class" id="dr">دری</a>
          </li>
          <li>
            <a href="javascript:void(0)" class="lang languageSwitcher my_class" id="pa">پشتو</a>
          </li>
          
        </ul>
      </nav>
      <nav class="header-nav-top" style="margin-top:-7px;float:right">           
 
       <ul class="nav nav-pills">
          
           <li class="">
            <a class="lang languageSwitcher" style="font-size: 12px;font-family:Lato,'Helvetica Neue',Arial,Helvetica,sans-serif; "><i style="color:#cde;" class="fa fa-phone"></i>&nbsp;&nbsp;Tel :&nbsp;&nbsp; 020 214 7017 </a>
          </li>
          
        </ul>
      </nav>
    </div>
    
</div>
	<!-- start header -->
	<header>

      <div class="container-fluid" style="background-image: url({{asset('assets/img/header-bg.png')}});">
        <div class="ui three column grid container" >
                <div class="column "><img  style="width:100px;top:1px;" id="ogp" class="ui medium image" src="{{asset('assets/img/ogp.png')}}"></div>
                <div class="column"><img  style="width:178px;" id="middle" class="ui centered medium image" src="{{asset('assets/img/header-center.png')}}"></div>
                <div class="column"><img style="width:100px;" id="ogpa" class="ui right floated medium image"  src="{{asset('assets/img/logo.png')}}"></div>
        </div>
    </div>
    <div class="navbar navbar-default navbar-static-top">
            <div class="container">
              
</div>
      <div class="navbar navbar-default navbar-static-top">
<div class="container">
    <!-- <div class="ui secondary menu" > -->
    <div class="ui stackable secondary menu medium" style="padding-left:5.5%" id="hybrid">
        <a href="{{route('home')}}" class="item">{{ trans('home.home')}}</a>
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