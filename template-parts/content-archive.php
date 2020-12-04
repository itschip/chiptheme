

<div class="container mb-3">
  <div class="card bg-dark text-white">
    <div class="card-header">
      <h5 class="card-title"><?php the_title();?></h5>
      <p class="card-text"><?php echo get_comments_number() . " Comment(s)";?></p>
    </div>
    <div class="card-body">
      <p class="card-text"><?php the_excerpt(3);?></p>
      <a href="<?php the_permalink(); ?>" class="btn btn-primary">Les mer</a>
    </div>
    <div class="card-footer">
      <small class="text-muted"><?php the_date();?></small>
    </div>
  </div>  
</div>
