<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 4 </title>
</head>
<body>
  <?php
  function number($number1,$number2){
    if ($number1 > $number2) {
      return 'Le premier nombre est plus grand';
    } elseif ($number1 < $number2) {
       return 'Le premier nombre est plus petit ';
    } else {
       return 'Les deux nombres sont identiques ';
    }
}
     echo number(30,30);
    ?>
  </body>
  </html>
