@include('include.header')
	
	
	<section id="content">
	
	
	<div class="container">

	    	<div class="row">
	    	
	    	@include('include.resources_sidebar')
	    	@include('include.filter')
<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Resources</a>
	              <span class="divider">/</span>
	            <a class="section">Meeting Minutes</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%">
			<table class="ui very basic collapsing celled table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Time</th>
						<th>Meeting</th>
						<th>Agenda</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>12:00PM 12/01/2018</td>
						<td>OGPA Planning Meeting</td>
						<td><a data-toggle="modal" data-target="#myModal" class="ui button">View Details</a></td>
					</tr>
					<tr>
						<td>2</td>
						<td>12:00PM 12/01/2018</td>
						<td>OGPA Planning Meeting</td>
						<td><a data-toggle="modal" data-target="#myModal" class="ui button">View Details</a></td>
					</tr>
					<tr>
						<td>3</td>
						<td>12:00PM 12/01/2018</td>
						<td>OGPA Planning Meeting</td>
						<td><a data-toggle="modal" data-target="#myModal" class="ui button">View Details</a></td>
					</tr>

				</tbody>
			</table>


		</div>
		</div>


	</div>
	</section>

	<!-- Modal -->
<div id="myModal" class="modal fade inverted" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Accountability</h4>
      </div>
      <div class="modal-body">
		<table class="ui selectable table">
        	<thead>
        		<tr>
        			<th>No.</th>
        			<th>Time</th>
        			<th>Agenda</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td>1</td>
        			<td>13:00 03/07/2018</td>
					<td>Definition tables are designed to display on a single background color. You can adjust this by changing @definitionPageBackground, or specifying a background color on the first cell</td>
        		</tr>
        	</tbody>

        </table>
      </div>
    </div>

  </div>
</div>
@include('include.footer')