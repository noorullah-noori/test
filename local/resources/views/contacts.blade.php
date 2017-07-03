<?php $lang = Config::get('app.locale'); $header = "include.$lang"."_header";  ?>
    @include("$header")
  
  <?php $dir = 'right'; ?>
  @if($lang=='en')
  <?php $dir = 'left'; ?>
  @endif

<section class="content">
<div class="container stackable" style="margin-top:20px; margin-bottom: 20px;">

		<div class="col-md-6 col-xs-12" style="float:<?php echo $dir; ?>">
		<h4 class="ui dividing header">Message Us!!!</h4>
				<form class="ui form stackable cmxform"  id="messageForm" method="post" action="{{route('messages.store')}}" novalidate="novalidate">
					<div class="field">
						<input type="text" id="name" name="name" placeholder="Name">
					</div>
					<div class="field">
						<input type="text" id="email" name="email" placeholder="Email">
					</div>
					<div class="field">
						<input type="text" id="subject" name="subject" placeholder="Subject">
					</div>
					<div class="field">
						<textarea id="message"  name="message" placeholder="Message">

						</textarea>
					</div>

					<div class="field">
						<button class="btn btn-primary btn-block">Submit</button>
					</div>
					{{csrf_field()}}
				</form>
		</div>
		<div class="ui vertical divider" style="height:20%;top:43%;left:<?php echo ($lang=='en')?'51%':'47%'; ?>;">OR</div>
		<div class="col-md-5 col-xs-12" style="margin-left:20px">
		<h4 class="ui dividing header">Contact Us!!!</h4>
		<p><i class="fa fa-address-card"></i>&nbsp; Administrative Office of The President</p>
		<p><i class="fa fa-facebook text-primary"></i>&nbsp;&nbsp;&nbsp; /ogpa</p>
		<p><i class="fa fa-twitter text-info"></i> @ogpa</p>
		<p><i class="fa fa-google-plus text-danger"></i> +ogpa</p>
		<p><i class="fa fa-phone"></i> 020 - 1234 123 </p>
		<p><i class="fa fa-fax"></i> 020 - 1234 123 </p>



	</div>

		
</div>
</section>

<?php $footer = "include.$lang"."_footer"; ?>
    @include("$footer")