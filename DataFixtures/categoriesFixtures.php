<?php

    include '../Config/Database.php';
    include '../vendor/autoload.php';

    // je vais recupéré mes utilisateurs
    $users = 'SELECT id FROM user';
    $stmt = $conn->prepare($users);
    $stmt->execute();
    $user = $stmt->fetchAll();

    $category = [
        1 => [
            'slug' => 'musique',
            'CreatedAt' => '2021-01-01 00:00:00',
            'UpdatedAt' => '2021-01-01 00:00:00',
            'slider' => '["1.jpg"]',
            'title' => 'Musique',
            'seoTitle' => 'Tous les articles sur la musique',
            'seoDescription' => 'Retrouvez tous les articles sur la musique',
        ],
        2 => [
            'slug' => 'series',
            'CreatedAt' => '2024-04-03 00:00:00',
            'UpdatedAt' => '2024-04-03 00:00:00',
            'slider' => '["2.json"]',
            'title' => 'séries',
            'seoTitle' => 'Tous les articles sur les séries',
            'seoDescription' => 'Retrouvez les articles sur les séries',
        ],
        3 => [
            'slug' => 'gaming',
            'CreatedAt' => '2024-04-03 00:00:00',
            'UpdatedAt' => '2024-04-03 00:00:00',
            'slider' => '["3.json"]',
            'title' => 'gaming',
            'seoTitle' => 'Tous les articles sur le gaming',
            'seoDescription' => 'Retrouvez les articles sur le gaming',
        ],
        4 => [
            'slug' => 'musique',
            'CreatedAt' => '2024-04-03 00:00:00',
            'UpdatedAt' => '2024-04-03 00:00:00',
            'slider' => '["2.json"]',
            'title' => 'musique',
            'seoTitle' => 'Tous les articles sur la musique',
            'seoDescription' => 'Retrouvez les articles sur la musique',
        ],
        5 => [
            'slug' => 'livres',
            'CreatedAt' => '2024-04-03 00:00:00',
            'UpdatedAt' => '2024-04-03 00:00:00',
            'slider' => '["2.json"]',
            'title' => 'livres',
            'seoTitle' => 'Tous les articles sur les livres',
            'seoDescription' => 'Retrouvez les articles sur les livres',
        ],
        6 => [
            'slug' => 'evenements',
            'CreatedAt' => '2024-04-03 00:00:00',
            'UpdatedAt' => '2024-04-03 00:00:00',
            'slider' => '["2.json"]',
            'title' => 'évenements',
            'seoTitle' => 'Tous les articles sur les évenements',
            'seoDescription' => 'Retrouvez les articles sur les évenements',
        ],
    ];

    foreach ($category as $key => $value) {
        $sql = "INSERT INTO categories (`slug`, `created_at`, `updated_at`, `slider`, `title`, `sio_title`,`meta_description`,`user_id`) VALUES (:slug, :created_at, :updated_at, :slider, :title, :sio_title, :meta_description, :user_id)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'slug' => $value['slug'],
            'created_at' => $value['CreatedAt'],
            'updated_at' => $value['UpdatedAt'],
            'slider' => $value['slider'], // attention en JSON
            'title' => $value['title'],
            'sio_title' => $value['seoTitle'],
            'meta_description' => $value['seoDescription'],
            'user_id' => $user[0]['id']
        ]);

    }