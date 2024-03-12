<?php
include '../Config/database.php';
require_once '../vendor/autoload.php';

$faker = Faker\Factory::create();

// insert ten users into the database
for ($i = 0; $i < 10; $i++ ) {
    $sql = "INSERT INTO user (`pseudo`, `email`, `password`, `birth_date`,`is_valide`,`created_at`, `role`) 
    VALUES(:pseudo, :email, :password, :birth_date, :is_valide, :created_at, :role)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'pseudo' => $faker->name(),
        'email' => $faker->email(),
        'password' => password_hash('0000', PASSWORD_DEFAULT),
        'birth_date' => $faker->date(),
        'is_valide' => true,
        'created_at' => $faker->date(),
        'role' => '["ROLE_USER"]',

    ]);
}

