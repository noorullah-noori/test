 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif

	
	<section id="content">
	
	
	<div class="container">

	    	<div class="row">
	    	
	    	@include('include.calendar_sidebar')
	    	@include('include.filter')
<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Calendar</a>
	              <span class="divider">/</span>
	            <a class="section">Session</a>
	          </div>
	        </div>
	    	
		<div class="col-md-9" style="margin-top:2%">
			<table class="ui very basic <?php echo $dir; ?> aligned collapsing celled table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Time</th>
						<th>Date</th>
						<th>Session Title</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($sessions as $value)
					<tr>
						<td><?php echo ++$i; ?></td>
						<td>{{$value->time}}</td>
						<td>{{$value->date}}</td>
						<td>{{$value->meeting_title}}</td>
						<td><div class="ui tiny button" onclick="view_details({{$value->id}})">View Details</div></td>
					</tr>
					@endforeach
				</tbody>
			</table>


		</div>
		</div>


	</div>
	</section>

	<!-- Modal -->
	<div class="ui modal" style="overflow: hidden; height:42.5%; ">
      <div class="actions">
      <div class="ui left floated header">
        Agenda
      </div>
        <div class="ui deny button red">
          <i class="fa fa-times"></i>
        </div>
      </div>
      <div class="image content">
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
      <script>
      	function view_details(id) {
      		
		    $.ajax
		    ({ 
		        url: '{{url('view_meetings')}}/'+id,
		        type: 'get',
		        success: function(output)
		        {
		        	alert(output['title']);
		            // $('.modal-box').text(result).fadeIn(700, function() 
		            // {
		            //     setTimeout(function() 
		            //     {
		            //         $('.modal-box').fadeOut();
		            //     }, 2000);
		            // });
		            alert("success");
		        }
		    });
		}
      </script>

   <?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")