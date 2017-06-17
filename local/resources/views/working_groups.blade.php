@include('include.header')
<style type="text/css">
	.ui.button {
		line-height: 3em;
		margin-bottom: 1.6%;
	}

/*  bhoechie tab */
div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>a .glyphicon,
div.bhoechie-tab-menu div.list-group>a .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>a:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>a.active,
div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
div.bhoechie-tab-menu div.list-group>a.active .fa{
  background-color: #5A55A3;
  background-image: #5A55A3;
  color: #ffffff;
}
div.bhoechie-tab-menu div.list-group>a.active:after{
  content: '';
  position: absolute;
  left: 100%;
  top: 50%;
  margin-top: -13px;
  border-left: 0;
  border-bottom: 13px solid transparent;
  border-top: 13px solid transparent;
  border-left: 10px solid #5A55A3;
}

div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}	
</style>


<section id="content">	
	<div class="container">
		@include('include.sidebar')
		<div class="row" style="margin-top:3px">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 bhoechie-tab-container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  Access to Information
                </a>
                <a href="#" class="list-group-item text-center">
                  Fiscal Openness
                </a>
                <a href="#" class="list-group-item text-center">
                  Opennes in Natural Resources
                </a>
                <a href="#" class="list-group-item text-center">
                  Legislative Openness
                </a>
                <a href="#" class="list-group-item text-center">
                  Anti Corruption
                </a>
                <a href="#" class="list-group-item text-center">
                  Open Climate
                </a>
              </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 bhoechie-tab">
                <!-- flight section -->
                <div class="bhoechie-tab-content active">
                    <center>	
                      <h2 style="margin-top: 0;color:#55518a">Access To Information</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments."  In order to receive a star, a commitment must meet the following criteria:
It must be specific enough that a judgment can be made about its potential impact. Starred commitments will have "medium" or "high" specificity</p>
                    </center>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content">
                    <center>	
                      <h2 style="margin-top: 0;color:#55518a">Fiscal Openness</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments." </p>
                    </center>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <center>
                      <h2 style="margin-top: 0;color:#55518a">Opennes In Natural Resources</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments." </p>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h2 style="margin-top: 0;color:#55518a">Legislative Opennes</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments." </p>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h2 style="margin-top: 0;color:#55518a">Anti Corruption</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments." </p>
                    </center>
                </div>
                <div class="bhoechie-tab-content">
                    <center>
                      <h2 style="margin-top: 0;color:#55518a">Open Climate</h2>
                      <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments." </p>
                    </center>
                </div>
            </div>
        </div>
  </div>	
		  <div class="six column row centered" style="margin-left:10%;margin-top:2.2%">
		  <!-- -->


		  <!-- -->
		  </div>
		</div>
	</div>
</section>



<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Accountability</h4>
      </div>
      <div class="modal-body">
        <p>The IRM identifies certain ambitious and transformative commitments and designates them as "Starred Commitments."  In order to receive a star, a commitment must meet the following criteria:
It must be specific enough that a judgment can be made about its potential impact. Starred commitments will have "medium" or "high" specificity</p>
<p>The commitment language should make clear its relevance to opening government. Specifically, it must relate to at least one of the OGP values of: Access to Information, Civic Participation, or Public Accountability.
The commitment must have "transformative" potential impact, should it be fully implemented.
Finally, the commitment must see significant progress during the action plan implementation period (receiving a ranking of "substantial" or "complete" progress).</p>
      </div>
    </div>

  </div>
</div>



@include('include.footer')