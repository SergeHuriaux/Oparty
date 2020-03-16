<?php
/*
Template Name: Page Livre d'or
*/
?>
<?php get_header(); ?>
<section class="golden__book">
    <h2 class="titleRow skew-title">  
      <span>l</span><span>i</span><span>v</span><span>r</span><span>E</span><span class="last">S</span>
      &nbsp; 
      <span class="last">d</span>
      &nbsp;
      <span class="last">'</span>
      &nbsp;
      <span>o</span><span class="last">r</span>       
    </h2>   
    <div class='wrapper'>
      <div class='carousel2'>
      <?php
             $wp_query = new WP_Query([
                  'category_name' => 'goldenbook',
                  'posts_per_page' => 9,
            ]);
            if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();  
          ?>
        <div class='carousel__item'>
          <div>
            <img class='carousel__item-head' src="<?php the_post_thumbnail_url(); ?>" alt="" style="width:200px";>
          </div>
          <div class='carousel__item-body'>
            <p class='title'><?php the_title(); ?></p>
            <p><?php the_excerpt(); ?></p>
          </div>
        </div>
        <?php
            endwhile;
            wp_reset_postdata();
            endif;
      ?>
        <!-- <div class='carousel__item'>
          <div>
            <img class='carousel__item-head' src="images/christophe.jpg" alt="">
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Christophe Kleenex</p>
            <p>Atchoum, atchoum et atchoum</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div>
            <img class='carousel__item-head' src="images/pierre.jpg" alt="">
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Pierre Carambar</p>
            <p>Je vous casse les genoux!</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div>
            <img class='carousel__item-head' src="images/gyom.jpg" alt="">
          </div>
          <div class='carousel__item-body'>
            <p class='title'>Gyom Sirop d'Erable</p>
            <p>Et BIM dans ta face!</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🐠
          </div>
          <div class='carousel__item-body'>
            <p class='title'>tropical fish</p>
            <p>Unicode: U+1F420</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🐡
          </div>
          <div class='carousel__item-body'>
            <p class='title'>blowfish</p>
            <p>Unicode: U+1F421</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🦈
          </div>
          <div class='carousel__item-body'>
            <p class='title'>shark</p>
            <p>Unicode: U+1F988</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🐙
          </div>
          <div class='carousel__item-body'>
            <p class='title'>octopus</p>
            <p>Unicode: U+1F419</p>
          </div>
        </div>
        <div class='carousel__item'>
          <div class='carousel__item-head'>
            🐚
          </div>
          <div class='carousel__item-body'>
            <p class='title'>spiral shell</p>
            <p>Unicode: U+1F41A</p>
          </div>
        </div> -->
      </div>
    </div>
    
  </section> 
<?php get_footer(); ?>