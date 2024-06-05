<?php
    $devine = 150;
    require 'header.php'
?>

<?php if ($_GET['chiffre'] > $devine): ?>
    Votre chiffre est trop grand !!
<?php elseif ($_GET['chiffre'] < $devine): ?>
    Votre chiffre est trop petit
<?php else: ?>
    Bravo vous avez deviner le chiffre !!
<?php endif ?>

<form action="/jeu.php" method="GET">
    <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="<?= $_GET['chiffre'] ?>">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>