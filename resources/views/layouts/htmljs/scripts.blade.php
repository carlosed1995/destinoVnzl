
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-101521451-1', 'auto');
  ga('send', 'pageview');

</script>
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
<!-- //here ends scrolling icon -->
<script src="/../public/js/minicart.min.js"></script>
<script>
    // Mini Cart
    paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>


        <script type="text/javascript" src="/../public/jsnuevo/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="/../public/jsnuevo/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="/../public/jsnuevo/jquery.magnific-popup.min.js"></script>
        <!-- Replace test API Key "AIzaSyAZsDkJFLS0b59q7cmW0EprwfcfUA8d9dg" with your own one below 
        **** You can get API Key here - https://developers.google.com/maps/documentation/javascript/get-api-key -->
        <script type="text/javascript" src="/../public/jsnuevo/all.js"></script>

<script src="/../public/js/custom.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="/../public/js/app.min.js" type="text/javascript"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="/../public/js/bootstrap.min.js" type="text/javascript"></script>
<!-- iCheck -->

<script src="/../public/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="/../public/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/../public/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
<script src="/../public/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="/../public/js/plugins/purify.min.js" type="text/javascript"></script>
<script src="/../public/js/fileinput.min.js"></script>
<!-- main slider-banner -->
<script src="/../public/jsnuevo/all.js"></script>
<script src="/../public/js/skdslider.min.js"></script>
<link href="/../public/css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
                        
            jQuery('#responsive').change(function(){
              $('#responsive_wrapper').width(jQuery(this).val());
            });
            
        });
</script>