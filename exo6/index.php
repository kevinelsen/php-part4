<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title> Exercice 5 </title>
</head>
<body>
  <?php
  function stats($firstname = 'patrick', $lastname = 'chirac', $number = 45){
      return 'Bonjour ' . $firstname . ' ' . $lastname . ', tu as ' . $number . ' ans.';
}
     echo stats();
    ?>
  </body>
  </html>
