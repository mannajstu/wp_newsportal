 <?php 
      wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container' => 'div',
    'container_class' => 'footer_menu ',
    'container_id' => '',
    
    'menu_id' => 'f_menu',


    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
));
?>