<?php
include 'Config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
    <?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
<main>
        <div class="celebrity-block container-fluid color-grey text-center">
                <p class="celebrity-title bold text-start">Gérard DeuxParDeux</p>
                <p class="celebrity-subtitle bold text-start">Acteur ・ Réalisateur</p>
                <img src="assets/image/celebrities/gerard_deuxpardeux/picture1.png" class="celebrity-picture img-fluid" alt="Actor">
                <img src="assets/image/celebrities/movies/fastandfurious.png" class="movie-trailer img-fluid" alt="Trailer">
                <br>
                <img src="assets/image/celebrities/gerard_deuxpardeux/picture2.png" class="celebrity-picture img-fluid" alt="Actor">
                <img src="assets/image/celebrities/gerard_deuxpardeux/picture3.png" class="celebrity-picture img-fluid" alt="Actor">
                <img src="assets/image/celebrities/gerard_deuxpardeux/picture4.png" class="celebrity-picture img-fluid" alt="Actor">
        </div>
        <div>
            <div class="horizontal-orange-bar"></div>
            <p class="categories-title bold">Connu pour</p>
        </div>
        <div>
            <div class="little-movie-block">
                <img src="assets/image/celebrities/movies/my_cam.png" alt="Movie" class="little-movie-image">
                <p class="little-movie-title bold">Ma caméra, mon ami</p>
                <img src="assets/image/celebrities/icons/star.png" alt="Star" class="little-movie-star">
                <p class="little-movie-rate bold">6,6</p>
                <p class="little-movie-categories">Mini-série télévisée</p>
                <p class="little-movie-author">Chase Sikorsi</p>
                <p class="little-movie-date">2021 ・ 3 épisodes.</p>
            </div>
            <div class="little-movie-block">
                <img src="assets/image/celebrities/movies/drawning.png" alt="Movie" class="little-movie-image">
                <p class="little-movie-title bold">La noyade</p>
                <img src="assets/image/celebrities/icons/black-star.png" alt="Star" class="little-movie-star">
                <p class="little-movie-rate bold">0</p>
                <p class="little-movie-categories">Mini-série télévisée</p>
                <p class="little-movie-author">Avery Watkins</p>
                <p class="little-movie-date">2020 ・ 6 épisodes.</p>
            </div>
            <div class="little-movie-block">
                <img src="assets/image/celebrities/movies/paris.png" alt="Movie" class="little-movie-image">
                <p class="little-movie-title bold">Paris, ma ville</p>
                <img src="assets/image/celebrities/icons/star.png" alt="Star" class="little-movie-star">
                <p class="little-movie-rate bold">6,6</p>
                <p class="little-movie-categories">Film</p>
                <p class="little-movie-author">Chris</p>
                <p class="little-movie-date">2022</p>
            </div>
            <div class="little-movie-block">
                <img src="assets/image/celebrities/movies/pimp_my_ride.png" alt="Movie" class="little-movie-image">
                <p class="little-movie-title bold">Pimp my ride</p>
                <img src="assets/image/celebrities/icons/star.png" alt="Star" class="little-movie-star">
                <p class="little-movie-rate bold">6,6</p>
                <p class="little-movie-categories">Mini-série télévisée</p>
                <p class="little-movie-author">Raj Varma</p>
                <p class="little-movie-date">2017 ・ 1009 épisodes.</p>
            </div>
        </div>
        <div>
            <div class="vertical-orange-bar"></div>
            <p class="categories-title2 bold">Photos</p>
        </div>
        <div class="picture-block">
            <img src="assets/image/celebrities/gerard_deuxpardeux/picture1.png" class="picture-actor img-fluid" alt="Actor">
            <img src="assets/image/celebrities/gerard_deuxpardeux/picture2.png" class="picture-actor img-fluid" alt="Actor">
            <img src="assets/image/celebrities/gerard_deuxpardeux/picture3.png" class="picture-actor img-fluid" alt="Actor">
            <img src="assets/image/celebrities/gerard_deuxpardeux/picture4.png" class="picture-actor img-fluid" alt="Actor">
        </div>
        <div>
            <div class="vertical-orange-bar"></div>
            <p class="categories-title2 bold">Crédits</p>
        </div>
        <div class="movie-block">
            <p class="movie-block-separator-title bold">À venir ・ 4</p>
            <button class="movie-arrow-slider">
                <img src="assets/image/celebrities/icons/arrow-down.png" class="movie-block-arrow-down img-fluid" alt="Arrow">
            </button>
            <div class="movie-block-separator"></div>
            <p class="movie-block-separator-title bold">Précédent ・ 8</p>
            <button class="movie-arrow-slider">
                <img src="assets/image/celebrities/icons/arrow-up.png" class="movie-block-arrow-up img-fluid" alt="Arrow">
            </button>
            <div class="movie-sub-block">
                <img src="assets/image/celebrities/movies/fallout.png" class="movie-sub-block-image img-fluid" alt="Fallout">
                <p class="movie-sub-block-title bold">Fallout</p>
                <img src="assets/image/celebrities/icons/star.png" class="movie-sub-block-star img-fluid" alt="Star">
                <p class="movie-sub-block-rate">9</p>
                <p class="movie-sub-block-categories">Série</p>
                <p class="movie-sub-block-date">2022</p>
                <p class="movie-sub-block-episodes bold">0 épisode</p>
            </div>
            <div class="movie-block-separator"></div>
            <div class="movie-sub-block">
                <img src="assets/image/celebrities/movies/supersex.png" class="movie-sub-block-image img-fluid" alt="SuperSex">
                <p class="movie-sub-block-title bold">SuperSex</p>
                <img src="assets/image/celebrities/icons/star.png" class="movie-sub-block-star img-fluid" alt="Star">
                <p class="movie-sub-block-rate">6,8</p>
                <p class="movie-sub-block-categories">Série télévisée</p>
                <p class="movie-sub-block-date">2022</p>
                <p class="movie-sub-block-episodes bold">1 épisodes</p>
            </div>
            <div class="movie-block-separator"></div>
            <div class="movie-sub-block">
                <img src="assets/image/celebrities/movies/wonka.png" class="movie-sub-block-image img-fluid" alt="Wonka">
                <p class="movie-sub-block-title bold">Wonka</p>
                <img src="assets/image/celebrities/icons/star.png" class="movie-sub-block-star img-fluid" alt="Star">
                <p class="movie-sub-block-rate">9</p>
                <p class="movie-sub-block-categories">Série télévisée</p>
                <p class="movie-sub-block-date">2022</p>
                <p class="movie-sub-block-episodes bold">2 épisodes</p>
            </div>
            <div class="movie-block-separator"></div>
            <div class="movie-sub-block">
                <img src="assets/image/celebrities/movies/iii.png" class="movie-sub-block-image img-fluid" alt="III">
                <p class="movie-sub-block-title bold">III</p>
                <img src="assets/image/celebrities/icons/star.png" class="movie-sub-block-star img-fluid" alt="Star">
                <p class="movie-sub-block-rate">9</p>
                    <p class="movie-sub-block-categories">Film</p>
                <p class="movie-sub-block-date">2022</p>
            </div>
            <div class="movie-block-separator"></div>
            <div class="movie-sub-block">
                <img src="assets/image/celebrities/movies/aquaman.png" class="movie-sub-block-image img-fluid" alt="Aquaman">
                <p class="movie-sub-block-title bold">Aquaman</p>
                <img src="assets/image/celebrities/icons/star.png" class="movie-sub-block-star img-fluid" alt="Star">
                <p class="movie-sub-block-rate">9</p>
                <p class="movie-sub-block-categories">Film</p>
                <p class="movie-sub-block-date">2022</p>
            </div>
        </div>
        <div class="limit text-center py-4">
            <a href="#" class=""><img src="./assets/image/celebrities/icons/UP.svg" alt="Go up" class=""></a>
        </div>
    </main>
<?php include ('_partials/footer.php') ?>
</body>
</html>