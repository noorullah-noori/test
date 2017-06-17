@include('include.header')
<style type="text/css">
		
		.main-image{
			background-size: cover;
			background-image: url('img/story.jpg');
			min-height:400px;
		}

		.main-image h2{
			
			text-align: center;
			color: white;
			font-weight: 500;
			padding: 100px;
		}
		.main-image a{
			text-decoration: none;

		}
		#date{
			display: block;
			color: white;
			padding-left: 16%;
			line-height: 1.6;
		}
		#author a{
			display: block;
			color: white;
			padding-left: 16%;
			line-height: 1.6;
		}
		.sub-stories{
			background-color: #ddd;
			display: inline-block;
			width: 45%;
			padding-bottom: 10px;
			padding-left: 10px;
			margin-right: 55px;
			margin-bottom: 20px;
		}

</style>


<section id="content">
	
	<div class="container" style="padding-bottom:10px">

      <div class="row">
      	
      	<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Home</a>
	              <span class="divider">/</span>
	            <a class="section">Success Stories</a>
	          </div>
	        </div>
        
          <div  class="main-image">
            <a href="{{route('story_details')}}">
              <h2>Announcing New Members of the OGP Steering Committee</h2>
            </a>
            <span id="date">5 June 2017</span>
            <span id="author">
            	<a href="#">Manish Bapna</a>
            </span>
          </div>
      </div>

      <div class="sub-stories">
      	<div style="padding-top:20px;color:black;font-size:16px;padding-bottom:15px;">
      	<a href="{{route('story_details')}}" style="font-size:16px">Beneficial Ownership</a>
      	<div style="padding-top:20px">
      	<p>La apertura de los beneficiarios reales de Ucrania. Por qué importa y por qué tu país debería ser el siguiente</p>
      	</div>
      	</div>
			<span style="display:block;line-height:2">5 June 2017</span>
            <span >
            	<a href="#">Manish Bapna</a>
            </span>
      </div>
     <div class="sub-stories">
      	<div style="padding-top:20px;color:black;font-size:16px;padding-bottom:15px;">
      	<a href="{{route('story_details')}}" style="font-size:16px">Beneficial Ownership</a>
      	<div style="padding-top:20px">
      	<p>La apertura de los beneficiarios reales de Ucrania. Por qué importa y por qué tu país debería ser el siguiente</p>
      	</div>
      	</div>
			<span style="display:block;line-height:2">5 June 2017</span>
            <span >
            	<a href="#">Manish Bapna</a>
            </span>
      </div>
        <div class="sub-stories">
      	<div style="padding-top:20px;color:black;font-size:16px;padding-bottom:15px;">
      	<a href="{{route('story_details')}}" style="font-size:16px">Beneficial Ownership</a>
      	<div style="padding-top:20px">
      	<p>La apertura de los beneficiarios reales de Ucrania. Por qué importa y por qué tu país debería ser el siguiente</p>
      	</div>
      	</div>
			<span style="display:block;line-height:2">5 June 2017</span>
            <span >
            	<a href="#">Manish Bapna</a>
            </span>
      </div>
     <div class="sub-stories">
      	<div style="padding-top:20px;color:black;font-size:16px;padding-bottom:15px;">
      	<a href="{{route('story_details')}}" style="font-size:16px">Beneficial Ownership</a>
      	<div style="padding-top:20px">
      	<p>La apertura de los beneficiarios reales de Ucrania. Por qué importa y por qué tu país debería ser el siguiente</p>
      	</div>
      	</div>
			<span style="display:block;line-height:2">5 June 2017</span>
            <span >
            	<a href="#">Manish Bapna</a>
            </span>
      </div>

</div>
</section>




@include('include.footer')