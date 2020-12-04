<!DOCKTYPE html>
<html>
  
  <head>
    <?php wp_head();?>
  </head>

  <body <?php body_class();?>>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
  <div class="navbar-nav">
    <a class="navbar-brand" href="#"><?php echo get_bloginfo();?></a>
        <?php
        wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => '',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
    </div>
</nav>


