<?php
get_header();
global $wp_query;
?>
<div class="container">
    <div class="row">

<div class="col-md-12">
    <!-- =====  PRODUCT TAB  ===== -->
    <div id="product-tab" class="">
    <div class="heading-part mb_10 ">
        <h2 class="main_title"><?php echo $wp_query->found_posts; ?>
        <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h2>
    </div>
    <div class="tab-content clearfix box">
        <div class="tab-pane active" id="nArrivals">
        <div class="nArrivals owl-carousel">
        <?php if ( have_posts() ) { ?>
            <?php while ( have_posts() ) { the_post(); ?>
            <!-- San Pham -->
            <div class="product col-md-4 col-lg-3 col-sm-6 col-xs-12">
                <div class="item mb_20 boder">
                    <p class="new">Sale</p>
                    <?php  the_post_thumbnail('medium') ?>
                    <div class="caption product-detail text-center">
                    <marquee>
                    <h6 data-name="product_name" class="product-name"><a href="<?php echo get_permalink(); ?>" title=""><?php the_title();  ?></a></h6>
                    </marquee>
                    <span class="price"><span class="amount"><span class="currencySymbol"></span><s><?php echo get_post_meta( get_the_ID(), '_regular_price', true ); ?> đ</s></span> <br>
                    <span class="price" style="color:red"><span class="amount"><span class="currencySymbol"></span><?php echo get_post_meta( get_the_ID(), '_sale_price', true ); ?> đ</span>                                              
                    <a href="?add-to-cart-<?php echo get_the_ID() ?>" style="margin-bottom: -2px!important;" class="btn form-control"><i class="fas fa-cart-plus"></i> Mua Ngay</a>
                </div>
                </div>
            </div>
            <?php } ?>
            <?php echo paginate_links(); ?>
            <?php } ?>
        </div>
        </div>
    </div>
</div>
    <!-- =====  PRODUCT TAB  END ===== -->
        
    </div>
</div>

<?php get_footer(); ?>