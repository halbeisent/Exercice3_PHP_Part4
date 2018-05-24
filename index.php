<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 3 Partie 4 PHP</title>
  </head>
  <body>
    <p>
      <?php
        $firstStrVar = 'Bonjour! ';
        $secondStrVar = 'Comment allez vous?';
        function strConcat($firstStrVar, $secondStrVar)
        {
          return $firstStrVar . $secondStrVar;
        }
        echo strConcat($firstStrVar, $secondStrVar);
      ?>
    </p>
  </body>
</html>
