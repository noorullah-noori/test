@include('include.header')

<div class="container" style="margin-top:20px;">

		<div class="col-md-6">

			<div class="panel panel-info">
				<div class="panel-heading">
					<label>Contacts</label>
				</div>
			<div class="panel-body">
				<form class="ui form">
					<div class="field">
						<input type="text" placeholder="Name">
					</div>
					<div class="field">
						<input type="text" placeholder="Email">
					</div>
					<div class="field">
						<input type="text" placeholder="Subject">
					</div>
					<div class="field">
						<textarea placeholder="Message">

						</textarea>
					</div>
					<div class="field">
						<button class="btn btn-primary btn-block">Submit</button>
					</div>

				</form>

			</div>
		</div>

	</div>
	<div class="ui divider vertical"></div>
	<div class="col-md-6">
		<h1 class="ui header small">Contacts</h1>
		<p><i class="fa fa-address-card"></i>&nbsp; Administrative Office of The President</p>
		<p><i class="fa fa-facebook text-primary"></i>&nbsp;&nbsp;&nbsp; /ogpa</p>
		<p><i class="fa fa-twitter text-info"></i> @ogpa</p>
		<p><i class="fa fa-google-plus text-danger"></i> +ogpa</p>
		<p><i class="fa fa-phone"></i> 020 - 1234 123 </p>
		<p><i class="fa fa-fax"></i> 020 - 1234 123 </p>



	</div>

		
</div>

@include('include.footer')