<!DOCTYPE html>
<html lang="fr-FR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
  </head>
  <body>
    <header>
      <div class="tete">
        <span><a href="#">Acceuil</a></span>
        <span><a href="#">Jeux</a></span>
        <span><a href="#">Support</a></span>
      </div>
    </header>
    <div>
      <?php
        require 'jeu.php'
      ?>
    </div>
    <footer></footer>
  </body>
</html>