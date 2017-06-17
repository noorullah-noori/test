@include('include.header')

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
	            <a class="section">Self-Assesment Report</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%;padding-left:2%;font-size:18px;">
			
			<div class="row">
				<a href="{{asset('pdf/test.pdf')}}" target="_blank">
					<img src="{{asset('img/pdf.png')}}"><span style="margin-left:2%">Reports of something to be tested</span>
				</a>
				<div class="desc">
					<p>OGP was launched in 2011 to provide an international platform for domestic reformers committed to making their governments more open, accountable, and responsive to citizens.</p>
				</div>
			</div>

			<div class="row">
				<a href="{{asset('pdf/test.pdf')}}" target="_blank">
					<img src="{{asset('img/pdf.png')}}"><span style="margin-left:2%">Reports of something to be tested</span>
				</a>
								<div class="desc">
					<p>OGP was launched in 2011 to provide an international platform for domestic reformers committed to making their governments more open, accountable, and responsive to citizens.</p>
				</div>
			</div>
			<div class="row">
				<a href="{{asset('pdf/test.pdf')}}" target="_blank">
					<img src="{{asset('img/pdf.png')}}"><span style="margin-left:2%">Reports of something to be tested</span>
				</a>
								<div class="desc">
					<p>OGP was launched in 2011 to provide an international platform for domestic reformers committed to making their governments more open, accountable, and responsive to citizens.</p>
				</div>
			</div>


		</div>
		</div>


	</div>
	</section>

@include('include.footer')