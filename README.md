# filterWoocommerce
pulgins:
1- woocommerce
2- ACF

# project details
fist create custom theme called "myTheme";
create js file to handle ajax request called "custom_filteration.js";
in functions.php 
  * first of all we need to call add_theme_support('woocommerce');
  * wp_enqueue_script for custom_filteration.js
  * create function woocommerce_ajax_filter_products();
  * in this function i did a query to get filtered products using WP_Query(); and return html 

