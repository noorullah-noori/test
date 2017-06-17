@include('include.header')
<style type="text/css">
	.ui.button {
		line-height: 3em;
		margin-bottom: 1.6%;
	}
</style>


<section id="content">
	
	<div class="container">
		@include('include.sidebar')
		  <div class="six column row centered" style="margin-left:10%;margin-top:2.2%">
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Access to Information</a>
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Fiscal Openness</a>
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Opennes in Natural Resources</a>
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Legislative Openness</a>
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Anti Corruption</a>
		  	<a data-toggle="modal" data-target="#myModal" class="ui button massive teal">Open Climate</a>

		  </div>
		</div>
	</div>
</section>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Accountability</h4>
      </div>
      <div class="modal-body">
        <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments."  In order to receive a star, a commitment must meet the following criteria:
It must be specific enough that a judgment can be made about its potential impact. Starred commitments will have "medium" or "high" specificity.
The commitment language should make clear its relevance to opening government. Specifically, it must relate to at least one of the OGP values of: Access to Information, Civic Participation, or Public Accountability.
The commitment must have "transformative" potential impact, should it be fully implemented.
Finally, the commitment must see significant progress during the action plan implementation period (receiving a ranking of "substantial" or "complete" progress).</p>
      </div>
    </div>

  </div>
</div>



@include('include.footer')