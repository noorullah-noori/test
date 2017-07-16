 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php 
  $dir = 'left';
  $direction = 'right';

   ?>
  @if($lang=='en')
  <?php
   $dir = 'right';
   $direction='left'; 
   ?>
  @endif
  <?php
   $title = "title_".$lang;
   $description = "description_".$lang;
   $responsibilities = "responsibilities_".$lang;
  ?>


<section id="content">
	
	
	<div class="container">
		<div class="row">

			@include('include.sidebar')


			<div class="col-md-9" style="margin-top:2%">
				<div class="panel panel-info">
					<div class="panel-heading">
						<label>{{$job->$title}}</label>
					</div>
					<div class="panel-body">
						<h1 class="ui header small">
							About OGPA
						</h1>
						<p>SUPPORT directly assists USAID/Afghanistanâ€™s Program and Projects Development Office (PPDO) with information management services and provides the PPDO and USAID/Afghanistan with a number of key services, including information management and reporting products and performance monitoring plans and related activities. SUPPORT is seeking well qualified Afghan candidates for a newly established field monitoring unit which will provide periodic reviews of specific activities on behalf of USAID/Afghanistan.</p>
						<h1 class="ui header small">
							Job Summary
						</h1>
						<p>{{$job->$description}}</p>
						<h1 class="ui header small">
							Responsibilities
						</h1>
						<p>{!! nl2br($job->$responsibilities) !!}</p>

					</div>
					<div class="panel-footer">
						<div class="ui grid">
								<div class="column">
								<div class="ui left floated tiny buttons">
									<div class="ui button blue tiny"><i class="fa fa-envelope"></i></div>
									<div class="ui button green tiny"><i class="fa fa-print"></i></div>
								</div>
								<div class="ui right floated tiny buttons">
									<div class="ui button facebook tiny"><i class="fa fa-envelope"></i></div>
									<div class="ui button red tiny"><i class="fa fa-google-plus"></i></div>
									<div class="ui button twitter tiny"><i class="fa fa-twitter"></i></div>
								</div>
							</div>
						</div>

					</div>


				</div>


			</div>
		</div>


	</div>
</section>

<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")