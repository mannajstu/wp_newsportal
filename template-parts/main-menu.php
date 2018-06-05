

      <?php 
      wp_nav_menu(array(
    'theme_location' => 'main-menu',
    'depth' => 2, // 1 = no dropdowns, 2 = with dropdowns.
    'container' => 'div',
    'container_class' => 'main_menu_area ',
    'container_id' => '',
    
    'menu_id' => 'nav',


    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
));
?>