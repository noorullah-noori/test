@include('include.header')	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">

				<div class="panel panel-info">
					<div class="panel-heading">
						<label>{{$story_details->title}}</label>
					</div>
					<div class="panel-body">
						<p>{{$story_details->description}}</p>
					

					</div>
					<div class="panel-footer">
						<div class="ui grid">
								<div class="column">
								<div class="ui left floated">
									<a href=""  style="color:#09f">{{$story_details->author}}</a>&nbsp;|&nbsp;{{$story_details->date}}<span ></span>
								</div>
								<div class="ui right floated tiny buttons">
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
	@include('include.footer')