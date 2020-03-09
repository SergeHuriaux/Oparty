<?php get_header() ?>

<section class="home__top">  
  <video class="home__top__video" controls autoplay muted loop src="http://localhost/oparty/content/uploads/2020/03/Video.mp4"></video>
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
    <?php
      $wp_query = new WP_Query([
        'post_type' => 'theme',
      ]);
    ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/miam7.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="display-4">Miam</h5>
            <p>Pour un avnniversaire gourmand</p>
            <a type="button" class="btn btn-outline-light">Decouvrez</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/pirate2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="display-4">Pirates</h5>
            <p>A l'abordage moussaillon</p>
            <a type="button" class="btn btn-outline-light">Decouvrez</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/party8.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="display-4">Boom</h5>
            <p>Une fête comme les grands</p>
            <a type="button" class="btn btn-outline-light">Decouvrez</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/starwars1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h5 class="display-4">Star Wars</h5>
            <p>TA TA TA TATATIN TATATIN</p>
            <a type="button" class="btn btn-outline-light">Decouvrez</a>
          </div>
        </div>
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
  </div>
</section>

<?= get_footer() ?>