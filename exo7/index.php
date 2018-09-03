<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
    <?php
    function number($age, $gender){
       if ($age < 0) {
         $message = 'L\'age n\'est pas valide';
       } elseif ($age < 18 && $gender == 'homme'){
        $message = 'Vous êtes un homme et vous êtes mineur';
      } elseif ($age < 18 && $gender == 'femme') {
        $message = 'Vous êtes une femme et vous êtes mineur';
      } elseif ($age >= 18 && $gender == 'homme') {
        $message = 'Vous êtes un homme et vous êtes majeur';
      } elseif ($age >= 18 && $gender == 'femme') {
        $message = 'Vous êtes une femme et vous êtes majeur';
      } else {
        $message = 'erreur';
      }
      return $message;
  }
  echo number(19, 'femme');
    ?>
</body>
</html>
