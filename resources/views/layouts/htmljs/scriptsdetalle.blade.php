  <script src="/../public/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>

<!-- //here ends scrolling icon -->
<script src="/../public/js/minicart.min.js"></script>
<script src="/../public/js/carrousel.js"></script>
<script type="text/javascript" src="/../public/jsnuevo/isotope.pkgd.min.js"></script>
<script type="text/javascript" src="/../public/jsnuevo/imagesloaded.pkgd.min.js"></script>
 <script type="text/javascript" src="/../public/jsnuevo/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="/../public/jsnuevo/all.js"></script>
<!-- Bootstrap 3.3.2 JS -->
<script src="/../public/js/bootstrap.js" type="text/javascript"></script>
<script src="/../public/js/custom.js" type="text/javascript"></script>
<script src="/../public/plugins/daterangepicker/moment.min.js"></script>
<!-- AdminLTE App -->
<script src="/../public/js/app.min.js" type="text/javascript"></script>
<script src="/../public/plugins/datepicker/bootstrap-datepicker.js"></script>

<script src="/../public/plugins/select2/select2.full.min.js"></script>
<script src="/../public/plugins/daterangepicker/daterangepicker.js"></script>

<!-- Bootstrap 3.3.2 JS -->

<!-- iCheck -->
<script src="/../public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

<!-- main slider-banner -->
<script src="/../public/js/skdslider.min.js"></script>
<link href="/../public/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
                        
            jQuery('#responsive').change(function(){
              $('#responsive_wrapper').width(jQuery(this).val());
            });
            
        });
  $(function () {
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });      

});
</script>