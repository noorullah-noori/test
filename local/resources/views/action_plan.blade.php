 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif

<style type="text/css">
.desc{
	margin-left: 10.3%;
	margin-top: -20px;
	color: rgba(30, 27, 27, 0.72);
	font-size: 15px;
}

</style>	
	
	<section id="content">
	
	
	<div class="container">

	    	<div class="row">
	    	
	    	@include('include.resources_sidebar')
<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Resources</a>
	              <span class="divider">/</span>
	            <a class="section">National Action Plans</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%;padding-left:2%;font-size:18px;">
			
			@foreach($action_plan as $value)
			<div class="row" >
				<div class="col-md-2" style="float:<?php echo $dir; ?>">
					<a href="{{asset('reports/'.$value->pdf)}}" target="_blank"><img src="{{asset('img/pdf.png')}}" style="width:60px;"></a>
				</div>
				<div class="col-md-10">
					<a href="{{asset('reports/'.$value->pdf)}}" target="_blank">
						<span style="margin-left:2%">{{$value->title}}</span>
					</a>
				</div>
				
				<div class="desc">
					<p>{{$value->description}}</p>
				</div>
			</div>
			<hr style="width:80%; margin-top: -15px;margin-right:130px;">
			@endforeach


		</div>
		</div>


	</div>
	</section>


<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")