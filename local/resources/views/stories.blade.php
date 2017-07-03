<?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif

<style type="text/css">
		
		.main-image{
			background-size: cover;
			background-image: url('img/story.jpg');
			min-height:400px;
		}

		.main-image h2{
			
			text-align: center;
			color: white;
			font-weight: 500;
			padding: 100px;
		}
		.main-image a{
			text-decoration: none;

		}
		#date{
			display: block;
			color: white;
			padding-left: 16%;
			line-height: 1.6;
		}
		#author a{
			display: block;
			color: white;
			padding-left: 16%;
			line-height: 1.6;
		}
		.sub-stories{
			background-color: #ddd;
			display: inline-block;
			width: 45%;
			padding-bottom: 10px;
			padding-left: 10px;
			margin-right: 55px;
			margin-bottom: 20px;
		}

</style>


<section id="content">
	
	<div class="container" style="padding-bottom:10px">  
      	
      	<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Home</a>
	              <span class="divider">/</span>
	            <a class="section">Success Stories</a>
	          </div>
	        </div>
        
          <div  class="main-image">
            <a href="{{route('story_details')}}" class="ui header">
              <h2>Announcing New Members of the OGP Steering Committee</h2>
            </a>
            <span id="date" style="float:<?php echo ($lang!='en')?'left':'right'; ?>;text-align:right;">5 June 2017<br>Manish Bapna</span>
          </div>
      </div>
      </section>
      <hr/>
      <div class="container" style="margin-bottom: 10px;  ">
        <div class="ui two cards">
          @foreach($stories as $value)
          <div class="card">
            <div class="content">
              <a href="{{url('story_details/'.$value->id)}}" class="header">{{$value->title}}</a>
              <div class="meta">{{$value->author}}</div>
              <div class="description">
                <h1 class="ui header"><i class="icon left quote"></i></h1>
                {{$value->description}}
              </div>
            </div>
          </div>
          @endforeach
         
          </div>
        </div>
      </div>
</div>
</section>

<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")