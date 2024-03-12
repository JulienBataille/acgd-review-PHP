<header class="sticky-top bg-grey">
		<nav class="navbar navbar-expand-xl ">
		  <div class="container-fluid align-items-center ">
			<a class="navbar-brand" href="index.php">
			  <img src="./assets/image/areview-header.png" alt="LOGO" width="200" height="100%">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <form class="d-flex column-gap-2 align-items-center ms-auto order-lg-2" role="search" id="search">
				<input class="form-control thin" type="search" placeholder="Search" aria-label="Search">
				<a href="index.php"><i class="fa-solid fa-magnifying-glass" style="width: 20px;height: 100%;color: #f4661B;"></i></a>
				<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions"
				  aria-controls="offcanvasWithBothOptions">
				  <i class="fa-solid fa-user" style="width: 20px; height: 100%; color: #f4661B;"></i>
				</button>
			  </form>
			  <ul class="navbar-nav d-flex flex-fill text-center order-lg-1">
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="movies.php">cinéma</a>
				</li>
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="series.php">séries</a>
				</li>
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="video_game.php">gaming</a>
				</li>
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="music.php">musique</a>
				</li>
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="book.php">livre</a>
				</li>
				<li class="nav-item flex-fill">
				  <a class="nav-link" href="evenement.php">événements</a>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
	<!--LOGIN-->
		<div class="offcanvas offcanvas-end " data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions"
		  aria-labelledby="offcanvasWithBothOptionsLabel">
		  <div class="offcanvas-header ">
			<h5 class="offcanvas-title " id="offcanvasWithBothOptionsLabel">Se connecter</h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"> </button>
		  </div>
		  <div class="offcanvas-body">
			<div class="input-group my-1" id="Pseudo">
			  <span class="input-group-text " id="logo_pseudo">
				<i class="fa-solid fa-user" style="color: #f4661B;"></i>
			  </span>
			  <div class="col-sm ">
				<input type="text" class="form-control" placeholder="Pseudo / email" aria-label="Login"
				  aria-describedby="addon-wrapping">
			  </div>
			</div>
			<div class="input-group my-1" id="password">
			  <span class="input-group-text " id="logo_cadenas">
				<i class="fa-solid fa-lock" style="color: #f4661B;"></i>
			  </span>
			  <div class="col-sm ">
				<input type="password" class="form-control" placeholder="Mot de passe" aria-label="Login"
				  aria-describedby="addon-wrapping">
			  </div>
			</div>
			<div class="row my-1">
			  <div class="form-check ms-2 text-start">
				<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
				<label class="form-check-label" for="flexCheckDefault">
				  Se souvenir de moi
				</label>
			  </div>
			</div>
			<div class="row my-1 text-center">
			  <a href=""> Mot de passe oublié ?</a>
			</div>
			<div class="row mt-3 text-center">
			  <a href="account.php"><button class="btn" type="submit" id="bouton_orange"> Se connecter </button> </a>
			</div>
			<div class="row my-1 text-center">
			  <p>Vous n'avez pas encore de compte ? <br> Rejoignez-nous !</p>
			  <a href="login.php"><button class="btn" type="submit" id="bouton_orange"> S'inscrire </button> </a>
			</div>
		  </div>
		</div>
		<!-- banner with pseudo and profil picture -->
	</header>