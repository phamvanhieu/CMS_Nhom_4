<?php
/*
Plugin Name: Random-Products
Plugin URI: https://nhom4.com/
Description: Plugin lấy ngẫu nhiên liên kết các sản phẩm và hiển thị lên sản phẩm viết cụ thể
Version: 1.0
Author: Nhóm 4
Author URI: https://nhom4.com/
License: GPL
*/

function nhom4_rand_products() {
    $args = array(
     'post_type' => 'product',
     'orderby' => 'rand',
     'posts_per_page' => 4,
     );
    $the_query = new WP_Query( $args );
    if ( $the_query->have_posts() ) {
      $string .= '<div class="container">
                    <div class="row"> SẢN PHẨM';
       while ( $the_query->have_posts() ) {
              $the_query->the_post();
              ?>
                <div class="col-md-3">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail( get_the_id(), 'thumbnail', array( 'class' =>'thumnail') ); ?>
                    </a>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
                    
              <?php
       }
       $string .= '</div>
       </div>';
       wp_reset_postdata();
    } else {
       $string .= 'no posts found';
    }
       return $string;
}
add_shortcode('nhom4-rand-products','nhom4_rand_products');