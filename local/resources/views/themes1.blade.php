@include('include.header')
<style type="text/css">
	.ui.button {
		line-height: 3em;
	}
</style>


<section id="content">
	
	<div class="container">
		  <div class="six column row centered" style="margin-left:10%;">
		  	<a href="{{route('themes_details')}}" class="ui button large green">Accountability</a>
		  	<a href="{{route('themes_details')}}" class="ui button large blue">Transparency</a>
		  	<a href="{{route('themes_details')}}" class="ui button large violet">Citizen Empowerment</a>
		  	<a href="{{route('themes_details')}}" class="ui button large pink">Anti Corruption</a>
		  	<a href="{{route('themes_details')}}" class="ui button large red">e-Governance</a>
		  </div>
		</div>
	</div>
</section>
@include('include.footer')