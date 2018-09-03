<?php
$age = 20;
$gender = false;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3</title>
  </head>
  <body>
    <p>
    <?php
        if ($age >= 18 AND $gender == true) {
          echo 'Vous êtes un homme et vous êtes majeur.';
        }elseif ($age < 18 AND $gender == true) {
          echo 'Vous êtes un homme et vous êtes mineur.';
        }elseif ($age >= 18 AND $gender == false) {
          echo 'Vous êtes une femme et vous êtes majeur.';
        }elseif ($age < 18 AND $gender == false) {
          echo 'Vous êtes une femme et vous êtes mineur.';
        }
    ?>
  </p>
  </body>
</html>
