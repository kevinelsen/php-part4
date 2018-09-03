<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 8 </title>
</head>
<body>
  <?php
  function calculs($number1 = 20, $number2 = 15, $number3 = 30){
      return $number1 + $number2 + $number3;
}
    ?>

      <p> <?php echo 'defaut : 20 + 15 + 30 = ' .calculs().' notre calcul : 50 + 12 + 27 = '.calculs(50,12,27) ?> </p>
  </body>
  </html>
