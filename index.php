
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>TrombinoWild</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Montserrat|Oswald" rel="stylesheet">
</head>

<body>

<?php
include 'includes/_header.php'; ?>




    <div class="main-page">
        
        
        <div class="maclasse">
            <h1 class="nom-promo">Trouve ton Wilder !</h1>
            <div class="maclasse2">
                <input class="recherche" type="text" placeholder="Qui ? Quoi ?">
                <input class="recherche" type="text" placeholder="Où ?">
                <a href="trombino.php"><input class="bouton-trombi" type="button" value="Go !"></a>
            </div>
        </div>



        <section class="bloc-text">

            <h2>Présentation</h2>

            <p>Nous sommes 36 wilders à avoir intégré la formation de développeur web et/ou mobile intensive en 5 mois de la Wild Code School à Bordeaux.</p>
            <p>Nous recherchons tous une formation efficace qui permet d'acquérir le maximum de compétences en un minimum de temps et surtout dêtre autonome à la sortie.</p>
            <p>A l'issue de la formation, nous serons capable de concevoir et développer une application web, d'intégrer les méthodes agiles de gestion de projet.

            Nos capacités seront HTML,CSS,Bootstrap et nous serons spécialisés dans un langage de programmation et un framework d'application: PHP/Symphony ou JavaScript/react.<p>
            <p>La formation est composée de ces deux groupes qui vous sont présentés sur la page <a href="trombino.php">Trombinoscope.</a></p>


            <div class="bloc-bouton"><a href="contact.php"><input class="bouton-trombi" type="button" value="Contactez-nous"></a></div>

        </section>
    </div>

<?php include 'includes/_footer.php';  //permet de retrouver le footer qui est dans includes?>

</body>

</html>

