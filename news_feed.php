<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<div class="fluid-container">
    <div class="row">
      <!--row c'est pour crée une ligne-->
      <div class="col-12">
        <img src="./assets/image/news_feed/one-piece.jpg" alt="slider" width="100%" height="305" class="img-fluid">
      </div>
      <!--déclarer une div cela crée un bloc-->
    </div>
  </div>
  <div>
    <h1>fil d'actualiés</h1>
  </div>
  <div>
    <h2 class="text-uppercase bold text-center titre text-white py-2 bg-gris">les nouvelle à ne pas manquer</h2>
  </div>
          <div class=“box“>
              <!--<div class="row" n'était pas nessecaire la flex-box est suffisante>-->
                <div style="display:inline-block;"class="col-3 children py-20">
                  <img src="./assets/image/news_feed/golden globe.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="golden globe">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">golden globe</h3>
                  <p>
                    Anatomie d’une chute préféré à Barbie, Oppenheimer et le cercle des Neiges
                  </p>
                  <h4>festival</h4>
                </div>
                <!--il faut que les div similaire soit aligner verticalement pour qu'elles ne s'imbrique pas les une dans les autres exemple toutes les div class= col-3 doivent etres au meme niveau-->
                <div class="col-3 children py-20">
                  <img src="./assets/image/news_feed/shrek.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="shrek">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">shrek 5</h3>
                  <p>Les acteurs sont en 
                    négiciations pour une suite
                  </p>
                  <h4>cinéma</h4>
                </div>
                <div class="col-3 children py-20">
                  <img src="./assets/image/news_feed/DUNE2.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="dune2">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">dune 2</h3>
                  <p>Au cinéma en 2024 : voici les 
                    30 films les plus attendu! Dune 
                    2, Furiosa, Monte Cristo...
                  </p>
                  <h4>cinéma</h4>
                </div>
                <div class="col-3 children py-20">
                  <img src="./assets/image/news_feed/star wars outlaws.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="star wars outlaws">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">star wars outlaws</h3>
                  <p>Star Wars Outlaws est l’un des prochains jeux vidéo
                     Star Wars à arriver sur nos consoles. 
                     Un titre ambitieux et prometteur, pourtant encore bien mystérieux...
                  </p>
                  <h4>jeux video</h4>
                </div>
                <div class="col-3 children py-20">
                  <img src="./assets/image/news_feed/san sebastian.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="san sebastian">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">san sébastian</h3>
                  <p>Aste Nagusia Donostia ou, en d’autres termes, 
                    la Semana Grande de Saint-Sébastien. 
                    Aujourd’hui, 13 août, marque le début de ...
                  </p>
                  <h4>festival</h4>
                </div>
                <div class="col-3 children py-20">
                  <img src="./assets/image/the boys.png" class="rounded-4 img-fluid" style="height: 400px; width: 600px;" alt="the boys">
                </div>
                <div style="display:inline-block;">
                  <h3 class="vertical-align:top">the boys</h3>
                  <p>Série phare d’Amazon Prime Video, The Boys reviendra 
                    prochainement dans un quatrième acte qui s’annonce palpitant 
                    avec un Homelander toujours plus redoutable. Le tournage est désormais bouclé ...
                  </p>
                  <h4>séries</h4>
                </div>
          </div>
<?php include ('_partials/footer.php') ?>
</body>
</html>