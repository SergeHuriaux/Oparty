<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg navbar-dark ">

      <div class="logo-texte">
        <a class="navbar-brand text-center" href="<?= home_url(); ?>">
          <h1 class="title--site"><span class="lettre">o</span><span class="lettre">'</span><span
              class="lettre">P</span><span class="lettre">a</span><span class="lettre">r</span><span
              class="lettre">t</span><span class="lettre">y</span></h1>
          <h5 class="slogan">Pour une fête sans prise de tête</h5>
        </a>
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <!--Link Thèmes-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <div class="icon">
                <i class="fa fa-birthday-cake header__menu__ul__li__a__icon__i" aria-hidden="true"></i>
                <i class="fa fa-birthday-cake header__menu__ul__li__a__icon__i" aria-hidden="true"></i>
              </div>
              <div class="name"><span data-text="Thémes">Thèmes</span></div>
            </a>
          </li>
          <!--Link Qui sommes-nous?-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <div class="icon">
                <i class="fa fa-users header__menu__ul__li__a__icon__i"></i>
                <i class="fa fa-users header__menu__ul__li__a__icon__i"></i>
              </div>
              <div class="name"><span data-text="Notre équipe">Notre équipe</span></div>
            </a>
          </li>
          <!--Link Contact-->
          <li class="nav-item">
            <a class="nav-link" href="http://54.166.157.119/projet-oparty/formulaire-de-contact/">
              <div class="icon">
                <i class="fa fa-envelope header__menu__ul__li__a__icon__i" aria-hidden="true"></i>
                <i class="fa fa-envelope header__menu__ul__li__a__icon__i" aria-hidden="true"></i>
              </div>
              <div class="name"><span data-text="Contact">Contact</span></div>
            </a>
          </li>
          <!--Livre d'or-->
          <li class="nav-item">
            <a class="nav-link" href="#">
              <div class="icon">
                <i class="fa fa-book header__menu__ul__li__a__icon__i"></i>
                <i class="fa fa-book header__menu__ul__li__a__icon__i"></i>
              </div>
              <div class="name"><span data-text="Livre d'or">Livre d'or</span></div>
            </a>
          </li>
        </ul>
        <form class="form-inline d-flex justify-content-center md-form form-sm  my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline my-2 my-sm-0" type="submit"><i class="fa fa-search"
              aria-hidden="true"></i></button>
        </form>
      </div>
    </nav>
  </header>