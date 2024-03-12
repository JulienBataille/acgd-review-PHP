<?php

    include 'Config/Database.php';

    global $message;

    // verifie si le formulaire est soumis
    if(isset($_POST['pseudo']) && isset($_POST['email']) && 
    isset($_POST['password']) && isset($_POST['birth_date'])){
        // je recupere les donnees du formulaire dans des variables
        $pseudo = $_POST['pseudo'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $birth_date = $_POST['birth_date'];

        // je verifie si l'email existe deja dans la base de donnees    
        $sql = "SELECT email FROM user WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->execute(
            [
                'email' => $email
            ]
        );

        $user = $stmt->fetch();

        if($user){
            $message = "Cet email existe deja";
        } else {
            // j'insere les donnees dans la base de donnees
            $sql = "INSERT INTO user (`pseudo`,`email`,`password`,`birth_date`,`is_valide`,`created_at`,`role`)
                    VALUES (:pseudo, :email, :password, :birth_date, :is_valide, :created_at , :role)";
            $stmt = $conn->prepare($sql);
            $stmt->execute([
                'pseudo' => $pseudo,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'birth_date' => $birth_date,
                'is_valide' => true,
                'created_at' => date('Y-m-d H:i:s'),
                'role' => '["ROLE_USER"]'
            ]);

            // envoie d'un email de confirmation
            $to = $email;
            $subject = "Confirmation d'inscription";
            $message = "Bonjour $pseudo, votre inscription a bien ete prise en compte";
            $headers = "From:" . "pp]pp.com";
            $headers .= "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "X-Mailer: PHP/" . phpversion();
            $headers .= "X-Priority: 1" . "\r\n";
        
            if(mail($to, $subject, $message, $headers)){
                $message = "Un email de confirmation vous a ete envoye";
            } else {
                $message = "Erreur lors de l'envoie de l'email";
            }
        }
    } else {
        $message = "Veuillez remplir tous les champs";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <p><?= $message ?></p>
    <form action="register.php" method="post">
        <div>
            <label for="pseudo">pseudo</label>
            <input type="text" name="pseudo">
        </div>
        <div>
            <label for="email">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="password">password</label>
            <input type="password" name="password">
        </div>
        <div>
            <label for="birth_date">birth date</label>
            <input type="date" name="birth_date">
        <div>
    <button type="submit">Register</button>

    </form>
</body>
</html>