<?php
/*
Template Name: Archives des thèmes
*/
?>

<?php get_header(); ?>
<div class="listing">

      <?php get_template_part('template-parts/aside'); ?>

      <section class="listing__theme">
            <!-- <h2 class="listTheme__title">Liste des thèmes</h2> -->
            <h2 class="titleRow skew-title">
                  <span>N</span><span>O</span><span class="last">S</span>
                  &nbsp;
                  <span>T</span><span>H</span><span>E</span><span>M</span><span>E</span><span class="last">S</span>
            </h2>
            <div class="listTheme__content">
                  <?php
                  $wp_query = new WP_Query([
                        'post_type' => 'theme',
                  ]);
                  if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                  $excerpt = get_the_excerpt();
                  ?>
                              <div class="listTheme__content__card" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                                    <div class="listTheme__content__card__content">
                                          <h3 class="listTheme__content__card__content--title"><?php the_title() ?></h3>
                                          <p class="listTheme__content__card__content--copy"><?= substr($excerpt, 0, 50); ?></p>
                                          <a href="<?php the_permalink(); ?>" class="listTheme__content__card__content--btn">Lire la suite</a>
                                    </div>
                              </div>
                  <?php
                        endwhile;
                        wp_reset_postdata();
                  endif;
                  ?>
            </div>
      </section>
</div>
<?php get_footer(); ?>