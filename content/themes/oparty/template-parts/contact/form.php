        <!-- CONTACT FORM -->
        <div class="contact__msg">
          <h3 class="contact__msg--title">Contactez-nous</h3>
          <!-- <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="name">Nom*</label>
                <input type="text" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="firstname">Prénom*</label>
                <input type="text" class="form-control" id="firstname" required>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="mail">Email*</label>
                <input type="mail" class="form-control" id="mail" required>
              </div>
              <div class="form-group col-md-4">
                <label for="phone">Téléphone</label>
                <input type="text" class="form-control" id="phone">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="date">Date de l'événement</label>
                <input type="date" class="form-control" id="date">
              </div>
              <div class="form-group col-md-3">
                <label for="numberKids">Nombre d'enfants prévu</label>
                <input type="number" class="form-control" id="numberKids">
              </div>
              <div class="form-group col-md-3">
                <label for="age">Age des enfants</label>
                <input type="number" class="form-control" id="age" ">
              </div>
              <div class=" form-group col-md-3">
                <label for="theme">Thèmes souhaité</label>
                <select id="theme" class="form-control">
                  <option selected>Choisissez le thème souhaité</option>
                  <option value="clown">Clown</option>
                  <option value="princesse">Princesse</option>
                  <option value="foot">Football</option>
                  <option value="pirate">Pirates</option>
                </select>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address">
              </div>
              <div class="form-group col-md-2">
                <label for="cpostal">Code postal</label>
                <input type="text" class="form-control" id="cpostal">
              </div>
              <div class="form-group col-md-4">
                <label for="ville">Ville</label>
                <input type="text" class="form-control" id="ville">
              </div>
            </div>
            <div class="form-group">
              <label for="msg">Entrez votre message</label>
              <input type="textarea" class="form-control" id="msg">
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Inscrivez vous à la newsletter
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>          -->
          <?php
            $wp_query = new WP_Query([
              'pagename' => 'formulaire-de-contact'
          ]);
          
          if ($wp_query->have_posts()): while($wp_query->have_posts()): $wp_query->the_post();
          
              the_content();
          
          endwhile; wp_reset_postdata(); endif;  
          ?>
          <!-- End #contact-form -->
        </div>
        <!-- End .contact -->
      </div>
      <!-- End .wrapper -->
    </div>
    <!-- End .container -->
  </section>