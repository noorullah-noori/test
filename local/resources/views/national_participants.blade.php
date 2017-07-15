 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif	

<?php 
$name = "name_".$lang;
$member_since = "member_since_".$lang;
?>

	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	@include('include.participants_sidebar')
	    	
			<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Participants</a>
	              <span class="divider">/</span>
	            <a class="section">Global Participants</a>
	          </div>
	        </div>

	    	
		<div class="col-md-9">
			<table class="ui very basic <?php echo $dir; ?> aligned collapsing celled table large">
        <thead>
          <tr>
          <th>Member Name</th>
          <th>Member Since</th>
          <th>Email</th>
          <th>Details</th>
        </tr>
        </thead>
        <tbody>
          @foreach($national_participants as $value)
          <tr>
            <td>
              <h4 class="ui image header">
                <img src="{{asset('n_participants/'.$value->image)}}" class="ui massive rounded image">
                <div class="content">
                  {{$value->$name}}
              </div>
            </h4></td>
            <td>
              {{$value->$member_since}}
            </td>
            <td>{{$value->email}}</td>
            <td><div class="ui tiny button primary" onclick="view({{$value->id}})">View Details</div></td>
          </tr>
          @endforeach
          
        </tbody>
      </table>
		</div>
	</div>
  
    <!-- pagination  start-->


    <div class="container">
      <div class="col-md-4 col-md-offset-5">
      {{$national_participants->links()}}
      </div>  
    </div>

<!-- pagination end -->
  </div>
	</section>


    <?php $prop = "margin-right:15%;" ?>
    <div class="ui modal" id="modal" style="overflow: hidden;<?php echo ($lang!='en')?$prop:''; ?> height:40%;">
      <div class="actions" style="border-bottom: 1px solid #ddd; padding-bottom: 30px;">
      <div class="ui <?php echo $dir; ?> floated header">
        <h3 class="ui header" style="">National Participant Details</h3>
      </div>
      </div>

      <div class="image content" style="overflow-y:scroll">
        <div class="ui medium image">
          <img style="max-width: 200px;" id="image" class="img-thumbnail">
        </div>
        <div class="description">
          <!-- <div class="ui header">We've auto-chosen a profile image for you.</div> -->
          <table class="ui very basic  collapsing celled <?php echo $dir; ?> aligned table" cellpadding="5">
            <tbody>
              <tr>
                <td style="vertical-align: middle;font-weight: bold;">Name</td>
                <td class="ui small header ">
                  <div  id="name"></div>
                    <div class="sub header" id="since"></div>
                  
                </td>
              </tr>
              <tr>
                <td style="vertical-align: middle;font-weight: bold;padding-<?php echo ($lang!='en')?'left':'right'; ?>:10px">Description</td>
                <td>
                  <p id='details'></p>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
      <div class="actions" style="float:<?php echo ($lang!='en')?'left':'right'; ?>;width:100%;height:auto">
        <div style="float:<?php echo $dir; ?>" class="ui black deny button">
          Cancel
        </div>
        <a href="" style="float:<?php echo $dir; ?>" id='mailto' class="ui positive right labeled icon button" >
          Email Me
          <i class="mail icon"></i>
        </a>
      </div>
    </div>  

<script type="text/javascript">
 function view(id){

       $.ajax({
        url:"{{url('get_participant')}}"+'/'+id,
        success:function(output){
          $("#name").empty();
          $("#details").empty();
          $("#since").empty();
          $("#email").empty();
          $("#image").empty();
          $("#name").append(output['name_'+'{{$lang}}']);
          $("#details").append(output['details_'+'{{$lang}}']);
          $("#since").append(output['member_since_'+'{{$lang}}']);
          $("#email").append(output['email']);
          $('#mailto').attr('href','mailto:'+output['email']);
          $('#image').attr('src','n_participants/'+output['image']);
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