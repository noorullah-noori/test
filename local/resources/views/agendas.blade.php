 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
	
	<?php $dir = 'right'; ?>
	@if($lang=='en')
	<?php $dir = 'left'; ?>
	@endif

<?php
$date = "date_".$lang;
$agenda = "agenda_".$lang;

 ?>
	
	
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
			<table class="ui very basic collapsing celled table" style="text-align: <?php echo $dir;?>;">
				<thead>
					<tr>
						<th>No.</th>
						<th>Time</th>
						<th>Date</th>
						<th>Agenda</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($agendas as $value)
					<tr>
						<td><?php echo ++$i; ?></td>
						<td>{{$value->time}}</td>
						<td style="width:12%;">{{$value->$date}}</td>
						<td>{{$value->$agenda}}</td>
					</tr>
					@endforeach

				</tbody>
			</table>


		</div>
		</div>


		<!-- pagination  start-->


		<div class="container">
			<div class="col-md-4 col-md-offset-5">
			{{$agendas->links()}}
			</div>	
		</div>

<!-- pagination end -->

	</div>
	</section>

<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")