<style type="text/css">
	.ui.selection.dropdown {
		margin-bottom: 4px;
	}
	.ui.floating.labeled.icon.dropdown.button.right.floated > .menu {
		padding:5px;
	}
	.ui.dropdown .menu .menu {
		left:110% !important;
	}
</style>
<?php $f =  ($dir=='left')?"right":"left" ?>
<div class="ui floating labeled icon dropdown button <?php echo $f; ?> floated">
			  <i class="dropdown icon"></i>
			  <span class="text">Filter Posts</span>
			  <div class="left menu">
			   <!--<div class="left menu">
				     <div class="item">
				      <i class="dropdown icon"></i>
				      <span class="text">Left</span>
				      <div class="menu">
				        <div class="item">
				          <i class="dropdown icon"></i>
				          <span class="text">Still Left</span>
				          <div class="menu">
				            <div class="item">1</div>
				            <div class="item">2</div>
				            <div class="item">3</div>
				          </div>
				        </div>
				        <div class="item">2</div>
				        <div class="item">3</div>
				      </div>
				    </div> -->
				    <div class="item">
				    	<i class="dropdown icon"></i>
				    	<span class="text">Year</span>
				    	<div class="menu">
				    		<div class="item">2017</div>
				    		<div class="item">2016</div>
				    		<div class="item">2015</div>
				    		<div class="item">2014</div>
				    		<div class="item">2013</div>
				    		<div class="item">2012</div>
				    		<div class="item">2011</div>
				    		<div class="item">2010</div>
				    		<div class="item">2009</div>
				    		<div class="item">2008</div>
				    		<div class="item">2007</div>
				    		<div class="item">2006</div>
				    		<div class="item">2005</div>
				    		<div class="item">2004</div>
				    		<div class="item">2003</div>
				    		<div class="item">2002</div>

				    	</div>
				    </div>
				    <div class="item">
				    	<i class="dropdown icon"></i>
				    	<span class="text">Month</span>
				    	<div class="menu">
				    		<div class="item">January</div>
				    		<div class="item">February</div>
				    		<div class="item">March</div>
				    		<div class="item">April</div>
				    		<div class="item">May</div>
				    		<div class="item">June</div>
				    		<div class="item">July</div>
				    		<div class="item">August</div>
				    		<div class="item">September</div>
				    		<div class="item">October</div>
				    		<div class="item">November</div>
				    		<div class="item">December</div>

				    	</div>
				    </div>

			        <div class="ui button fluid green">Filter</div>
			    <div class="divider"></div>
			    <div class="header">
			      Filter by date
			    </div>
			    <div class="item">
			      <i class="olive circle icon"></i>
			      This Week
			    </div>
			    <div class="item">
			      <i class="violet circle icon"></i>
			      This Month
			    </div>
			    <div class="item">
			      <i class="orange circle icon"></i>
			      This Year
			    </div>
			  </div>
			</div>