
<?php include 'links.php';?>
<body>
<?php include 'loggedHeader.php';?>




<!-- //main-slider -->
<!-- //top-header and slider -->
<!-- top-brands -->
<div class="top-brands">
    <div class="container">
      
        <div class="grid_3 grid_5">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
                        <div class="agile-tp">
                            
                            
                        </div>
                        <div class="agile_top_brands_grids">

                        <?php  foreach ($products as $pro ){

                            ?>

                            <div class="col-md-4 top_brand_left">
                                <div class="hover14 column">
                                    <div class="agile_top_brand_left_grid">
                                       <!--  <div class="agile_top_brand_left_grid_pos">
                                            <img src="images/offer.png" alt=" " class="img-responsive" />
                                        </div> -->
                                        <div class="agile_top_brand_left_grid1">
                                            <figure>
                                                <div class="snipcart-item block" >
                                                    <div class="snipcart-thumb">
                                                        
                                                        <a href="products"><img title=" " alt=" " src="<?php echo base_url('uploads/images/').$pro->product_image;?>" /></a>


                                                        <p><?php echo $pro->product_title ;?></p>
                                                     
                                                        
                                                        <h4><?php echo "Rs.".$pro->product_price ;?></h4>
                                                    </div>
                                                    

                                                    <div class="snipcart-details top_brand_home_details" id="cart">

                                                        <form action="<?php echo base_url()?>index.php/ProductController/addToCart" method="post">
                                                            <fieldset>                                                                                                                   <input type="hidden" name="image" value="<?php echo $pro->product_image ?>" />    

                                                                 <input type="hidden" name="id" value="<?php echo $pro->product_id ?>" />
                                                                
                                                                <input type="hidden" name="item_name" value="<?php echo $pro->product_title ?>" />

                                                                <input type="hidden" name="amount" value="<?php echo $pro->product_price ?>" />

                                                                <input type="hidden" name="discount_amount" value="<?php echo $pro->product_discount ?>" />
                                                                
                                                                <input type="submit" name="submit" value="Add to cart" class="button"  />
                                                            </fieldset>
                                                        </form>
                                                    </div>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php
                            }
                        ?>
                      
                            <div class="clearfix"> </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<!-- //footer -->
<?php include 'footer.php';?>


<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
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
<script src="<?php echo base_url()?>js/minicart.min.js"></script>

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
<script src="<?php echo base_url()?>js/skdslider.min.js"></script>
<link href="<?php echo base_url()?>css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});

        jQuery('#responsive').change(function(){
            $('#responsive_wrapper').width(jQuery(this).val());
        });

    });
</script>
<!-- //main slider-banner -->
<!-- <script type="text/javascript">
    $('#cart button').load('home.php');

</script> -->
</body>
</html>