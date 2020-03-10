<?php get_header(); ?>
<section class="theme">
    <h2><i class="fa fa-gift">Thèmes : <?php the_title() ?></i></h2>
    <div class="theme__top">
      <img class="theme__top__image" src="<?php the_post_thumbnail_url(); ?>" alt="">
      <div class="theme__top__preso">
        <p><?php the_excerpt(); ?></p>
      </div>
    </div>
    <div class="theme__eventInfo">
      <div class="theme__eventInfo__deroule">
        <h3 class="theme__eventInfo__deroule--title">Déroulé de la journée</h3>
        <ul class="theme__ul">
          <li>14H : <?php the_field('h1') ?></li>
          <li>14H30 : <?php the_field('h2') ?></li>
          <li>15H : <?php the_field('h3') ?></li>
          <li>15H30 : <?php the_field('h4') ?></li>
          <li>16H : <?php the_field('h5') ?></li>
          <li>16H30 : <?php the_field('h6') ?></li>
          <li>17H : <?php the_field('h7') ?></li>
        </ul>
      </div>
      <div class="theme__eventInfo__infos">
        <h3 class="theme__eventInfo__infos--title">Infos pratiques</h3>
        <ul class="theme__ul theme__eventInfo__infos--ul">
          <li>Durée de l'activité : <?php the_field('duree') ?> H</li>
          <li>Nombre d'enfants max : <?php the_field('nbenfants') ?></li>
          <li>Lieu : <?php the_field('endroit') ?></li>
          <li>Nombre d'adultes requis : <?php the_field('nbadultes') ?></li>
        </ul>
      </div>
    </div>
  </section>
<?php get_footer(); ?>