 <?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
	<section id="content">
	
	
	<div class="container">
	    	<div class="row">
	    	<?php $direction='left'; ?>
	    	@if($lang!='en')
	    		<?php $direction='right'; ?>
	    	@endif
	    	@include('include.sidebar')
			<div class="col-md-9" >
				<div class="col-md-12" id="ogp" style="padding-bottom:20px;margin-top: 25px;">
					<h3>About OGPA</h3>
					<div style="border-top:1px solid #f0b158;padding-top:10px;margin-top:-8px;>
						<p style="line-height:1.5;font-size:16px">
						 The Open Government Partnership is a multilateral initiative that aims to secure concrete commitments from governments to promote transparency, empower citizens, fight corruption, and harness new technologies to strengthen governance.<br> In the spirit of multi-stakeholder collaboration, OGP is overseen by a Steering Committee including representatives of governments and civil society organizations.
                    To become a member of OGP, participating countries must endorse a high-level Open Government Declaration, deliver a country action plan developed with public consultation, and commit to independent reporting on their progress going forward.
                    The Open Government Partnership formally launched on September 20, 2011, when the 8 founding governments (Brazil, Indonesia, Mexico, Norway, the Philippines, South Africa, the United Kingdom and the United States) endorsed the Open Government Declaration, and announced their country action plans. Since 2011, OGP has welcomed the commitment of 67 additional governments to join the Partnership.
                    In total, 75 OGP participating countries and 15 subnational governments have made over 2,500 commitments to make their governments more open and accountable.
					</p>
					</div>
				</div>
			
			<div class="col-md-12">
				<h3>About OGPA Secretrate</h3>
				<div style="border-top:1px solid #f0b158;padding-top:10px;margin-top:-8px;>
                    <p style="line-height:1.5;font-size:16px">
                                        The Open Government Partnership is a multilateral initiative that aims to secure concrete commitments from governments to promote transparency, empower citizens, fight corruption, and harness new technologies to strengthen governance. In the spirit of multi-stakeholder collaboration, OGP is overseen by a Steering Committee including representatives of governments and civil society organizations.
                    To become a member of OGP, participating countries must endorse a high-level Open Government Declaration, deliver a country action plan developed with public consultation, and commit to independent reporting on their progress going forward.
                    The Open Government Partnership formally launched on September 20, 2011, when the 8 founding governments (Brazil, Indonesia, Mexico, Norway, the Philippines, South Africa, the United Kingdom and the United States) endorsed the Open Government Declaration, and announced their country action plans. Since 2011, OGP has welcomed the commitment of 67 additional governments to join the Partnership.
                    In total, 75 OGP participating countries and 15 subnational governments have made over 2,500 commitments to make their governments more open and accountable.
                </p>
                </div>
			</div>	
			<div class="col-md-12" id="contacts" style="padding-left:10px;padding-bottom:10%;">
                <h3 style="padding-top:10%;padding-bottom: 10px;border-bottom: 1px solid #f0b158;">OGPA Contacts</h3>
                    
                    <div style="padding-top:2%; margin-left:-4px margin-top;">
                        <div class="col-md-2 col-md-offset-2 social-padding " style="">
                        <div class="btn btn-success btn-circle  btn-xl" style="transition:all 250ms ease-out">
                            <i class="fa fa-phone btn-text"></i>
                            <p style="font-size:14px;">020 - 214 7017</p>

                        </div>
                        </div>
                        <div class="col-md-3 col-md-offset-1 social-padding ">
                            <div class="btn btn-info btn-circle btn-xl" style="transition:all 250ms ease-out">
                                <i class="fa fa-envelope btn-text"></i>
                                <p style="font-size:14px;">info@ogpa.gov.af</p>

                            </div>
                        </div>
                        <div class="col-md-2 social-padding">
                            <div class="btn btn-primary btn-circle btn-xl" style="transition:all 250ms ease-out">
                                <i class="fa fa-facebook btn-text"></i>
                                <p style="font-size:14px;">@ogpa</p>

                            </div>
                        </div>
                    </div>
                </div>
		</div>
		</div>


	</div>
	</section>
<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")