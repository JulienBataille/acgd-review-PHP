<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<div class="container-fluid">
      <div class="row col-md-12">
        <div>
          <div class="carousel1">
            <ul class="slides">
              <input type="radio" name="radio-buttons" id="img-1" checked />
              <li class="slide-container">
                <div class="slide-image">
                  <img src="./assets/image/events/artifice.jpg">
                </div>
                <div class="carousel-controls">
                  <label for="img-3" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-2" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>
              <input type="radio" name="radio-buttons" id="img-2" />
              <li class="slide-container">
                <div class="slide-image">
                  <img src="./assets/image/events/concert01.jpg">
                </div>
                <div class="carousel-controls">
                  <label for="img-1" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-3" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>
              <input type="radio" name="radio-buttons" id="img-3" />
              <li class="slide-container">
                <div class="slide-image">
                  <img src="./assets/image/events/comiccon01.jpeg">
                </div>
                <div class="carousel-controls">
                  <label for="img-2" class="prev-slide">
                    <span>&lsaquo;</span>
                  </label>
                  <label for="img-1" class="next-slide">
                    <span>&rsaquo;</span>
                  </label>
                </div>
              </li>
              <div class="carousel-dots">
                <label for="img-1" class="carousel-dot" id="img-dot-1"></label>
                <label for="img-2" class="carousel-dot" id="img-dot-2"></label>
                <label for="img-3" class="carousel-dot" id="img-dot-3"></label>
              </div>
            </ul>
          </div>
        </div>
        <!--fin de carousel-->
      </div>
    </div>
    <!--text h2-h3-->
    <div class="row text-center mt-3">
      <div class="col-md-12">
      <h2 class="fw-bold">événements</h2>
      </div>
    </div>
    <div class="text-center mt-3">
      <div class="col-md-12">
      <h3 class="fw-bolder">actualités</h2>
      </div>
    </div>
    <!--actu-->
    <div class="row ms-4" widht="100%">
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert02.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/presentationbook01.jpeg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Dates</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/spectacle01.jpeg" class="card-img-top" alt="..." height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div> 
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>                   
    </div>   
    <div class=" text-center mt-3">
      <div class="col-md-12">
      <h3 class="fw-bolder">spectacles</h2>
      </div>
    </div>
    <!--actu-->
    <div class=" row ms-4" widht="100%">
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert02.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/presentationbook01.jpeg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Dates</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/spectacle01.jpeg" class="card-img-top" alt="..." height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div> 
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>                   
    </div> 
    <div class="text-center mt-3">
      <div class="col-md-12">
      <h3 class="fw-bolder">dédicases</h2>
      </div>
    </div>
    <!--actu-->
    <div class=" row ms-4" widht="100%">
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert02.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/presentationbook01.jpeg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Dates</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/spectacle01.jpeg" class="card-img-top" alt="..." height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div> 
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>                   
    </div> 
    <div class="text-center mt-3">
      <div class="col-md-12">
      <h3 class="fw-bolder">concerts/festivales</h2>
      </div>
    </div>
    <!--actu-->
    <div class=" row ms-4" widht="100%">
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert02.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/presentationbook01.jpeg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Dates</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/spectacle01.jpeg" class="card-img-top" alt="..." height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div> 
      <div class="card col-12 ms-2 col-md-3 mb-2 mx-auto" style="width: 18rem;">
        <img src="./assets/image/events/concert01.jpg" class="card-img-top" alt="..."  height="144">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
        <div class="dropdown mx-auto p-2 mb-5">
          <button class="btn btn-secondary dropdown-toggle" id="bouton_orange" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            +d'info
          </button>
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Date</button></li>
            <li><button class="dropdown-item" type="button">Lieu</button></li>
            <li><button class="dropdown-item" type="button">Information supplementaire</button></li>
          </ul>
        </div>
      </div>                   
    </div>  
    <div class="limit text-center py-4">
      <a href="#" class=""><img src="./assets/image/series/UP.svg" alt="Go up" class=""></a>
  </div>
<?php include ('_partials/footer.php') ?>
</body>
</html>