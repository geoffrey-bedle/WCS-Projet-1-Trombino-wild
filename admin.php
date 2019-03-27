<?php
require "includes/_connect.php";
$pdo = new PDO(DSN, USER, PASS);

$post=[];
if (!empty($_POST)){


   foreach ($_POST as $key => $data){
       $post[$key]=htmlspecialchars($data);

   }
   $insert = $pdo->prepare("INSERT INTO wilder  VALUES (NULL, :firstname, :lastname, :birthday, :email, :cursus, :github, :presentation);");

    $insert->bindParam(":firstname", $post["firstname"]);
    $insert->bindParam(':lastname', $post['lastname']);
    $insert->bindParam(':birthday', $post['birthday']);
    $insert->bindParam(':email', $post['user_mail']);
    $insert->bindParam(':cursus', $post['cursus']);
    $insert->bindParam(':github', $post['github']);
    $insert->bindParam(':presentation', $post['presentation']);
    $insert->execute();
}


?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Titre de la page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Montserrat|Oswald" rel="stylesheet">
</head>

</head>
<body>
<?php include 'includes/_header.php';?>
<div class="main-page">
<form action="/admin.php" method="post" class="formAdmin">
    <div>
        <label for="firstname">Prenom :</label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname">
    </div>
    <div>
        <label for="birthday">Date de naissance :</label>
        <input type="date" id="birthday" name="birthday">
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>
    <div>
        <select name="cursus">
            <option value="PHP">PHP</option>
            <option value="JS">JS</option>
        </select>
    </div>
    <div>
        <label for="github">Github :</label>
        <input type="text" id="github" name="github">
    </div>
    <div>
       <textarea id="presentation" name="presentation">

</textarea>

    </div>

    <div>
        <input type="submit" value="Envoyer le formulaire">
    </div>
</form>

<?php

include 'includes/_footer.php'
?>
</div>
</body>
</html>