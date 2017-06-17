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
    <tr><th>Member Name</th>
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
      <td><div class="ui tiny button primary">View Details</div></td>
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
      <td><div class="ui tiny button primary">View Details</div></td>
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
      <td><div class="ui tiny button primary">View Details</div></td>
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
      <td><div class="ui tiny button primary">View Details</div></td>
    </tr>
  </tbody>
</table>
		</div>


	</div>
	</section>
@include('include.footer')