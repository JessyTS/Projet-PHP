<?php 
    require 'header.php';
    require_once 'function.php';
    
    $chemise = [
        "Lacoste" => 15,
        "Gucci" => 45,
        "Luis Vuiton" => 25,
    ];
?>

    <div>
        <form class="magasin" action="/index.php" method="post">
            <fieldset>
                <label>Mon Magasin</label> <br>
                <fieldset>
                    <label>Chemise</label> <br> <br>
                    <?php foreach ($chemise as $cle => $valeur): ?>
                        <input type="checkbox" name="" id="<?= $cle ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset>
                <input type="radio" name="">
                <input type="radio" name="">
                <input type="checkbox" name="">
                <input type="checkbox" name="">
            </fieldset>
        </form>
    </div>

<?php require 'footer.php' ?>