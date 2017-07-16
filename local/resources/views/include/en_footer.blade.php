	<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4">
				<div class="widget">
					<h5 class="widgetheading">{{trans('home.walkby')}}</h5>
					<address>
					<strong>{{trans('home.aop')}}</strong><br>
					{{trans('home.aop_address')}}</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> info@aop.gov.af
					</p>
				</div>
			</div>
			<div class="col-md-5 col-sm-5">
				<div class="widget">
					<h5 class="widgetheading">{{trans('home.goto')}}</h5>
					<ul class="link-list">
						<li><a href="{{route('home')}}">{{trans('home.home')}}</a></li>
						<li><a href="{{route('ogpa')}}">{{trans('home.about')}}</a></li>
						<li><a href="{{route('seminars')}}">{{trans('home.seminars')}}</a></li>
						<li><a href="{{route('agendas')}}">{{trans('home.agendas')}}</a></li>
						<li><a href="{{route('themes1')}}">{{trans('home.themes')}}</a></li>
						<li><a href="{{route('news')}}">{{trans('home.news')}}</a></li>
						<li><a href="{{route('stories')}}">{{trans('home.stories')}}</a></li>
						<li><a href="{{route('opportunities')}}">{{trans('home.jobs&opportunities')}}</a></li>
						<li><a href="{{route('contacts')}}">{{trans('home.contact')}}</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 col-sm-3">
				<div class="widget">
					<img src="{{asset('assets/img/ogp.png')}}" style="height:190px" class="img-responsive">
				</div>
			</div>
		</div>
	</div>
	</footer>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->


<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/semantic.min.js')}}"></script> 
<script src="{{asset('assets/js/jQuery.scrollSpeed.js')}}"></script>
<script src="{{asset('assets/js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox.pack.js')}}"></script>
<script src="{{asset('assets/js/jquery.fancybox-media.js')}}"></script>  
<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>
<!-- Vendor Scripts -->

<script src="{{asset('assets/js/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/js/jquery.isotope.min.js')}}"></script>
<script src=" {{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('assets/js/animate.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/fullcalendar.min.js')}}"></script>
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