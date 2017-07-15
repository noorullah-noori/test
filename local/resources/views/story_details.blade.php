<?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
	<?php 
	$dir = 'right';
	$direction = 'left'; ?>
	@if($lang=='en')
	<?php 
	$dir = 'left';
	$direction = 'right'; ?>
	@endif
	<?php 
	$title = "title_".$lang;
	$description = "description_".$lang;
	$author = "author_".$lang;
	$date = "date_".$lang;
	 ?>		
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">

				<div class="panel panel-info">
					<div class=" panel-heading" style="direction:<?php ($lang!='en')?'rtl':''; ?>">
						<label class="">{{$story_details->$title}}</label>
					</div>
					<div class="panel-body" style="direction:<?php ($lang!='en')?'rtl':''; ?>">
						<p>{{$story_details->$description}}</p>
					

					</div>
					<div class="panel-footer">
						<div class="ui grid">
								<div class="column">
								<div class="ui <?php echo $dir; ?> floated tiny header">
									<a href=""  style="color:#09f">{{$story_details->$author}}</a>&nbsp;|&nbsp;{{$story_details->$date}}<span ></span>
								</div>
								<div class="ui <?php echo $direction; ?> floated tiny buttons">
									<div class="ui button green tiny"><i class="fa fa-print"></i></div>
									<div class="ui button red tiny"><i class="fa fa-google-plus"></i></div>
									<div class="ui button twitter tiny"><i class="fa fa-twitter"></i></div>
								</div>
							</div>
						</div>

					</div>


		</div>


	</div>
	</section>
	<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")