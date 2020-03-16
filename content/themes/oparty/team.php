<?php
/*
Template Name: Page notre équipe
*/
?>
<?php get_header(); ?>
<section class="team">
    <h2 class="titleRow skew-title">  
      <span>q</span><span>u</span><span class="last">i</span>
      &nbsp; 
      <span>s</span><span>o</span><span>m</span><span>m</span><span>e</span><span class="last">s</span>
      &nbsp;
      <span>n</span><span>o</span><span>u</span><span>s</span><span class="last">?</span>       
    </h2>
    <div class="team__top">
          <?php
             $wp_query = new WP_Query([
                  'pagename' => 'qui-sommes-nous',
            ]);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();  
          ?>
      <img class="team__top__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <div class="team__top__perso">
        <?php the_content(); ?>
      </div>
    </div>
    <?php
            endwhile;
            wp_reset_postdata();
            endif;
      ?>
  </section>  
<?php get_footer(); ?>