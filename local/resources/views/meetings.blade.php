 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif


	
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
						<th>Date</th>
						<th>Meeting</th>
						<th>Agenda</th>
						<th>Details</th>
					</tr>
				</thead>
				<tbody>
					<?php $i=0; ?>
					@foreach($meetings as $value)
					<tr>
						<td><?php echo ++$i; ?></td>
						<td>{{$value->time}}</td>
						<td>{{$value->date}}</td>
						<td>{{$value->meeting_title}}</td>
						<td>{{$value->agenda}}</td>
						<td><div class="ui tiny button" onclick="view_details({{$value->agenda}})">View Details</div></td>
					</tr>
					@endforeach
				</tbody>
			</table>


		</div>
		</div>


	</div>
	</section>

	<!-- Modal -->
	<div class="ui modal" id="modal" style="overflow: hidden; height:42.5%; ">
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
        			<th>Date</th>
        			<th>Agenda</th>
        		</tr>
        	</thead>
        	<tbody>
        		<tr>
        			<td>1</td>
        			<td id="time"></td>
        			<td id="date"></td>
					<td id="details"></td>
        		</tr>
        	</tbody>

        </table>
        </div>
      </div>
      </div>

      <script type="text/javascript">

      function view_details(id){
       $.ajax({
        url:"{{url('get_agendas')}}"+'/'+id,
        success:function(output){
          $("#time").empty();
          $("#details").empty();
          $("#date").empty();
          $("#time").append(output['time']);
          $("#details").append(output['agenda']);
          $("#date").append(output['date']);
            $("#modal").modal('show');
        },
        error:function(output){
            alertify.error('msg');
        }

    });
     }


      </script>
      
<!--Change script based on language  -->
<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")