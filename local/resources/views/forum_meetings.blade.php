<?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif
	
	
	<section id="content">
	
	
	<div class="container">

	    	<div class="row">
	    	
	    	@include('include.calendar_sidebar')
	    	<!-- included filter -->
<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Calendar</a>
	              <span class="divider">/</span>
	            <a class="section">Forum Meetings</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%;padding-left:2%;font-size:18px;">
			
		</div>
		</div>


	</div>
	</section>


<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")