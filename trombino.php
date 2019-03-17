
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

    <?php include 'includes/_header.php'?>

    <section class="main-page">
    <h1>Trombinoscope</h1>

    <h2>PHP</h2>

    <div class="bloc-image">

        <?php     include 'includes/_phpCards.php';        ?>
    </div>

    <h2>JAVASCRIPT</h2>

      <div class="bloc-image">

<?php     include 'includes/_jsCards.php';        ?>

      </div>
        
        
        
        


        <div class="bloc-bouton"><a href="contact.php"><input class="bouton-trombi" type="button" value="Contactez-nous"></a></div>


  </section>

    <?php include 'includes/_footer.php'; ?>

</body>

</html>