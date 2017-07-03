@include('include.header')
<style type="text/css">
.panel-footer {
	padding-top:2px;
}
.col-md-9 {
	margin-left:12.333333%
}

</style>


<section id="content">
	
	<div class="container">
		<div class="six column row centered" style="margin-left:15%; margin-top: 25px;">
				<a href="{{route('themes_details')}}" class="ui button huge primary">Accountability</a>
				<a href="{{route('themes_details')}}" class="ui button huge primary">Transparency</a>
				<a href="{{route('themes_details')}}" class="ui button huge primary">Citizen Empowerment</a>
				<a href="{{route('themes_details')}}" class="ui button huge primary">Anti Corruption</a>
				<a href="{{route('themes_details')}}" class="ui button huge primary">e-Governance</a>
			</div>
		
			
			<div class="panel panel-info">
				<div class="panel-heading">
					<label class="ui header medium">Accountability</label>
				</div>
				<div class="panel-body">
					<p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments."  In order to receive a star, a commitment must meet the following criteria:
						It must be specific enough that a judgment can be made about its potential impact. Starred commitments will have "medium" or "high" specificity.</p>
					<p>The commitment language should make clear its relevance to opening government. Specifically, it must relate to at least one of the OGP values of: Access to Information, Civic Participation, or Public Accountability.
						The commitment must have "transformative" potential impact, should it be fully implemented.
						Finally, the commitment must see significant progress during the action plan implementation period (receiving a ranking of "substantial" or "complete" progress).</p>
				</div>			
			</div>
		

		</div>
		
	</div>
</section>
@include('include.footer')