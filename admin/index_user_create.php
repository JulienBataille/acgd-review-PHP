<?php
session_start();
if(!isset($_SESSION['email'])){
	header('Location: login.php');
}
include '../Config/database.php'; 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $avatar = $_FILES['avatar'];
    $avatar_name = $avatar['name'];
    $avatar_tmp_name = $avatar['tmp_name'];
    $avatar_size = $avatar['size'];
    $avatar_error = $avatar['error'];

    $avatar_extension = explode('.', $avatar_name);
    $avatar_extension = strtolower(end($avatar_extension));

    $allowed_extension = ['jpg', 'png', 'jpeg'];

    if(in_array($avatar_extension, $allowed_extension)){
        if($avatar_error === 0){
            if($avatar_size < 1000000){
                $avatar_new_name = uniqid('',true).'.'.$avatar_extension;
                $avatar_destination = '../assets/image/'.$avatar_new_name;
                move_uploaded_file($avatar_tmp_name, $avatar_destination);
            }
        }
    }

    $data = [
        'pseudo'=> $_POST['pseudo'],
        'email'=> $_POST['email'],
        'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT),
        'birth_date'=> $_POST['birth_date'],
        'gender'=> $_POST['gender'],
        'is_valide'=> isset($_POST['is_valide']) ? 1 : 0,
        'picture' => $avatar_new_name,
        'created_at' => date('Y-m-d H:i:s')
    ];

    $sql="INSERT INTO user (pseudo, email, password, birth_date,gender, is_valide, picture, created_at)
            VALUES (:pseudo, :email, :password, :birth_date,:gender, :is_valide, :picture, :created_at)";
    

    // $stmt = $req = $res
    $req = $conn->prepare($sql);
    $req->execute($data);

    $form = "toto@toto.toto";
    $subject = "votre compte a été créé";
    $message = "Votre compte a été créé avec succès merci de changer votre mot de passe";
    $header = "DE :".$form;

    if(mail($_POST['email'], $subject, $message, $header)){
        header('Location: index.php');
    }


}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="pseudo" placeholder="Pseudo"> <br>
        <input type="email" name="email" placeholder="Email"> <br>
        <input type="password" name="password" placeholder="Mot de passe"> <br>
        <input type="date" name="birth_date"> <br>
        <select name="gender">
            <option value="monsieur">Monsieur</option>
            <option value="madame">Madame</option>
        </select> <br>
        <input type="checkbox" name="is_valide"> <br>
        <input type="file" name="avatar"> <br>

        <button type="submit">Créer</button>
    </form>


</body>
</html>