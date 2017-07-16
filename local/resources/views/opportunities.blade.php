 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header") 

    <?php $direction='left'; ?>
      @if($lang!='en')
        <?php $direction='right'; ?>
      @endif

<?php 
$title = "title_".$lang;
$expiry_date = "expiry_date_".$lang;
 ?>
	
	
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	
	    	@include('include.sidebar')

	    	
		<div class="col-md-9" style="margin-top:2%">
			<div class="col-md-12" style="margin-left:-10px;">
				<h3>Jobs & Opportunities</h3>
			<table class="ui table small">
				<thead>
					<tr>
						<th>No.</th>
						<th>Job Title</th>
						<th>Expiry Date</th>
					</tr>
				</thead>
				<tbody>
				<?php $i=0; ?>
					@foreach($opportunities as $value)
					<tr>
						<th><?php echo ++$i; ?></th>
						<td><a href="{{url('job_details/'.$value->id)}}">{{$value->$title}}</a></td>
						<td>{{$value->$expiry_date}}</td>
					</tr>
					@endforeach

				</tbody>
			</table>

			</div>


		</div>
		</div>


	</div>
	</section>

<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")