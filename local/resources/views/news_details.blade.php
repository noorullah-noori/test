@include('include.header')	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	
	    	@include('include.sidebar')

	    	

			<div class="col-md-9" style="padding-left:40px">
				<h2 style="padding-bottom:10px">{{$news_details->title}}</h2>
				<div style="border-top:1px solid #f0b158;padding-top:10px;margin-top:-15px;">
					<img class="img thumbnail" src="{{asset('news/'.$news_details->image)}}">
					<div class="ui label pointing" style="margin-top:0;margin-bottom: 10px;">{{$news_details->created_date}}</div>
				<p style="line-height:1.5;font-size:16px">
					{{$news_details->description}}
				</p>
				</div>
			</div>
		</div>


	</div>
	</section>
	@include('include.footer')