<!DOCTYPE html>
<html lang="vi">
<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title><?php bloginfo('title'); ?></title>
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/frontend/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">
    <!-- =====  HEADER START  ===== -->
    <header id="header" class="mb_20">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12">
              <div class="header-top-left">
                <div class="contact"><a><i class="fas fa-phone"></i> Gọi Ngay !</a> <span>0359003130</span> || 
                  <a target="_blank" href="https://www.google.com/maps/place/Tr%C6%B0%E1%BB%9Dng+Cao+%C4%90%E1%BA%B3ng+C%C3%B4ng+ngh%E1%BB%87+Th%E1%BB%A7+%C4%90%E1%BB%A9c/@10.8514325,106.7558754,17z/data=!3m1!4b1!4m5!3m4!1s0x31752797e321f8e9:0xb3ff69197b10ec4f!8m2!3d10.8514325!4d106.7580641?hl=vi-VN">
                    <i class="fas fa-map-marker-alt"></i> Địa Chỉ :</a> <span>TRƯỜNG CAO ĐẲNG CÔNG NGHỆ THỦ ĐỨC.</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="main-search mt_40">
                <form role="search" method="get" class="woocommerce-product-search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field form-control input-lg" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s"  class="form-control input-lg">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
                </form>
              </span> </div>
            </div>
            <div class="navbar-header col-xs-6 col-sm-4"> <div class="navbar-brand"><?php echo get_custom_logo(); ?></div> </div>
            <div class="col-xs-6 col-sm-4 shopcart">
              <a href="<?php echo WC()->cart->get_cart_url(); ?>" title="<?php _e( 'Giỏ Hàng' ); ?>">
              <div id="cart" class="btn-group btn-block mtb_40">
              
                <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true">
                  <span>
                      <?php echo sprintf (_n( '<i style="font-size:40px" class="fas fa-cart-arrow-down"></i> (%d  Sản Phẩm)', '<i style="font-size:40px" class="fas fa-cart-arrow-down"></i> (%d Sản Phẩm)', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
                   </button>
              </div></a>
            </div>
          </div>
        </div>
        <nav class="navbar">
          <div class="container">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> 
              <span class="i-bar"><i class="fa fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse js-navbar-collapse" style="left: 20px;height: 1px;">
            <?php
                wp_nav_menu([
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'main-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ]);
            ?>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->