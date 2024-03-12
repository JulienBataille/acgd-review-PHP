<?php
session_start();
if(!isset($_SESSION['email'])){
	header('Location: login.php');
}
    include '../Config/database.php';

    global $message; 
    
  if (isset($_GET['method']) && $_GET['method'] == 'update') {
      if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $sql = "SELECT * FROM user WHERE id = :id";
          $toto = $conn->prepare($sql);
          $toto->bindParam(':id', $id);
          $toto->execute();
          $user = $toto->fetch(PDO::FETCH_ASSOC);

        }
    }

    if (isset($_GET['update']) && $_GET['update'] == 'update'){
        $id = $_POST['id'];
        $email = $_POST['email'];
        $is_valide = $_POST['is_valide'];
        if($is_valide == 'on') {
            $is_valide = 1;
        }
        else {
            $is_valide = 0;
        }


        $sql = "UPDATE user SET email = :email, is_valide = :is_valide
                WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            'email'=>$email,
            'is_valide'=>$is_valide,
            'id'=>$id,

        ]);
        header('Location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userT</title>
</head>
<body>
<style>
.table_component {
    overflow: auto;
    width: 100%;
}

.table_component table {
    border: 1px solid #dededf;
    height: 100%;
    width: 100%;
    table-layout: fixed;
    border-collapse: collapse;
    border-spacing: 1px;
    text-align: left;
}

.table_component caption {
    caption-side: top;
    text-align: left;
}

.table_component th {
    border: 1px solid #dededf;
    background-color: #808080;
    color: #000000;
    padding: 5px;
}

.table_component td {
    border: 1px solid #dededf;
    background-color: #ffffff;
    color: #000000;
    padding: 5px;
}
</style>
<form method="post" action="index_user.php?update=update">
<div class="table_component" role="region" tabindex="0">
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th><input type="text" name="id" value="<?= $user['id']  ?$user['id'] : " "; ?>"></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Pseudo</td>
            <td><input type="text" name="pseudo" value="<?= $user['pseudo']  ?$user['pseudo'] : " "; ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="<?= $user['email']  ?$user['email'] : " "; ?>"></td>
        </tr>
        <tr>
            <td>Date de naissance</td>
            <td><input type="text" name="birth_date" value="<?= $user['birth_date']  ?$user['birth_date'] : " "; ?>"></td>
        </tr>
        <tr>
            <td>Validé</td>
            <td><input type="checkbox" name="is_valide" checked <?= $user['is_valide'] ? 'checked' : "" ?> ></td>
        </tr>
        <tr>
            <td>Modifié</td>
            <td><input type="text" name="updated_at" value="<?= $user['updated_at']  ?$user['updated_at'] : " "; ?>"></td>
        </tr>
        <tr>
            <td>Photo</td>
            <td></td>
        </tr>
        <tr>
            <td>Bannière</td>
            <td></td>
        </tr>
    </tbody>
</table>
<button type="submit">Envoyer </button>
</div>
</form>
</body>
</html>