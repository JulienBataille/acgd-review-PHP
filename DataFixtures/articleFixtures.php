<?php

    include '../Config/Database.php';
    include '../vendor/autoload.php';

    $faker = Faker\Factory::create();

    // je vais recupéré mes utilisateurs
    $users = 'SELECT id FROM user';
    $stmt = $conn->prepare($users);
    $stmt->execute();
    $user = $stmt->fetchAll();

    // je vais recupéré mes categories
    $categories = 'SELECT id FROM categories';
    $stmt = $conn->prepare($categories);
    $stmt->execute();
    $category = $stmt->fetchAll();



    for($i = 1; $i< 30; $i++) {
        // je vais creer les articles
        /**
         * Je vais creer un JSON pour le champs distribution
         */
        $distribution = [];
        for ($i = 0; $i < rand(1,5); $i++) {
            $distribution[] = [
                'name' => $faker->name,
                'url' => $faker->slug()
            ];
        }

        /**
         * Telechargement d une image dans les assets/img/covers
         */
        $url = 'https://picsum.photos/1200/800';
        $imageName = rand(1, 1000) . '.jpg';
        $img = '../assets/image/covers/' . $imageName;
        file_put_contents($img, file_get_contents($url));


        $data = [
            'title' => $faker->sentence(),
            'categories_id' => $category[array_rand($category)]['id'], // je vais prendre un id de categorie au hasard
            'user_id' => $user[array_rand($user)]['id'], // je vais prendre un id d'utilisateur au hasard
            'slug' => $faker->slug(),
            'created_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'updated_at' => $faker->dateTimeThisYear()->format('Y-m-d H:i:s'),
            'description' => $faker->text(),
            'youtube' => 'https://www.youtube.com/watch?v=6Ejga4kJUts',
            'cover' => $imageName,
            'our_review' => $faker->text(),
            'distribution' => json_encode($distribution),
        ];

        $sql = 'INSERT INTO article (title, categories_id, user_id, slug, created_at, updated_at, description, youtube, cover, our_review, distribution) VALUES (:title, :categories_id, :user_id, :slug, :created_at, :updated_at, :description, :youtube, :cover, :our_review, :distribution)';
        $stmt = $conn->prepare($sql);
        $stmt->execute($data);

        // je met en pause le script pendant 2 secondes
        sleep(2);

        echo 'Articles created' . PHP_EOL;
    }
    