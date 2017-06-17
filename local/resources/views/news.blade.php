@include('include.header')
	
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	
	    	@include('include.sidebar')

	    	
		<div class="col-md-9" style="margin-top:2%">
			<div class="ui items">
				<a href="{{route('news_details')}}" class="item">
					<div class="image">
						<img src="{{asset('img/news1.jpg')}}">
					</div>
					<div class="content">
						<div class="header">Russia Putin: Navalny urges people to join anti-corruption protests</div>
						<div class="meta">John V. Smith</div>
						<div class="description">
							Those protests were the largest since 2012, drawing thousands of people - including many teenagers - to rallies nationwide, angered by a report Mr Navalny published accusing Prime Minister Dmitry Medvedev of corruption.
						</div>

					</div>
				</a>
				<a href="{{route('news_details')}}" class="item">
					<div class="image">
						<img src="{{asset('img/news2.jpg')}}">
					</div>
					<div class="content">
						<div class="header">Plane lands at Sydney with hole in engine</div>
						<div class="meta">Dave Young</div>
						<div class="description">
							Flight MU736 was heading from Sydney, Australia to Shanghai, but the pilot reported problems with the engine about one hour after taking off.
Passengers, who had to spend the night in Sydney, told media they smelt something burning inside the aircraft.
						</div>

					</div>
				</a>
				<a href="{{route('news_details')}}" class="item">
					<div class="image">
						<img src="{{asset('img/news3.jpg')}}">
					</div>
					<div class="content">
						<div class="header">E3 2017: Microsoft unveils Xbox One X</div>
						<div class="meta">John D. Smith</div>
						<div class="description">
							Microsoft has unveiled the latest games console in its line-up, a more powerful version of the Xbox One called the Xbox One X.
The tech giant touted the machine's specs, including its ability to run games in 4K ultra-HD, ahead of the E3 games show in Los Angeles.
						</div>

					</div>
				</a>
				<a href="{{route('news_details')}}" class="item">
					<div class="image">
						<img src="{{asset('img/news4.jpg')}}">
					</div>
					<div class="content">
						<div class="header">Direct upload made easy, from browser or mobile app to the cloud</div>
						<div class="meta">Edward Smith</div>
						<div class="description">
							How do you handle user uploads today? If images are uploaded directly to your servers, this requires some heavy server-side processing, bandwidth and storage space. One way to offload images is to transfer them to cloud storage. But if you're handling the upload operation on your own servers (and then transferring them to the cloud), this is still wasteful of server resources.
						</div>

					</div>
				</a>
				<a href="{{route('news_details')}}" class="item">
					<div class="image">
						<img src="{{asset('img/news5.jpg')}}">
					</div>
					<div class="content">
						<div class="header"> Police arrest 19-year-old man</div>
						<div class="meta">John P. Walker</div>
						<div class="description">
							Another man has been arrested in connection with the 3 June terror attack on London Bridge, bringing the total number of arrests to 21.
The 19-year-old was held in Barking on suspicion of being concerned in the commission, preparation or instigation of acts of terrorism.
						</div>

					</div>
				</a>
			</div>


		</div>
		</div>


	</div>
	</section>
@include('include.footer')