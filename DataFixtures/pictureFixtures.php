<?php
include '../Config/database.php';
require_once '../vendor/autoload.php';

$article = "SELECT id FROM article";
$articleStatement = $conn->prepare($article);
$articleStatement->execute();
$articles = $articleStatement->fetchAll();

$faker = Faker\Factory::create();


// insérer dix commentaire dans la base de données
for ($i = 0; $i < 10; $i++) {
    $sql = "INSERT INTO picture (`name`,`alt`,`position`,`article_id`) 
            VALUES(:name, :alt, :position, :article_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'name' => $faker->name(),
        'alt' => $faker->name(),
        'position' =>$faker->randomDigit(),
        'article_id' => $articles[array_rand($articles)]['id']
    ]);
}