<div class="col-md-3" style="float:<?php echo $dir; ?>">
	<div class="panel-group" id="accordion-alt3" style="margin-top:25px;">
		<div class="panel">
			<!-- Panel heading -->
			<a  href="{{route('global_participants')}}">
			<div class="panel-heading">
				<h4 class="panel-title">
					Global Participants
				</h4>
			</div>
			</a>
			<div id="one" class="panel-collapse collapse">
				<!-- Panel body -->
				<div class="panel-body">

				</div>
			</div>
		</div>
		</a>
		<div class="panel">	
			<!-- Panel heading -->
			<a data-toggle="collapse" data-parent="#accordion-alt3" href="#two">
			<div class="panel-heading">
				<h4 class="panel-title">
					
						National Participants&nbsp;<i class="fa fa-angle-down"></i>		
				</h4>
			</div>
			</a>
			<div id="two" class="panel-collapse collapse">
				<!-- Panel body -->
				<div class="panel-body">
					<ul style="list-style-type:none;">
						<li>
							<a href="{{route('national_participants')}}" style="color:#373534">Government Reformeres</a>
						</li>
						<li>
							<a href="{{route('national_participants')}}" style="color:#373534">Civil Society Organizations</a>
						</li>
						<li>
							<a href="{{route('national_participants')}}" style="color:#373534">Private Sector Reformers</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>