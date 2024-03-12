<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<main>
      <div>
      <h1 class="text-center pt-200 bold">Vous pouvez nous contacter:</h1>
      <p class="text-center pt-5">Par mail à contact@mail.com</p>
      <p class="text-center">À l’adresse postale suivante: ADRESSE</p>
      <p class="text-center">Par téléphone au 06XXXXXXXX</p>
      <p class="text-center">Grâce au formulaire ci-dessous</p>
      <h1 class="text-center pt-200 bold">Formulaire de contact:</h1>
      </div>
      <div>
        <div class="pt-100 px-14">
          <p class="ps-1">Votre nom :</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control light" placeholder="Saisir votre nom" aria-label="name" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="pt-3 px-14">
          <p class="ps-1">Votre prénom :</p>
          <div class="input-group">
            <input type="text" class="form-control light" placeholder="Saisir votre prénom" aria-label="last name" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="pt-3 px-14">
          <p class="ps-1">Votre Email :</p>
          <div class="input-group">
            <input type="email" class="form-control light" placeholder="Saisir votre Email" aria-label="Email" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="pt-3 px-14">
          <p class="ps-1">Votre Téléphone :</p>
          <div class="input-group">
            <input type="tel" class="form-control light" placeholder="Saisir votre téléphone" aria-label="Phone" aria-describedby="basic-addon1">
          </div>
        </div>
        <div class="pt-3 px-14">
          <p class="ps-1">Votre Message :</p>
          <div class="input-group">
            <textarea class="form-control light msg" placeholder="Saisir votre message" aria-label="message" aria-describedby="basic-addon1"></textarea>
          </div>
      </div>    
      </div>
      <div class="pt-3 px-14 limit">
        <p class="ps-1 d-inline px-5">Préférence de réponse :</p>
        <div class="d-inline">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked>
            <label class="form-check-label" for="inlineRadio1">
              Email
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">
              Sms
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
            <label class="form-check-label" for="inlineRadio3">
              Appel
            </label>
          </div>
        </div>
      </div>
      <div class="text-center py-150">
        <button type="submit" id="sendButton">Envoyer</button>
      </div>
    </main>
<?php include ('_partials/footer.php') ?>
</body>
</html>