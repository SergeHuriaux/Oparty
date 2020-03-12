<?php

global $wpdb;


// if(!empty($_POST['mailNewsletter'])){
//       $email = $_POST['mailNewsletter'];
// }

//$email = 'toto@titi.fr';
// $email = $_POST['mailNewsletter'];


// $table = $wpdb->prefix.'newsletter';
// $data = ['email'=>$email];
// $format = ['%s'];

// $wpdb->insert($table,$data,$format);
?>


<form action="" method="post">
      <div class="form-row justify-content-center">
            <div class="form-group col-md-3">
                  <input type="mail" class="form-control" name="mailNewsletter" id="newsletter" placeholder="Inscrivez-vous à notre newsletter" required>
            </div>
            <div class="form-group col-md-2">
                  <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
      </div>
</form>


