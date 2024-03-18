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
<?php include ('_partials/head.php') ?>
<body>
<?php include ('_partials/header.php') ?>
    <h1>Register</h1>
    <p><?= $message ?></p>
    <div class="my-5">
    <form action="register.php" method="post" class="row col-xl-6 mx-auto">
        <div class="col-12 mb-4">
            <label for="pseudo" class="form-label">Pseudo</label>
            <input type="text" name="pseudo" class="form-control">
        </div>
        <div class="col-12 mb-4">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" class="form-control">
        </div>
        <div class="col-12 mb-4">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="col-12 mb-4"> 
            <label for="birth_date" class="form-label">Date de naissance</label>
            <input type="date" name="birth_date" class="form-control">
        </div>
        <div class="col-12 my-5 text-center">
            <button type="submit" class="btn btn-primary" id="bouton_orange">S'inscrire</button>
        </div>

    </form>
    </div>
</body>
<?php include ('_partials/footer.php') ?>
</html>