 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
<style>
.ui.icon.image.afg {
	height:150px;
}
.ui.inverted.blue.button {
	margin-top:5px;
}
.ui.card>.content>.header:not(.ui), .ui.cards>.card>.content>.header:not(.ui) {
	border:none;
	border-bottom: 1px solid rgba(34,36,38,.1);
	padding-bottom: 15px;
}
.ui.card>.content, .ui.cards>.card>.content {
	border-top: none;
}

</style>
	<section class="section-padding gray-bg">
		<div class="ui alternate stripe vertical segment">
		  <div class="ui stackable center aligned grid container">
		    <div class="fourteen wide column">
		      <h1 class="ui icon header">
		      	<img class="ui icon image afg" src="{{asset('assets/img/afg.png')}}">
		        {{trans('home.ogpa_full')}}
		      </h1>
		      <div class="ui stackable center aligned vertically padded grid">
		        <div class="eight wide column">
		        <?php $dir = 'left'; ?>
		        	@if($lang=='en')
		        	<?php $dir = 'right'; ?>
		        	@endif
		          <h3 class="ui header test" style="";>{{trans('home.top_segment_details')}}</h3>
		          <a class="ui large <?php echo $dir; ?> labeled primary icon button" href="{{route('ogpa')}}">
		            <i class=" <?php echo $dir;?>chevron icon  "></i>
		            {{trans('home.more')}}
		          </a>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
	</section>
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
			<div class="col-md-12">
				<div class="aligncenter"><h2 class="aligncenter open_gov">{{trans('home.open_gov')}}</h2>
					<span style="font-size:18px;" class="open_gov_short">{{trans('home.open_gov_short')}}</span>
				</div>
				<br/>
			</div>
		</div>
		<div class="ui stripe community vertical segment">
  <div class="ui three column center aligned very relaxed stackable grid container">
    <div class="row">
      <div class="column">
        <h2 class="ui icon header">
          <b class="ui icon image fa fa-search" ></b>
          {{trans('home.transparency')}}
        </h2>
        <p>{{trans('home.transparency_short')}}</p>
      </div>
      <div class="column" style="border-right:1px solid #ddd;border-left:1px solid #ddd;">
        <h2 class="ui icon header">
          <b class="ui icon image fa fa-user" ></b>
          {{trans('home.participation')}}
        </h2>
        <p>{{trans('home.participation_short')}}</p>
      </div>
      <div class="column">
        <h2 class="ui icon header">
          <b class="ui icon image fa fa-book" ></b>
          {{trans('home.accountability')}}
        </h2>
        <p>{{trans('home.accountability_short')}}</p>
      </div>
    </div>
  </div>
</div>
	</div>
	
	<hr/>
	  
	
	
	<div class="about home-about">
				<div class="container">
						
						<div class="row">
						<?php $direction='right'; ?>
							@if($lang=='en')
							<?php $direction='left'; ?>
							@endif
							<div class="col-md-8 col-xs-12" style="float:<?php echo $direction; ?>">
								<div class="ui two stackable cards">
								<div class="ui card">
									<div class="content">
										<div class="header" style="<?php echo ($lang!='en')?"font-family:'BTitr';margin-bottom:5px;":"";?>";>{{trans('home.jobs&opportunities')}}</div>
									</div>
									<div class="content">
										<div class="ui feed">
											<?php $count=0;
											$lang_var = "title_".$lang;
											 ?>
											@foreach($job as $value)
											<div class="event">
												<div class="content">
													<div class="summary" style="text-align: <?php echo $direction; ?>">
														<a  href="{{url('job_details/'.$value->id)}}">{{$value->$lang_var}}</a>
													</div>
												</div>
											</div>
											<?php $count++; ?>
												
											@endforeach
											@if($count<4)
												@for($i=$count;$i<=4;$i++)
													<div class="event">
													<div class="content">
														<div class="summary" style="text-align: <?php echo $direction; ?>">
														&nbsp;
														</div>
													</div>
												</div>
												@endfor
											@endif
											
										</div>

									</div>
									<div class="extra content">
											<a href="{{route('opportunities')}}" class="ui fluid button inverted blue">View All</a>
										</div>

								</div>
								<div class="ui card">
									<div class="content">
										<div class="header" style="<?php echo ($lang!='en')?"font-family:'BTitr';margin-bottom:5px;":"";?>";>{{trans('home.latest_news')}}</div>
									</div>
									<div class="content">
										<div class="ui feed">
											<?php $count=0; ?>
											@foreach($news as $value)
											<div class="event">
												<div class="content">
													<div class="summary" style="text-align: <?php echo $direction; ?>">
														<a href="{{url('news_details/'.$value->id)}}">{{$value->$lang_var}}</a>
													</div>
												</div>
											</div>
											<?php $count++; ?>
											@endforeach
											@if($count<4)
												@for($i=$count;$i<=4;$i++)
													<div class="event">
													<div class="content">
														<div class="summary" style="text-align: <?php echo $direction; ?>">
														&nbsp;
														</div>
													</div>
												</div>
												@endfor
											@endif
											
										</div>

									</div>
									<div class="extra content">
										<a href="{{route('news')}}" class="ui button fluid inverted blue">View All</a>
									</div>	

								</div>
								</div>

								
							</div>

						
								<!-- -->
								

							<div class="col-md-4">
								<div class="block-heading-two">
									<h3 style="<?php echo ($lang!='en')?"font-family:'BTitr';margin-bottom:5px;":"";?>"><span>{{trans('home.secretariat_word')}}</span></h3>
								</div>	
								     <div class="testimonials">
										<div class="active item" >
										  <blockquote><p style="<?php echo ($lang!='en')?"font-family: 'Yekan';":""; ?>">Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
										  <div class="carousel-info">
											<img alt="" src="{{asset('assets/img/team4.jpg')}}" class="pull-<?php echo $direction; ?>">
											<div class="pull-<?php echo $direction; ?>">
											  <span class="testimonials-name">Marc Cooper</span>
											  <span class="testimonials-post">Technical Director</span>
											</div>
										  </div>
										</div>
									</div>
							</div>
							
						</div>
						
						 						
						 
						<br>
					 
					  </div>
						
					</div>
					</section>
  <!--Change script based on language  -->
    <?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")