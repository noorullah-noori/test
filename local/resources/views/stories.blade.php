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
      	
      	<div clas="row">
	          <div class="ui large breadcrumb">
	            <a class="section">Home</a>
	              <span class="divider">/</span>
	            <a class="section">Success Stories</a>
	          </div>
	        </div>
        
          <div  class="main-image">
            <a href="{{route('story_details')}}" class="ui header">
              <h2>Announcing New Members of the OGP Steering Committee</h2>
            </a>
            <span id="date">5 June 2017</span>
            <span id="author">
            	<a href="#">Manish Bapna</a>
            </span>
          </div>
      </div>
      </section>
      <hr/>
      <div class="container" style="margin-bottom: 10px;  ">
        <div class="ui two cards">
          <div class="card">
            <div class="content">
              <div class="header">Beneficial Ownership</div>
              <div class="meta">Manish Bapna</div>
              <div class="description">
                <h1 class="ui header"><i class="icon left quote"></i></h1>
                Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="content">
              <div class="header">Beneficial Ownership</div>
              <div class="meta">Manish Bapna</div>
              <div class="description">
                <h1 class="ui header"><i class="icon left quote"></i></h1>
                Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="content">
              <div class="header">Beneficial Ownership</div>
              <div class="meta">Manish Bapna  </div>
              <div class="description">
                <h1 class="ui header"><i class="icon left quote"></i></h1>
                Veronika Ossi is a set designer living in New York who enjoys kittens, music, and partying.
              </div>
            </div>
          </div>
</div>
      </div>
      </div>
</div>
</section>




@include('include.footer')