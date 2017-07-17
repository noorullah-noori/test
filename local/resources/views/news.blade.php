 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header") 

    <?php $direction='left'; ?>
      @if($lang!='en')
        <?php $direction='right'; ?>
      @endif
	
	<?php 
	$title = "title_".$lang;
	$created_date = "created_date_".$lang;
	$short_desc = "short_desc_".$lang;
	 ?>
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	
	    	@include('include.sidebar')

	    	
		<div class="col-md-9" style="margin-top:2%">
			<div class="col-md-12">
				<h3>News</h3>
				<div style="margin-top:0;" class="ui items">
				@foreach($news as $value)
				<a href="{{url('news_details/'.$value->id)}}" class="item" style="padding-bottom: 15px;border-bottom: 1px solid #ddd;font-size:14px;">
					<div class="image">
						<img src="{{asset('uploads/news_img/'.$value->image)}}" class="img-thumbnail" style="width:140gpx;border:1px solid #ddd;margin-left:15px;">
					</div>
					<div class="content">
						<div class="header"><?php echo (strlen($value->$title)>45)?substr($value->$title,0,45).'...':$value->$title;?></div>
						<div class="meta">{{$value->$created_date}}</div>
						<div class="description">{{$value->$short_desc}}</div>
					</div>
				</a>
				@endforeach
				
			</div>

			</div>


		</div>
		</div>


		<!-- pagination  start-->


		<div class="container">
			<div class="col-md-4 col-md-offset-5">
			{{$news->links()}}
			</div>	
		</div>

<!-- pagination end -->
	</section>
<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")