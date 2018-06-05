      <?php 
      wp_nav_menu(array(
    'theme_location' => 'top-menu',
    'depth' => 1, // 1 = no dropdowns, 2 = with dropdowns.
    'container' => 'div',
    'container_class' => 'top_menu floatleft ',
    'container_id' => 'bs-example-navbar-collapse-1',
    'menu_class' => ' ',
    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
    'walker' => new WP_Bootstrap_Navwalker(),
));
?>