@include('include.header')
	
	
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
			<table class="ui very basic collapsing celled table large">
  <thead>
    <tr>
    <th>Member Name</th>
    <th>Member Since</th>
    <th>Email</th>
    <th>Details</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="{{asset('img/dev1.png')}}" class="ui massive rounded image">
          <a href="#" class="content">
            Lena
            <div class="sub header">Human Resources
          </div>
        </a>
      </h4></td>
      <td>
        22
      </td>
      <td>info@example.com</td>
      <td><div class="ui tiny button primary" onclick="view()">View Details</div></td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="{{asset('img/dev1.png')}}" class="ui massive rounded image">
          <a href="#" class="content">
            Matthew
            <div class="sub header">Fabric Design
          </div>
        </a>
      </h4></td>
      <td>
        15
      </td>
      <td>info@example.com</td>
      <td><div class="ui tiny button primary" onclick="view()">View Details</div></td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="{{asset('img/dev1.png')}}" class="ui massive rounded image">
          <a href="#" class="content">
            Lindsay
            <div class="sub header">Entertainment
          </div>
        </a>
      </h4></td>
      <td>
        12
      </td>
      <td>info@example.com</td>
      <td><div class="ui tiny button primary" onclick="view()">View Details</div></td>
    </tr>
    <tr>
      <td>
        <h4 class="ui image header">
          <img src="{{asset('img/dev1.png')}}" class="ui massive rounded image">
          <a href="#" class="content">
            Mark
            <div class="sub header">Executive
          </div>
        </a>
      </h4></td>
      <td>
        11
      </td>
      <td>info@example.com</td>
      <td><div class="ui tiny button primary" onclick="view()">View Details</div></td>
    </tr>
  </tbody>
</table>
		</div>


	</div>
	</section>



    <div class="ui modal" style="overflow: hidden; height:42.5%; ">
  <div class="actions">
  <div class="ui left floated header">
    Profile Picture
  </div>
    <div class="ui deny button red">
      <i class="fa fa-times"></i>
    </div>
  </div>
  <div class="image content">
    <div class="ui medium image">
      <img src="img/about.png">
    </div>
    <div class="description">
      <div class="ui header">We've auto-chosen a profile image for you.</div>
      <p>We've grabbed the following image from the <a href="https://www.gravatar.com" target="_blank">gravatar</a> image associated with your registered e-mail address.</p>
      <p>Is it okay to use this photo?</p>
    </div>
  </div>
  </div>
@include('include.footer')