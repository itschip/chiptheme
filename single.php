<?php get_header();?>
<div class="container">
  <h1 class='single-page-title text-muted'><?php the_title();?></h1>

  <?php if (have_posts()) : while(have_posts()) : the_post();?>

    <p class="text-muted"><?php the_date();?></p>

    <?php the_content();?>

  <?php endwhile; endif;?>
</div>
<?php get_footer();?>
