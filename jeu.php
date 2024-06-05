<?php
    $devine = 150;
    require 'header.php'
?>

<?php
    if ($_GET['chiffre'] > $devine):
        echo "Votre nombre est trop grand !!"
    endif
?>

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="Entre 0 et 1000">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>