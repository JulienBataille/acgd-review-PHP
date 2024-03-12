<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<section class="splide" aria-labelledby="carousel-heading">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/1.jpg"></li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/2.jpg"></li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/88869.png"></li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/Avengers 2 Banner.jpg"> </li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/banniere_movie.jpg"></li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/batverse.png"></li>
        <li class="splide__slide"><img
            src="./assets/image/movie_theatre/Slide/harley-quinn-birds-of-prey-une-scenariste-pour-le-spin-off-suicide-squad-une.jpg">
        </li>
        <li class="splide__slide"><img src="./assets/image/movie_theatre/Slide/joker-bannière.webp"></li>
      </ul>
    </div>
    <script src="./assets/js/movie/main.js"></script>
  </section>
  <!-- fin du carroussel -->

  <!-- corps de la page -->
  <section>
    <div>
      <p class="h1 uppercase gras">LA PAGE DES CINÉPHILES </p>
    </div>
  </section>

  <section>
    <div class="fluid-container">
      <div>
        <p class="h2 bold uppercase">les bandes annonces à ne pas manquer</p>
      </div>


      <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-md-2">
              <a href="./movie_description.html"><img src="./assets/image/movie_theatre/Movies/antman.jpg"
                  class="rounded-5" alt="antman" width="170" height="230" id="box-shadow"></a>
            </div>
            <div class="col-md-2">
              <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
                height="230px" id="box-shadow">
            </div>
            <div class="col-md-2">
              <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
                height="230px" id="box-shadow">
            </div>
            <div class="col-md-2">
              <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
                height="230px" id="box-shadow">
            </div>
            <div class="col-md-2">
              <img src="./assets/image/movie_theatre/Movies/Avenger3.jpg" class="rounded-5" alt="avengers3" width="170"
                height="230px" id="box-shadow">
            </div>
            <div class="col-md-2"> <img src="./assets/image/movie_theatre/Movies/black_widow.jpg" class="rounded-5"
                alt="black_widow" width="170" height="230px" id="box-shadow"></div>
          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center">
        <div class="col-12 col-lg-6">
          <div class="row">
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
            <div class="col-md-2"><img src="assets/image/play.jpg" class="rounded-5" alt="play" width="35px"
                height="35px"></div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <section>
    <div class="fluid-container col-12 col-lg-12">
      <div class="col-12 col-lg-12">
        <div>
          <p class="h2 uppercase bold "> Actuellement en salles</p>
          <div class="h3 uppercase bold">
            <p class="d-inline uppercase "> <span style="color:#F4661B">#</span> Films Marvel</p>
            <p class="d-inline uppercase"> <span style="color:#F4661B;">#</span>Agenda des sorties</p>
            <p class="d-inline uppercase"> <span style="color:#F4661B;">#</span>Sorties ciné du mois</p>
            <p class="d-inline uppercase"> <span style="color:#F4661B;">#</span>Actus cinéma</p>
            <p class="d-inline uppercase"> <span style="color:#F4661B;">#</span>Box Office</p>
          </div>

          <!-- Terminer bloc recherche de salle, .... -->


          <div>
            <form class="row col-xl-8 mx-auto">
              <div class="col-12 col-xl-8 mb-4">
                <label class="form-label"></label>
                <input type="text" class="form-control light " placeholder="Rechercher une salle : Dax, CGR, 64100,..."
                  aria-label="name" aria-describedby="basic-addon1">
              </div>
              <div class="col-12 col-xl-8 mb-lg-4">
                <label class="form-label"></label>
                <input type="text" class="form-control" placeholder="Connectez vous pour enregistrer vos films favoris">
              </div>


            </form>
          </div>

        </div>
      </div>



      <div class="col-12 col-lg-12 mb-4">
        <div class="d-flex flex-row">
          <div>
            <p class="h3 uppercase bold">les sorties de la semaine</p>
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
              height="230" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
              height="230px" id="box-shadow">
          </div>
        </div>
      </div>


      <!-- mettre les 2 blocs sur la meme ligne -->

      <div class="col-12 col-lg-12 mb-4">

        <div class="d-flex flex-row-reverse">
          <div>
            <p class="h3 uppercase bold">toujours à l'affiche</p>
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
              height="230" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
              height="230px" id="box-shadow">
          </div>
        </div>
      </div>



      <div class="col-12 col-lg-12 mb-4">
        <div class="d-flex flex-row">
          <div>
            <p class="h3 uppercase bold">prochainnement</p>
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
              height="230" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
              height="230px" id="box-shadow">
          </div>
        </div>
      </div>
      <!-- mettre un espace entre ces 2 blocs -->

      <div class="col-12 col-lg-12 mb-4">
        <div class="d-flex flex-row-reverse">
          <div>
            <p class="h3 uppercase bold">les plus attendus par les fans</p>
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
              height="230" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
              height="230px" id="box-shadow">
          </div>
          <div class="col-md-1">
            <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
              height="230px" id="box-shadow">
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section>
    <div>
      <p class="h2 bold uppercase"> DVD & BLU-RAY</p>
      <p class="h3 uppercase bold"> LES SORTIES DU MOMENT</p>
      <div class="d-flex flex-row"">
          <div class=" col-md-1">
        <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
          height="230" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
          height="230px" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
          height="230px" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
          height="230px" id="box-shadow">
      </div>


      <p class="h3 uppercase bold">POUR LES ENFANTS</p>
      <div class="d-flex flex-row-reverse ">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
          height="230" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
          height="230px" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
          height="230px" id="box-shadow">
      </div>
      <div class="col-md-1">
        <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
          height="230px" id="box-shadow">
      </div>
    </div>
    </div>
    </div>
  </section>


  <section>
    <div>
      <p class="h2 bold uppercase"> VOD</p>
      <div class="d-flex justify-content-center">
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
            height="230" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
            height="230" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
            height="230px" id="box-shadow">
        </div>
      </div>
    </div>
    </div>
  </section>


  <section>
    <div>
      <p class="h2 bold uppercase"> STREAMING</p>
      <div class="d-flex justify-content-between">
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
            height="230" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman.jpg" class="rounded-5" alt="antman" width="170"
            height="230" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/antman2.jpg" class="rounded-5" alt="antman2" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers.jpg" class="rounded-5" alt="avengers" width="170"
            height="230px" id="box-shadow">
        </div>
        <div class="col-md-1">
          <img src="./assets/image/movie_theatre/Movies/avengers2.jpg" class="rounded-5" alt="avengers2" width="170"
            height="230px" id="box-shadow">
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- fin du corps de la page -->

  <!--Footer -->
  <footer class="bg_grey">

    <!-- Link Icons -->
    <div class="text-center py-40">
      <a href="#" target="_blank" rel="noopener noreferrer" class="d-inline"><img
          src="./assets/image/contact/YOUTUBE.png" alt="youtube" width="42px" height="42px"></a>
      <a href="#" class="d-inline"><img src="./assets/image/contact/INSTAGRAM.png" alt="instagram" width="42px"
          height="42px"></a>
      <a href="#" class="d-inline"><img src="./assets/image/contact/FACEBOOK.png" alt="facebook" width="42px"
          height="42px"></a>
      <a href="#" class="d-inline"><img src="./assets/image/contact/MARKETPLACE.png" alt="marketplace" width="42px"
          height="42px"></a>
      <a href="#" class="d-inline"><img src="./assets/image/contact/PINTEREST.png" alt="pinterest" width="42px"
          height="42px"></a>
      <a href="#" class="d-inline"><img src="./assets/image/contact/TWITTER.png" alt="twitter" width="42px"
          height="42px"></a>
    </div>

    <div class="text-center pb-40">
      <div class="text-white text-uppercase link">
        <a href="#">
          <p class="d-inline px-3">newsletter</p>
        </a>
        <a href="contact.html">
          <p class="d-inline px-3">contact</p>
        </a>
        <a href="#">
          <p class="d-inline px-3">modération</p>
        </a>
        <a href="#">
          <p class="d-inline px-3">mention légale</p>
        </a>
        <a href="#">
          <p class="d-inline px-3">c.g.u cookies</p>
        </a>
        <a href="#">
          <p class="d-inline px-3">politique de confidentialité</p>
        </a>
      </div>
    </div>
<?php include ('_partials/footer.php') ?>
</body>
</html>