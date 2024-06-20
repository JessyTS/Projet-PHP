<?php
    $devine = 150;
    $resultat = null;
    $good = false;
    $erreur = null;
    require 'header.php';

    if (isset($_POST['chiffre'])) {
        if ($_POST['chiffre'] < $devine) {
            $erreur = "Le nombre est inferieur";
        } elseif ($_POST['chiffre'] > $devine) {
            $erreur = "Le nombre est trop grand";
        } elseif ($_POST['chiffre'] == $devine) {
            $erreur = "Le nombre est exacte";
        };
    };
?>

<form action="/jeu.php" method="POST">
    <?php if ($erreur): ?>
        <div class="alert"><?=$erreur?></div>
    <?php endif ?>
    <input type="number" name="chiffre" placeholder="Entre 0 et 1000" value="">
    <button type="submit">Deviner</button>
</form>

<?php require 'footer.php' ?>