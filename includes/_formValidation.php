<?php
$errors = [];  //création tableau vide qui contiendra les messages d'erreur afin de passer les test avant de echo

if ($_SERVER["REQUEST_METHOD"] == "POST")                               // si la méthode de requête est post
{
    if (empty($_POST['name']))                                         // si la superglobale _POST['name'] est vide...
    {
        $errors['nameError'] = ' * Le nom est obligatoire';              //message d'erreur qui entre dans le tableau associatif $errors
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {             //sinon si le format est différent du pattern $errors nouveau message
            $errors['nameError'] = " * Lettres et espaces autorisés uniquement";
        }
    }

    if (empty($_POST['email'])) {
        $errors['mailError'] = " * L'adresse mail est obligatoire";
    } else {
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['mailError'] = " * Adresse mail invalide";
        }
    }
    if (empty($_POST['message'])) {
        $errors['messageError'] = " * Veuillez saisir votre message";
    }
}


?>