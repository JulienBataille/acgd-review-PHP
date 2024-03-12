<?php
session_start();
if(!isset($_SESSION['email'])){
	header('Location: login.php');
}
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<main>
<div>
		<div class="row" id="banner">
			<div class="col-12 col-md-12">
				<img alt="banière" class="mt-3 position-absolute marginneg " src="./assets/image/account/foret.png" style="height: 100%; width: 100%; max-height: 384px;">
				<h2 class="position-absolute pseudo titre3 py-2 ">BodoWT</h2><img alt="Avatar" class="rounded-circle position-relative tp start-0 translate-middle ms-5" height="90px" src="./assets/image/account/avatar.png" width="90px">
			</div>
		</div>
	</div>
	<!--the table with the information-->
	<div class="row mart " id="table">
		<div class="col-12 px-0">
			<table class="table table-striped-columns table-dark table-bordered mb-0">
				<tbody>
					<tr>
						<td scope="row" style="background-color:#413A3A">Pays :</td>
						<td class="text-center" style="background-color:#252323">France</td>
					</tr>
					<tr>
						<td scope="row" style="background-color:#413A3A">Membre depuis :</td>
						<td class="text-center" style="background-color:#252323">1 Jour</td>
					</tr>
					<tr>
						<td scope="row" style="background-color:#413A3A">Avis posté(s) :</td>
						<td class="text-center" style="background-color:#252323">6 Avis</td>
					</tr>
					<tr>
						<td scope="row" style="background-color:#413A3A">Dernière connexion :</td>
						<td class="text-center" style="background-color:#252323">Dernière connexion il y a une semaine</td>
					</tr>
					<tr>
						<td scope="row" style="background-color:#413A3A">Genre :</td>
						<td class="text-center" style="background-color:#252323">Homme</td>
					</tr>
					<tr>
						<td scope="row" style="background-color:#413A3A">Age :</td>
						<td class="text-center" style="background-color:#252323">23 Ans</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- Recently viewed -->
	<div>
		<h2 class="text-uppercase gras text-center py-3 titre mb-5 ">récemment vus</h2>
	</div>
	<!-- Recently viewed articles -->
	<div class="container-fluid">
		<div class="row">
			<!-- The first big article-->
			<div class="col-md-3 d-flex align-items-center justify-content-center">
				<div class="image-container">
					<section>
						<article>
						 <a href="" class="lienb"><img src="./assets/image/account/exorciste.png" alt="exorsiste" class="img-fluid">
				  <div class="centered-text">
					<p class="titre3">L'exorsiste</p></a>
				  </div>
				</article>
				</section>
				</div>
			  </div>
			<div class="col-12 col-md-9 my-auto">
				<div class="row">
					<div class="col-4 col-lg-auto">
						<!-- 2 first articles -->
						<section>
							<article style="height: auto; width: auto;">
							<a href="movie_description.html"><img alt="island" class="img-fluid" src="./assets/image/account/island.png" style="max-height: 127px; height: auto; width: 192px;"></a>
						</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate ">Shutter Island</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi, sapiente vel incidunt optio iusto dolore ipsa repellendus deleniti nulla eos qui excepturi necessitatibus culpa itaque numquam iste rerum nobis!</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href="movie_description.html"><img alt="interstellar" class="img-fluid" src="./assets/image/account/interstellar.png" style="max-height: 127px; height: auto; width: 192px;"></a>							
					</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate">Interstellar</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Maxime ipsum iure totam obcaecati dolores omnis illo, magnam nobis amet ipsa facilis aspernatur earum sit officiis eligendi, expedita iusto nulla? Commodi?</p><!-- 2 articles suivant -->
					</article>
				</section>
					</div>
        </div>
		<!-- 2 second articles -->
          <div class="row">
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href="movie_description.html"><img alt="Leonardo di caprio" class="img-fluid" src="./assets/image/account/leo.png" style="max-height: 127px; height: auto; width: 192px;"></a>
					</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate">Léonardo Di Caprio</h2>
						<p class="overflow-hidden" style="height: 60px;  max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis qui soluta et suscipit. Ducimus, illum eaque corrupti vel ea consectetur? Quia molestias et corrupti aliquam in hic nemo, dicta ad!</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href="movie_description.html"><img alt="Oppenheimer" class="img-fluid" src="./assets/image/account/oppen.png" style="max-height: 127px; height: auto; width: 192px;"></a>
					</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate">Oppenheimer</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut vel quia, ab, nihil commodi deleniti, ipsa quasi cum maiores provident incidunt iusto consectetur eaque totam quae. Exercitationem quae eius laudantium.</p>
					</article>
				</section>
					</div>
        </div>
		<!-- 2 last articles -->
        <div class="row">
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Barbie" class="img-fluid" src="./assets/image/account/barbie.png" style="max-height: 127px; height: auto;width: 192px;"></a>
					</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate">Barbie</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam obcaecati molestias ut. Nihil itaque dicta, neque molestias aspernatur cumque unde. Quia voluptatem tempora velit. Voluptatibus modi aut consequuntur earum eos.</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Spiderman" class="img-fluid" src="./assets/image/account/spiderman.png" style="max-height: 127px; height: auto; width: 192px;"></a>
					</div>
					<div class="col-7 col-lg-3">
						<h2 class="titre2 text-truncate">Spiderman</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptatibus natus quisquam? Perferendis voluptas saepe voluptatum minus eius! Maxime ad cupiditate unde accusantium? Saepe voluptas dolores dolorum reiciendis! Deserunt, molestias?</p>
					</article>
				</section>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- see more -->
	<div class="row">
		<div class="col-12 justify-content-center">
	 <a href="" class="text-center"><p class="text-center">Voir plus</a></p>
	</div>
	</div>
	<!-- Favorite -->
	<div>
		<h2 class="text-uppercase gras text-center py-3 titre mx">favoris</h2>
	</div>
	<!-- 3 first articles -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 my-3 mx-2">
				<div class="row justify-content-center">
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Interstellar" class="img-fluid " src="./assets/image/account/interstellar.png"></a>
					</div>
					<div class="col-7 col-lg-2 me-lg-5">
						<h2 class="titre2 text-truncate">Interstellar</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nisi, sapiente vel incidunt optio iusto dolore ipsa repellendus deleniti nulla eos qui excepturi necessitatibus culpa itaque numquam iste rerum nobis!</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="island" class="img-fluid " src="./assets/image/account/island.png"></a>
					</div>
					<div class="col-7 col-lg-2 me-lg-5">
						<h2 class="titre2 text-truncate">Shutter Island</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p><!-- 3 articles suivant -->
					</article>
				</section>
				</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Oppenheimer" class="img-fluid " src="./assets/image/account/oppen.png"></a>
					</div>
					<div class="col-7 col-lg-2">
						<h2 class="titre2 text-truncate">Oppenheimer</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
        </div>
		<!-- 3 next articles -->
          <div class="row justify-content-center">
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Superman" class="img-fluid " src="./assets/image/account/superman.png"></a>
        				</div>
					<div class="col-7 col-lg-2 me-lg-5">
						<h2 class="titre2 text-truncate">Superman</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Poupée" class="img-fluid " src="./assets/image/account/poup%C3%A9e.png"></a>
					</div>
					<div class="col-7 col-lg-2 me-lg-5">
						<h2 class="titre2 text-truncate">Poupée de Chiffon</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Minecraft" class="img-fluid " src="./assets/image/account/minecraft.png"></a>
					</div>
					<div class="col-7 col-lg-2">
						<h2 class="titre2 text-truncate">Minecraft</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
        </div>
		<!-- 3 next articles -->
          <div class="row justify-content-center">
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Margot" class="img-fluid " src="./assets/image/account/margot.png"></a>
					</div>
					<div class="col-7 col-lg-2 me-lg-5">
						<h2 class="titre2 text-truncate">Margot Robbie</h2>
						<p class="overflow-hidden" style="height: 60px;  max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-lg-auto">
						<section>
							<article>
								<a href=""><img alt="Roméo" class="img-fluid " src="./assets/image/account/romeo.png"></a>
					</div>
					<div class="col-7 col-lg-2 me-md-5">
						<h2 class="titre2 text-truncate ">Roméo Elvis</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
					<div class="col-4 col-md-auto">
						<section>
							<article>
								<a href=""><img alt="Jul" class="img-fluid " src="./assets/image/account/jul.png"></a>
					</div>
					<div class="col-7 col-lg-2">
						<h2 class="titre2 text-truncate">Jul</h2>
						<p class="overflow-hidden" style="height: 60px; max-width: 300px; width: auto;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur et ratione</p>
					</article>
				</section>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 6 inline articles -->
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-12 col-lg-2">
				<!-- Article 1 -->
				<section>
					<article>
						<h3 class="text-center titre2">Cetro</h3>
						<a href=""><img alt="Cetro" class="" src="./assets/image/account/cetro.png"></a>
					</article>
				</section>
			</div>
			<!-- Article 2 -->
			<div class="col-12 col-md-2">
				<section>
					<article>
						<h3 class="text-center titre2">Batman</h3><a href=""><img alt="Batman" class="" src="./assets/image/account/batman.png"></a>
					</article>
				</section>
			</div>
			<!-- Article 3 -->
			<div class="col-12 col-lg-2">
				<section>
					<article>
						<h3 class="text-center titre2">Hitman</h3><a href=""><img alt="Hitman" class="" src="./assets/image/account/hitman.png"></a>
					</article>
				</section>
			</div>
			<!-- Article 4 -->
			<div class="col-12 col-md-2">
				<section>
					<article>
						<h3 class="text-center titre2">News</h3><a href=""><img alt="News" class="" src="./assets/image/account/news.png"></a>
					</article>
				</section>
			</div>
			<!-- Article 5 -->
			<div class="col-12 col-lg-2">
				<section>
					<article>
						<h3 class="text-center titre2">The Shinning</h3><a href=""><img alt="Shining" class="" src="./assets/image/account/shining.png"></a>
					</article>
				</section>
			</div>
			<!-- Article 6 -->
			<div class="col-12 col-md-2">
				<section>
					<article>
						<h3 class="text-center titre2">The Thing</h3><a href=""><img alt="The Thing" class=" " src="./assets/image/account/thing.png"></a>
					</article>
				</section>
			</div>
		</div>
	</div>
	<!-- See more -->
	<div class="row">
		<div class="col-12 justify-content-center">
	 <a href="" class="text-center"><p class="text-center">Voir plus</a></p>
	</div>
	</div>
	<!-- Categories -->
		<h2 class="text-uppercase gras text-center py-3 titre ">centres d'interêts</h2>
	</div>
	<!-- Categorie 1 -->
	<div class="container-fluid">
		<div class="row mx-lg-auto" style="max-width: 1510px; max-height: 1310px;">
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
			 		<a href="" class="lienb"><img src="./assets/image/account/aventure.png" alt="aventure" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Gaming - Aventure</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		  <!-- Categorie 2 -->
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
					<a href="" class="lienb"><img src="./assets/image/account/horreur.png" alt="horreur" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Film - Horreur</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		  <!-- Categorie 3 -->
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
					<a href="" class="lienb"><img src="./assets/image/account/shutter.png" alt="Thriller" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Livre - Thriller</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- Categorie 4 -->
	  <div class="container-fluid">
		<div class="row mx-lg-auto" style="max-width: 1510px; max-height: 1310px;">
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
					<a href="" class="lienb"><img src="./assets/image/account/sf.png" alt="Sience-fiction" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Film - Sience Fiction</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		  <!-- Categorie 5 -->
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
					<a href="" class="lienb"><img src="./assets/image/account/survie.png" alt="Survie" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Gaming - Survie</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		  <!-- Categorie 6 -->
		  <div class="col-md-4 d-flex align-items-center justify-content-center">
			<div class="image-container">
				<section>
					<article>
						<a href="" class="lienb"><img src="./assets/image/account/rap.png" alt="Musique" class="img-fluid">
			  <div class="centered-text">
				<p class="titre3">Musique - Rap</p></a>
			  </div>
			</article>
			</section>
			</div>
		  </div>
		</div>
	  </div>
	  <!-- See more -->
	  <div class="row">
		<div class="col-12 justify-content-center">
	 <a href="" class="text-center"><p class="text-center">Voir plus</a></p>
	</div>
	</div>
	<!-- Title for review -->
	<div>
		<h2 class="text-uppercase gras text-center py-3 titre">derniers messages</h2>
	</div>
	<!-- Review 1 -->
	<div class="row justify-content-center">
		<div class="col-11 col-md-3 my-3 me-md-5">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">1</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
		<!-- Review 2 -->
		<div class="col-11 col-md-3 my-3 me-md-5">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">5</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
		<!-- Review 3 -->
		<div class="col-11 col-md-3 my-3">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">4</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
	</div>
	<!-- Review 4 -->
	<div class="row justify-content-center">
		<div class="col-11 col-md-3  my-3 me-md-5">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">1</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
		<!-- Review 5 -->
		<div class="col-11 col-md-3 my-3 me-md-5">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">5</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
		<!-- Review 6 -->
		<div class="col-11 col-md-3 my-3">
			<div class="card">
				<div class="card-body">
					<img alt="Avatar" class="rounded-circle" src="./assets/image/account/avatar.png"> <span class="badge bg-primary mare">4</span>
					<h5 class="card-title">BodoWT</h5>
					<p class="text-center">Message de la boîte</p>
				</div>
			</div>
		</div>
	</div>
	<!-- See More -->
	<div class="row">
		<div class="col-12 justify-content-center">
	 <a href="" class="text-center"><p class="text-center">Voir plus</p></a>
	</div>
	</div>
	<!-- Account management title-->
	<div>
		<h2 class="text-uppercase gras text-center py-3 titre">gestion compte</h2>
	</div>
	<!-- Form for account management-->
	<div>
		<div class="pt-4 px-14">
			<p class="ps-1">Votre Pseudo : BodoWT</p>
			<div class="input-group mb-3">
				<input aria-describedby="form-control light" aria-label="name" class="form-control light" placeholder="Saisir votre nouveau Pseudo" type="text">
			</div>
		</div>
		<div class="pt-3 px-14">
			<p class="ps-1">Votre Prénom : Victorien</p>
			<div class="input-group">
				<input aria-describedby="form-control light" aria-label="last name" class="form-control light" placeholder="Saisir votre nouveau prénom" type="text">
			</div>
		</div>
		<div class="pt-3 px-14">
			<p class="ps-1">Votre Email : victorien.lague@gmail.com</p>
			<div class="input-group">
				<input aria-describedby="form-control light" aria-label="Email" class="form-control light" placeholder="Saisir votre nouveau Email" type="email">
			</div>
		</div>
		<div class="pt-3 px-14">
			<p class="ps-1">Mot de passe : ***********</p>
			<div class="input-group">
				<input aria-describedby="form-control light" aria-label="Phone" class="form-control light" placeholder="Saisir votre nouveau mot de passe" type="password">
			</div>
			<p class="thin">Votre mot de passe doit contenir : 8 à 72 caractères<br>
			1 chiffre<br>
			1 caractère spécial<br>
			1 majuscule</p>
		</div>
		<div class="pt-3 px-14">
			<p class="ps-1">Pour confirmer entrer votre mot de passe :</p>
			<div class="input-group">
				<input aria-describedby="form-control light" aria-label="Phone" class="form-control light" placeholder="Saisir mot de passe" type="password">
			</div>
		</div>
		<!-- Confirm -->
		<div class="text-center py-5">
			<a href=""><button class="btn" id="confirmer" type="submit">Confirmer</button></a>
		</div>
    </div>
	<!-- Up Page -->
	<div class="limit text-center pb-5">
        <a href="#" class=""><img src="./assets/image/series/UP.svg" alt="Go up" class=""></a>
    </div>
</main>
<?php include ('_partials/footer.php') ?>
</body>
</html>