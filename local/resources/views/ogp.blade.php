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
				<div class="col-md-12" id="ogpa" style="padding-left: 5px;padding-bottom:20px;margin-top: 25px;">
					<h3>About OGP</h3>
					<div style="border-top:1px solid #f0b158;padding-top:10px;margin-top:-8px;>
						<p style="line-height:1.5;font-size:16px">
						The Open Government Partnership is a multilateral initiative that aims to secure concrete commitments from governments to promote transparency, empower citizens, fight corruption, and harness new technologies to strengthen governance. In the spirit of multi-stakeholder collaboration, OGP is overseen by a Steering Committee including representatives of governments and civil society organizations.
	To become a member of OGP, participating countries must endorse a high-level Open Government Declaration, deliver a country action plan developed with public consultation, and commit to independent reporting on their progress going forward.
	The Open Government Partnership formally launched on September 20, 2011, when the 8 founding governments (Brazil, Indonesia, Mexico, Norway, the Philippines, South Africa, the United Kingdom and the United States) endorsed the Open Government Declaration, and announced their country action plans. Since 2011, OGP has welcomed the commitment of 67 additional governments to join the Partnership.
	In total, 75 OGP participating countries and 15 subnational governments have made over 2,500 commitments to make their governments more open and accountable.
					</p>
					</div>
				</div>
			</div>
		</div>


	</div>
	</section>
<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")