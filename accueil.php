//Créer un formulaire de connexion avec en champs adresse mail et mot de passe ?

<?php
$error = [];
if ($_POST) {


  // vérification de la présence du nom

  if (empty($_POST['user_name']))  $error['name1'] = 'Ce champ doit être complété';

  // vérification du format du nom

  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['user_name'])) $error['name2'] = 'Le nom n\'est pas au bon format';

  // vérification de la présence du prenom

  if (empty($_POST['user_firstname']))  $error['firstname1'] = 'Ce champ doit être complété';

  // vérification du format du prenom

  if (!preg_match("/^[a-zA-Z ]*$/", $_POST['user_firstname'])) $error['firstname2'] = 'Le prénom n\'est pas au bon format';

  // vérification de la présence du telephone

  if (empty($_POST['user_phone']))  $error['phoneNumber'] = 'Le téléphone doit être renseigné';

  // vérification de la présence de l'user_email

  if (empty($_POST['user_mail']))  $error['email1'] = 'L\'email doit être renseigné';

  // vérification du format de l'email

  if (!filter_var($_POST['user_mail'], FILTER_VALIDATE_EMAIL)) {$error['email2'] = 'L\'email n\'est pas au bon format';}

  // vérification de la présence du message

  if (empty($_POST['user_message'])) {$error['message1'] = 'Le champ message doit être complèté';}

  if (count($error) == 0) {echo 'Félicitations ! Votre formulaire a bien été transmis <br><br>';}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=1.0" />

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">

  <link href="https://fonts.googleapis.com/css?family=Cherry+Swash" rel="stylesheet">

    <title>Formulaire PHP</title>
</head>

<body>
   <div id="contact">
      <h2>Contact</h2>
        <div class="form">
          <form method="post" action="index.php">

            <div>
              <label for="name"></label>
              <input type="text" id="name" name="user_name" placeholder="Votre NOM :" pattern="([A-zÀ-ž\s]){3,}" required>
              <?php if (isset($error['name1'])) { echo $error['name1'];}
                if (isset($error['name2'])) { echo $error['name2'];}
              ?>
            </div>

            <div>
              <label for="firstname"></label>
              <input type="text" id="firstname" name="user_firstname" placeholder="Votre prénom :" pattern="([A-zÀ-ž\s]){3,}" required>
              <?php if (isset($error['firstname1'])) { echo $error['firstname1'];}
                if (isset($error['firstname2'])) { echo $error['firstname2'];}
              ?>
            </div>

            <div>
              <label for="email"></label>
              <input type="email" id="mail" name="user_mail" placeholder="Votre e-mail :" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
              <?php  if (isset($error['email1'])) { echo $error['email1'] . '<br>';}
                if (isset($error['email2'])) { echo $error['email2'];}
              ?>
            </div>

            <div>
              <label for="numberPhone"></label>
              <input type="numberPhone" id="numberPhone" name="user_phone" placeholder="Votre téléphone :" pattern="[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}[0-9]{2}" required>
              <?php  if (isset($error['numberPhone'])) { echo $error['numberPhone'];}
              ?>

            </div>

            <div>
              <label for="object"></label>
              <select id="object" name="object">
                <option value="select">Objet de votre demande :</option>
                <option value="commande">Commande</option>
                <option value="annulCommande">Annulation commande</option>
                <option value="reclam">Réclamation</option>
                <option value="question">Question</option>
              </select>
            </div>

            <div>
              <label for="msg"></label>
              <textarea rows="5" cols="50" id="msg" name="user_message" placeholder="Votre message :">



    
