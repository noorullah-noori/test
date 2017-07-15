 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif	

<?php 

$title = "title_".$lang;
$description = "description_".$lang;

 ?>
	
	<section id="content">
	
	
	<div class="container">

    	<div class="row">
    	
	    	@include('include.calendar_sidebar')
	    	<!-- included filter -->
	    	<div class="ui large breadcrumb">
	            <a class="section">Calendar</a>
	              <span class="divider">/</span>
	            <a class="section">Seminars</a>
	        </div>

        	<div class="col-md-9">
        	<table class="ui very basic collapsing celled table large">
		        <thead>
		          <tr>
		          <th>No.</th>
		          <th>Image</th>
		          <th>Event Title</th>
		          <th>Event Description</th>
		        </tr>
		        </thead>
		        <tbody><?php $i=0; ?>
		          @foreach($seminars as $value)
		          <tr>
		          <td><?php echo ++$i; ?></td>
		          <td><img style="width:100px;"src="{{asset('events&seminars/'.$value->image)}}"/></td>
		            <td>{{$value->$title}}</td>
		            <td>{{$value->$description}}</td>
		          </tr>
		          @endforeach
		          
		        </tbody>
		      </table>
        			
			</div>
        </div>

            <!-- pagination  start-->


    <div class="container">
      <div class="col-md-4 col-md-offset-5 col-xs-5 col-xs-offset-5">
      {{$seminars->links()}}
      </div>  
    </div>

<!-- pagination end -->


	</div>
	</section>
	
    <?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")
<script lang="html/javascript">
		$('#example1').calendar();
	</script>