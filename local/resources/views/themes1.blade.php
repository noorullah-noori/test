@include('include.header')
<style type="text/css">
	.ui.button {
		line-height: 3em;
	}
</style>


<section id="content">
	
	<div class="container">
		  <div class="six column row centered" style="margin-left:10%;">
		  	<a href="{{route('themes_details')}}" class="ui button massive green">Accountability</a>
		  	<a href="{{route('themes_details')}}" class="ui button massive blue">Transparency</a>
		  	<a href="{{route('themes_details')}}" class="ui button massive violet">Citizen Empowerment</a>
		  	<a href="{{route('themes_details')}}" class="ui button massive pink">Anti Corruption</a>
		  	<a href="{{route('themes_details')}}" class="ui button massive red">e-Governance</a>
		  </div>
		</div>
	</div>
</section>
@include('include.footer')