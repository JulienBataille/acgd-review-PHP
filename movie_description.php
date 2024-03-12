<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<main class="px-80 py-40">

		<!-- Movie Title & quick description -->
		<section id="titre_film" class="px-48">
			<h1 class="gras text_blue">The Thing</h1>
			<p class="bold"> 1h49 - Horreur, Mystère, Science-Fiction </p>
		</section>

		<!-- Movie informations navigation tabs -->
		<ul class="nav nav-tabs nav-justified link_dark_grey">
			<li class="nav-item">
				<a id="tabHome"
					class="nav-link active" 
					onclick="return showTab('tabHome');" 
					href="#titre_film">Résumé</a>
			</li>
			<li class="nav-item">
				<a id="tabCasting"
					class="nav-link" 
					onclick="return showTab('tabCasting');" 
					href="#titre_film">Casting</a>
			</li>
			<li class="nav-item">
				<a id="tabTrailer"
					class="nav-link" 
					onclick="return showTab('tabTrailer');" 
					href="#titre_film">Bandes-Annonces</a>
			</li>
			<li class="nav-item">
				<a id="tabViewers"
					class="nav-link" 
					onclick="return showTab('tabViewers');" 
					href="#titre_film">Spectateurs</a>
			</li>
			<li class="nav-item">
				<a id="tabPress"
					class="nav-link" 
					onclick="return showTab('tabPress');" 
					href="#titre_film">Presse</a>
			</li>
			<li class="nav-item">
				<a id="tabDistrib"
					class="nav-link" 
					onclick="return showTab('tabDistrib');" 
					href="#titre_film">Dstribution</a>
			</li>
		</ul>

		<!-- The home frame chunk -->
		<div id="frameHome" class="main_frame" style="display: block;">

			<!-- Image & Trailer chunk -->
			<section id="image_BA" class="px-48 py-48">
				<div>
					<img src="assets/image/movie_description/theThing445x700.png" width="100%">
				</div>
				<div class="container">
					<!-- <img src="https://placehold.co/1154x700" width="100%" class="pl-48"> -->
					<iframe width="100%" height="100%"
						allowfullscreen
						src="https://www.youtube.com/embed/5ftmr17M-a4">
					</iframe>
				</div>
			</section>

			<!-- Infos chunk -->
			<div class="px-48">
				<hr/>
				<div class="px-232 py-48">

					<!-- Note & Star chunk -->
					<section id="note">
						<div id="star">
							<a class="bold" href="#notreavis">
								<i class="fa-solid fa-star"></i>
								<h1 class="bold text_blue">5 / 5</h1>
							</a>
						</div>
					</section>
					<hr/>

					<section id="synopsis">
						<h4 class="bold text_blue">Synopsis :</h4>
						<p>
							Une équipe de chercheurs en Antarctique est chassée par 
							une étrange créature capable d'imiter ses victimes. 
							Mais qui peut bien être "la chose" ?
						</p>
					</section>
					<hr/>

					<section id="notreavis">
						<h4 class="bold text_blue">Notre Avis :</h4>
						<p>
							Un huis clos dans une base scientifique perdue au milieu 
							de l'antarctique, John Carpenter nous montre une fois de plus, 
							dans ce slasher unique en son genre, qu'il est le maître 
							incontesté de l'horreur. Des effets spéciaux qui n'ont pas 
							viellit, un minimalisme dont le maître nous a habitué, 
							des acteurs époustouflants et un suspence insoutenable vous 
							attendront dans "The Thing", le chef-d'œuvre de John Carpenter.
						</p>
					</section>
					<hr/>

					<section id="infosup">
						<!-- The short infos & casting table -->
						<h4 class="bold text_blue">Informations supplémentaires :</h4>
						<table class="table table-sm table-striped table-hover">
							<thread>
								<tr>
									<th scope="row">Année</th>
									<th>1982</th>
								</tr>
							</thread>
							<thread>
								<tr>
									<th scope="row">Réalisation</th>
									<th>John Carpenter</th>
								</tr>
							</thread>
							<thread>
								<tr>
									<th scope="row">Scénario</th>
									<th>Bill Lancaster, John W. Campbell Jr.</th>
								</tr>
							</thread>
							<thread>
								<tr>
									<th scope="row">Acteurs</th>
									<th>
										Kurt Russel, Keith David, Wilford Brimley, Richard Masur, 
										T.K. Carter, David Clennon, Richard Dysart, Charles Hallahan, 
										Peter Maloney, Donald Moffat, Joel Polis, Thomas G. Waites, 
										Norbert Weisser, Larry Franco, Nate Irwin, William Zeman, 
										Adrienne Barbeau, John Carpenter
									</th>
								</tr>
							</thread>
							<thread>
								<tr>
									<th scope="row">Musique</th>
									<th>Ennio Moriconne</th>
								</tr>
							</thread>
							<thread>
								<tr>
									<th scope="row">Production</th>
									<th>
										Stuart Cohen, David Foster, Larry Franco, 
										Wilbur Stark, Lawrence Turman
									</th>
								</tr>
							</thread>
						</table>
					</section>
				</div>
				<hr/>

				<!-- The Comments chunk -->
				<section id="commentaires" class="pb-40">
					<h4 class="bold text_blue">Commentaires :</h4>
					<form>
						<!--<input type="text" 
							id="enterComment" 
							name="enterComment" 
							placeholder="Entrez un commentaire ..."
							spellcheck="true"
							class="comment_frame"/>-->
							<textarea 
								id="enterComment" 
								name="enterComment"
								placeholder="Entrez un commentaire ..."
								class="input comment_frame"></textarea>
					</form>
					<hr/>
					<!-- Comment -->
					<div id="comment" class="comment_frame gap-4 pt-40">
						<div id="comment_profile_field">
							<img src="https://placehold.co/45x45/000000/FFFFFF" alt="profile picture" id="profile_picture">
							<p> H.P. Lovecraft </p>
						</div>
						<div class="vl"></div>
						<div class="text_wrap">
							Super !
						</div>
					</div>
					<hr/>
					<div id="comment" class="comment_frame gap-4 pt-40">
						<div id="comment_profile_field">
							<img src="https://placehold.co/45x45/000000/FFFFFF" alt="profile picture" id="profile_picture">
							<p> Howard Hawks </p>
						</div>
						<div class="vl"></div>
						<div class="text_wrap">
							rgjeogj eoithj rohijrohtijroihtjroihjt ortjhoir jtohijrohtij orijht roihjt rtijh roithj roi tjhrotihj roithjr oitjh ijh rotihj rotihjrotihjrt iohjrthioj rot ihjrthoijr oihjt oijh rojtih rotihj ronhrtinhro rgjeogj eoithj rohijrohtijroihtjroihjt ortjhoir jtohijrohtij orijht roihjt rtijh roithj roi tjhrotihj roithjr oitjh ijh rotihj rotihjrotihjrt iohjrthioj rot ihjrthoijr oihjt oijh rojtih rotihj ronhrtinhro rgjeogj eoithj rohijrohtijroihtjroihjt ortjhoir jtohijrohtij orijht roihjt rtijh roithj roi tjhrotihj roithjr oitjh ijh rotihj rotihjrotihjrt iohjrthioj rot ihjrthoijr oihjt oijh rojtih rotihj ronhrtinhro rgjeogj eoithj rohijrohtijroihtjroihjt ortjhoir jtohijrohtij orijht roihjt rtijh roithj roi tjhrotihj roithjr oitjh ijh rotihj rotihjrotihjrt iohjrthioj rot ihjrthoijr oihjt oijh rojtih rotihj ronhrtinhro rgjeogj eoithj rohijrohtijroihtjroihjt ortjhoir jtohijrohtij orijht roihjt rtijh roithj roi tjhrotihj roithjr oitjh ijh rotihj rotihjrotihjrt iohjrthioj rot ihjrthoijr oihjt oijh rojtih rotihj ronhrtinhro 
						</div>
					</div>

				</section>

			</div>
		</div>

		<!-- The casting frame chunk -->
		<div id="frameCasting" class="main_frame py-40 px-48" style="display: none;">
			<h2 class="bold text_blue">Casting</h2>
			<hr/>
			<table class="table table-sm table-striped table-hover">
				<thread>
					<tr><th scope="row" class="gras"><a>Réalisation</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John Carpenter</a></th>
						<th class="thin">Réalisateur</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Scénario</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Bill Lancaster</a></th>
						<th class="thin">Scénario</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John W. Campbell Jr.</a></th>
						<th class="thin">Histoire originale : "Who Goes There ?"</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Acteurs crédités</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Kurt Russel</a></th>
						<th class="thin">MacReady</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Wilfrid Brimley</a></th>
						<th class="thin">Dr. Blair</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">T.K. Carter</a></th>
						<th class="thin">Nauls</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">David Clennon</a></th>
						<th class="thin">Palmer</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Keith David</a></th>
						<th class="thin">Childs</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Richard Dysart</a></th>
						<th class="thin">Dr. Copper</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Charles Hallahan</a></th>
						<th class="thin">Vance Norris</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">George Bennings</a></th>
						<th class="thin">Peter Maloney</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Richard Masur</a></th>
						<th class="thin">Clark</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Donald Moffat</a></th>
						<th class="thin">Garry</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Joel Polis</a></th>
						<th class="thin">Fuchs</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Thomas G. Waites</a></th>
						<th class="thin">Peter Windows</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Norbert Weisser</a></th>
						<th class="thin">Norvégien</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Larry Franco</a></th>
						<th class="thin">Passager norvégien armé</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Nate Irwin</a></th>
						<th class="thin">Pilote d'hélicoptère</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">William Zeman</a></th>
						<th class="thin">Pilote</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Acteurs(rices) non-crédités(ées)</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Adrienne Barbeau</a></th>
						<th class="thin">Voix ordinateur, non-créditée</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John Carpenter</a></th>
						<th class="thin">Enregistrement vidéo norvégien, non-crédité</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Jed</a></th>
						<th class="thin">La chose en chien, non-crédité</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Bill Lancaster</a></th>
						<th class="thin">Enregistrement vidéo norvégien, non-crédité</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Dick Warlock</a></th>
						<th class="thin">Enregistrement vidéo norvégien, non-crédité</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Production</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Stuart Cohen</a></th>
						<th class="thin">Co-producteur</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">David Foster</a></th>
						<th class="thin">Producteur</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Larry Franco</a></th>
						<th class="thin">Producteur associé</th>
					</tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Wilbur Stark</a></th>
						<th class="thin">Producteur associé</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Musique</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Ennio Morricone</a></th></tr>
					<tr><th scope="row" class="gras"><a>Photographie</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Dean Cundey</a></th>
						<th class="thin">Directeur photographie</th>
					</tr>
					<tr><th scope="row" class="gras"><a>Montage</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Todd C. Ramsay</a></th></tr>
					<tr><th scope="row" class="gras"><a>Casting</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Anita Dann</a></th></tr>
					<tr><th scope="row" class="gras"><a>Production design</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John J. Lloyd</a></th></tr>
					<tr><th scope="row" class="gras"><a>Direction Artistique</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Henry Larrecq</a></th></tr>
					<tr><th scope="row" class="gras"><a>Décoration</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John M. Dwyer</a></th></tr>
					<tr><th scope="row" class="gras"><a>Maquillage et effets spéciaux</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Lance Anderson</a></th></tr>
					<tr>
						<th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Rob Bottin</a></th>
						<th class="thin">Créateur et designer des effets spéciaux</th>
					</tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Dale Brady</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Rob Burman</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">David Robert Celliti</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Don Chandler</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Ken Chase</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Robert Cole</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Jan Cook</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">James Cummins</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Richard Davison</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Ken Diaz</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Gunnar Ferdinandsen</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Frank Foster</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Danny Gill</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Archie L. Gillet</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Tim Gillet</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">John Goodwin</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Erik Jensen</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">James Kagel</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Jeff Kennemore</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Phyllis Newman</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Derek O'Reilly</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Art Pimentel</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Margaret Prentice</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Vincent Prentice</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">William Snyder</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Michiko Tagawa</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Josephine Turner</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Brian Wade</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Vivienne Walker</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Willie Whitten</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Robert K. Worthington</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Lynn F. Reynolds</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Bill Sturgeon</a></th></tr>
					<tr><th scope="row" class="bold"><a href="celebrity.html" class="text_blue">Stan Winston</a></th></tr>

				</thread>
			</table>
		</div>

		<!-- The trailer frame chunk -->
		<div id="frameTrailer" class="main_frame py-40 px-48" style="display: none;">
			<h2 class="bold text_blue">Bandes-Annonces</h2>
			<div class="container" >
				<iframe width="100%" height="700px"
					allowfullscreen
					src="https://www.youtube.com/embed/5ftmr17M-a4">
				</iframe>
			</div>
		</div>

		<!-- The viewers frame chunk -->
		<div id="frameViewers" class="main_frame py-40 px-48" style="display: none;">
			<h2 class="bold text_blue">L'avis des spectateurs</h2>
		</div>

		<!-- The press frame chunk -->
		<div id="framePress" class="main_frame py-40 px-48" style="display: none;">
			<h2 class="bold text_blue">L'avis de la presse</h2>

		</div>

		<!-- The distribution frame chunk -->
		<div id="frameDistrib" class="main_frame py-40 px-48" style="display: none;">
			<h2 class="bold text_blue">Streaming</h2>
			
			<img class="round-stream-image" src="https://fr.web.img4.acsta.net/commons/v9/common/svod_providers/square-paramountplus.svg" alt="Paramount+ logo" width="60" height="60">
		</div>
	</main>
<?php include ('_partials/footer.php') ?>
</body>
</html>