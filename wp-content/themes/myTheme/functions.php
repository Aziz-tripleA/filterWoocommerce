<?php

add_theme_support( 'woocommerce' );

add_action( 'wp_enqueue_scripts','enqueue_my_scripts');


function enqueue_my_scripts (){
    wp_enqueue_script('custom_products_filteration', get_theme_file_uri( '/custom_filteration.js' ) , array('jquery'),'1.12' ,true);
    wp_localize_script( 'custom_products_filteration', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );   
}

add_action('wp_ajax_woocommerce_ajax_filter_products', 'woocommerce_ajax_filter_products'); 

add_action('wp_ajax_nopriv_woocommerce_ajax_filter_products', 'woocommerce_ajax_filter_products');          

function woocommerce_ajax_filter_products(){
   //echo $_POST['city'];

     $args = array(
        'post_type' => 'product',
        'post_status' => 'publish',
        'meta_query' => array(
            array(
                'key'     => 'city',
                'value'   => $_POST['city'],
                'compare' => 'LIKE',
            ),

        ),
    );

    $products = new WP_Query($args);
    if($products->have_posts()){
        while($products->have_posts()){
            $products->the_post(  );
            $resutl = wc_get_template_part( 'content', 'product' );
        }
    }
   echo $resutl; 
}