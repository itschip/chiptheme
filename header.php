<!DOCKTYPE html>
<html>
  
  <head>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>

    <header class="py-3 custom-header">
      <div class="d-flex justify-content-center">
        <h1 href="#"><?php echo get_bloginfo();?></h1>
      </div>
      <div class="d-flex justify-content-center">
        <?php
          wp_nav_menu( array(
              'theme_location'    => 'header-menu',
              'depth'             => 2,
              'container'         => 'div',
              'container_class'   => '',
              'container_id'      => '',
              'menu_class'        => 'd-flex nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
          ?>
        </div>
    </header>


