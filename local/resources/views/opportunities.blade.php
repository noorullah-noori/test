@include('include.header')
	
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	
	    	@include('include.sidebar')

	    	
		<div class="col-md-9" style="margin-top:2%">
			<table class="ui table small">
				<thead>
					<tr>
						<th>No.</th>
						<th>Job Title</th>
						<th>Expiry Date</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><a href="{{route('job_details')}}">Manager</a></td>
						<td>01/01/2018</td>
					</tr>
					<tr>
						<td>2</td>
						<td><a href="{{route('job_details')}}">Manager</a></td>
						<td>01/01/2018</td>
					</tr>
					<tr>
						<td>3</td>
						<td><a href="{{route('job_details')}}">Manager</a></td>
						<td>01/01/2018</td>
					</tr>

				</tbody>
			</table>


		</div>
		</div>


	</div>
	</section>
@include('include.footer')