<!-- footer -->
          <div class="footer">
            <div class="wthree-copyright">
              <p>© 2017 OGPA</p>
            </div>
          </div>
  <!-- / footer -->
<!--main content end-->
</section>
<script src="{{asset('admin-asset/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('admin-asset/js/persian-date.js')}}"></script>
<script src="{{asset('admin-asset/js/persian-datepicker-0.4.5.min.js')}}"></script>
<script src="{{asset('admin-asset/js/raphael-min.js')}}"></script>
<script src="{{asset('admin-asset/js/morris.js')}}"></script>
<script src="{{asset('admin-asset/js/morris.js')}}"></script>
<script src="{{asset('admin-asset/js/bootstrap.js')}}"></script>
<script src="{{asset('admin-asset/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('admin-asset/js/scripts.js')}}"></script>
<script src="{{asset('admin-asset/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('admin-asset/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript --> 
<script type="text/javascript">
    function confirm_submit(){
        var agree = confirm('Are you sure want to delete this record');
        if(agree){
           return true;
        }
        else{
            return false;
        }
    }

    $(document).ready(function() {
      $(".date_dr").pDatepicker();
    });
</script>

</body>
</html>