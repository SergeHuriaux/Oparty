<?php get_header() ?>

<section class="home__top">  
  <video class="home__top__video" controls autoplay muted loop src="http://54.166.157.119/projet-oparty/content/uploads/2020/03/Video.mp4"></video>
</section>
<section class="containerHome">
  <h2 class="titleRow skew-title">
    <span>T</span><span>H</span><span>E</span><span>M</span><span>E</span><span class="last">S</span>
    &nbsp;
    <span class="last">a</span>
    &nbsp;
    <span>l</span><span class="last">a</span>
    &nbsp;
    <span>u</span><span>n</span><span class="last">e</span>
  </h2>
  <div class="bd-example">
    <?php  get_template_part('template-parts/home-carousel'); ?>
  </div>
</section>

<?= get_footer() ?>