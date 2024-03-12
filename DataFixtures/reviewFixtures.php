<?php
include '../Config/database.php';
require_once '../vendor/autoload.php';

$faker = Faker\Factory::create();

$user = "SELECT id FROM user";
$usersStatement = $conn->prepare($user);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

$articles = "SELECT id FROM article";
$articlesStatement = $conn->prepare($articles);
$articlesStatement->execute();
$article = $articlesStatement->fetchAll();


for ($i = 0; $i < 10; $i++ ) {
    $sql = "INSERT INTO review (`note`,`description`,`created_at`, `update_at`, `article_id`, `user_id`) 
    VALUES(:note, :description, :created_at, :update_at, :article_id, :user_id)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'note' => $faker->randomDigit(),
        'description' => $faker->paragraph(),
        'created_at' => $faker->date(),
        'update_at' => $faker->date(),
        'article_id' => $article[array_rand($article)]['id'],
        'user_id' => $users[array_rand($users)]['id'],
    ]);
}