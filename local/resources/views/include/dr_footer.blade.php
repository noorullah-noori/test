	<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<img src="{{asset('img/ogp.png')}}" style="height:190px" class="img-responsive">
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a href="{{route('home')}}">{{trans('home.home')}}</a></li>
						<li><a href="{{route('ogpa')}}">About OGPA</a></li>
						<li><a href="{{route('seminars')}}">Seminars</a></li>
						<li><a href="{{route('agendas')}}">Agendas</a></li>
						<li><a href="{{route('themes1')}}">Themes</a></li>
						<li><a href="{{route('news')}}">News</a></li>
						<li><a href="{{route('stories')}}">Success Stories</a></li>
						<li><a href="{{route('opportunities')}}">Career</a></li>
						<li><a href="{{route('contacts')}}">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 col-sm-4">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Administrative Office Of President</strong><br>
					JC Main Road, Near Silnile tower<br>
					 Pin-21542 NewYork US.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> info@aop.gov.af
					</p>
				</div>
			</div>
		</div>
	</div>


	<!-- <div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Bootstrap Template 2017 All right reserved. Template By </span><a href="http://webthemez.com/free-bootstrap-templates/" target="_blank">WebThemez</a>
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<!-- <script src="{{asset('js/dropdown.js')}}"	></script> -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/semantic.min.js')}}"></script> 


<script src="{{asset('js/jQuery.scrollSpeed.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('js/jquery.fancybox-media.js')}}"></script>  
<script src="{{asset('js/jquery.flexslider.js')}}"></script>
<script src="{{asset('js/animate.js')}}"></script>
<!-- Vendor Scripts -->

<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<!--<script src="js/modal.js"></script>  -->
<script type="text/javascript">jQuery.scrollSpeed(100, 800);</script>


<script>
$('.ui.dropdown').dropdown();
$('.ui.dropdown').dropdown({transition: 'drop' }).dropdown({ on: 'hover' });

//  $('.ui.dropdown')
//   .dropdown()
// ;

$('.menu .item')
  .tab()
;

	
	$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});


 $('.languageSwitcher').click(function () {
		
		var locale = $(this).prop('id')
		var _token  = $("input[name=_token]").val();

		$.ajax({
			url:"{{url('language')}}",
			type:"get",
			data:{locale:locale,_token:_token},
			datatype:"json",
			success: function(data){
	
				window.location.reload(true);
			},
			error: function(data){

			},
			beforeSend: function(data){

			},



		});
});
</script>

</body>
</html>