<aside class="nav-side-menu">
      <div class="brand">Filtrez les catégories</div>
      <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
      <div class="menu-list">
        <ul id="menu-content" class="menu-content collapse out">
          <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
          <div class="menu-list">
            <ul id="menu-content" class="menu-content">
              <h4><i class="fa fa-gift fa-lg"></i>Thèmes par catégories d'âges</h4>
              <form action="" method="get">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="age1" id="age1">
                  <label class="form-check-label" for="age1">3 à 6 ans</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="age2" id="age2">
                  <label class="form-check-label" for="age2">6 à 9 ans</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="age3" id="age3">
                  <label class="form-check-label" for="age3">9 à 13 ans</label>
                </div>
                <button type="submit" class="btn btn-primary">Filtrer</button>
              </form>
              <!-- <h4><i class="fa fa-globe fa-lg"></i>Thèmes par univers</h4>
              <ul>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="cat_clown" id="cat_clown">
                  <label class="form-check-label" for="cat_clown">Clown</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="cat_pirate" id="cat_pirate">
                  <label class="form-check-label" for="cat_pirate">Pirate</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="cat_princesse" id="cat_princesse">
                  <label class="form-check-label" for="cat_princesse">Princesse</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="cat_foot" id="cat_foot">
                  <label class="form-check-label" for="cat_foot">Football</label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="cat_hero" id="cat_hero">
                  <label class="form-check-label" for="cat_hero">Super-héros</label>
                </div>
              </ul> -->
            </ul>
          </div>
    </aside>

    <?php

    $age =  "";
    $age1 = !empty($_GET['age1']) ? $_GET['age1'] : NULL;
    $age2 = !empty($_GET['age2']) ? $_GET['age2'] : NULL;
    $age3 = !empty($_GET['age3']) ? $_GET['age3'] : NULL;

    if ($age1){
      $age = $age1;
    }
    else if($age2){
      $age = $age2;
    }
    else if($age3){
      $age = $age3;
    }