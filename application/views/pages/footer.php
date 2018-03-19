
<!-- //footer -->
<div class="footer">
    <div class="container">
        <div class="w3_footer_grids">

            <div class="col-md-3 sakura_footer_grid">
                <h3>Information</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/PageController/aboutUs">About Us</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/PageController/contacttUs">Contact Us</a></li>
                </ul>
            </div>

            <!-- <div class="col-md-3 sakura_footer_grid" style="float: right">
                <h3>Profile</h3>
                <ul class="info">
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/PageController/login">Login</a></li>
                    <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="<?php echo base_url()?>index.php/PageController/createAccount">Create Account</a></li>
                </ul>
            </div> -->
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="footer-copy">

        <div class="container">
            <p>© 2017 Sakura Thala. All rights reserved | Design by Group 38
</div>
    </div>

</div>
<div class="footer-botm">
    <div class="container">
        <div class="sakura_layouts-foot">
            <ul>
                <li><a href="#" class="sakura_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#" class="sakura_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                <li><a href="#" class="sakura_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
<script type="<?php echo base_url(); ?>text/javascript">
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
<script src="<?php echo base_url(); ?>js/minicart.min.js"></script>
<script>
// Mini Cart
paypal.minicart.render({
        action: '#'
    });

    if (~window.location.search.indexOf('reset=true')) {
        paypal.minicart.reset();
    }
</script>
<!-- main slider-banner -->
<script src="<?php echo base_url(); ?>js/skdslider.min.js"></script>
<link href="<?php echo base_url(); ?>css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
