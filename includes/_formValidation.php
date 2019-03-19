<?php
$errors=[];  //création tableau vide qui contiendra les messages d'erreur

if ($_SERVER["REQUEST_METHOD"]=="POST")                               // si la méthode de requête est post
{
    if (empty($_POST['name']))                                         // si la superglobale _POST['name'] est vide...
    {
        $errors['nameError'] = ' * Le nom est obligatoire';              //message d'erreur qui entre dans le tableau associatif $errors
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $errors['nameError'] = " * Lettres et espaces autorisés seulement";
        }
    }

    if (empty($_POST['email']))                                         // si la superglobale _POST['name'] est vide...
    {
        $errors['mailError'] = " * L'adresse mail est obligatoire";              //message d'erreur qui entre dans le tableau associatif $errors
    } else
    {
        $email = post_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errors['emailError'] = "Invalid email format";
        }
    }
    if (empty($_POST['message']))                                         // si la superglobale _POST['name'] est vide...
    {
        $errors['messageError'] = " * Veuillez saisir votre message";              //message d'erreur qui entre dans le tableau associatif $errors
    }

    }


    function post_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;

}
?>