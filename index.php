<?php get_header();?>

<div class="container">
  <h1 class="m-3"><?php single_post_title();?></h1>

  <div class="mt-5">
    <?php 
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          get_template_part('template-parts/content', 'archive');
        }
      }
    ?>
  </div>
</div>
<?php get_footer();?>