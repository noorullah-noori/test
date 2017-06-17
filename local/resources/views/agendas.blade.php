@include('include.header')
	
	
	<section id="content">
	
	
	<div class="container">

	    	<div class="row">
	    	
	    	@include('include.resources_sidebar')
<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Resources</a>
	              <span class="divider">/</span>
	            <a class="section">Agendas</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%">
			<table class="ui very basic collapsing celled table">
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
						<td>12:00PM 12/01/2018</td>
						<td>Definition tables are designed to display on a single background color. You can adjust this by changing @definitionPageBackground, or specifying a background color on the first cell</td>
					</tr>
					<tr>
						<td>2</td>
						<td>12:00PM 12/01/2018</td>
						<td>Definition tables are designed to display on a single background color. You can adjust this by changing @definitionPageBackground, or specifying a background color on the first cell</td>
					</tr>
					<tr>
						<td>3</td>
						<td>12:00PM 12/01/2018</td>
						<td>Definition tables are designed to display on a single background color. You can adjust this by changing @definitionPageBackground, or specifying a background color on the first cell</td>
					</tr>

				</tbody>
			</table>


		</div>
		</div>


	</div>
	</section>
@include('include.footer')