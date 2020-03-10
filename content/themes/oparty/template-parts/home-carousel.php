<?php
    $wp_query = new WP_Query([
      'post_type' => 'theme',
      'posts_per_page' => 4,
      'term_id' => 4,
    ]);
    $i=1;     
?>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">  
  <div class="carousel-inner">
    <?php if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <div class="carousel-item <?php if ($i == 1) echo 'active'; ?>" data-interval="1000">
      <img src="<?php the_post_thumbnail_url(); ?>" class="d-block w-100" alt="...">
      <div class="carousel-caption">
        <h5 class="display-4"><?php the_title() ?></h5>
        <p><?php the_excerpt() ?></p>
        <a href="<?php the_permalink(); ?>" type="button" class="btn btn-outline-light">Decouvrez</a>
      </div>
    </div>
  <?php
  $i++;
    endwhile;
          wp_reset_postdata();
        endif; 
  ?>   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>