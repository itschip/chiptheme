<?php get_header();?>
<div class="container mt-3">
  <h1 class="mb-5"><?php the_title();?></h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>

    <?php the_content();?>

  <?php endwhile; endif;?>
</div>
<?php get_footer();?> 
