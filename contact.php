<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Contact</title>
  <link href="https://fonts.googleapis.com/css?family=Fredericka+the+Great|Montserrat|Oswald" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  </head>


<body>

<?php
include 'includes/_header.php';
?>


    <section class="formulaire main-page">

      <h1>Contact</h1>
      <p class="detail-paragraphe">
        Vous souhaitez contacter l’équipe ou un membre de l’équipe ?
        <br />Vous avez un projet ?
        <br />Ce formulaire est là pour vous !
      </p>


<?php
include 'includes/_formValidation.php';
?>



      <form class="form-contact" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
          <div>
              <label for="nom">Votre nom *</label>
              <input type="text" name="name" placeholder="Votre nom ...">
              <span class="error"><?php if(isset($errors['nameError'])){ echo $errors['nameError'];}?></span>
          </div>

          <div>
              <label for="email">Votre email *</label>
              <input type="text" name="email" placeholder="@">
              <span class="error"><?php if(isset($errors['mailError'])){ echo $errors['mailError'];}?></span>
          </div>
          <div>
              <label for="sujet">Votre sujet</label>
              <input type="text" name="sujet" placeholder=" ">

          </div>
          <div>
              <label for="message">Votre message *</label>
              <textarea name="message" id="message" placeHolder="Votre Message..."></textarea>
              <span class="error"><?php if(isset($errors['messageError'])){ echo $errors['messageError'];}?></span>
          </div>
          <button type="submit">Envoyer</button>

      </form>


    </section>



<?php
include 'includes/_footer.php';
?>
  </body>

</html>

