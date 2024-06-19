<?php 
    require 'header.php';
    require_once 'function.php';
    
    $chemise = [
        "Hermes" => 15,
        "Gucci" => 45,
        "Luis Vuiton" => 25,
    ];

    $bas = [
        "Culotte" => 26,
        "Pantalon" => 24,
    ];

    $bas_marque = [
        "LaCoste" => 48,
        "Dolces" => 23,
        "Amiri" => 14,
    ];

    $jessy = 0;
?>

    <div>
        <form class="magasin" action="/index.php" method="POST">
            <fieldset>
                <label>Mon Magasin</label> <br> <br>
                <fieldset>
                    <label>Chemise</label> <br>
                    <?php foreach ($chemise as $cle => $valeur): ?>
                        <input type="checkbox" name="item_chemise[<?= $cle ?>]" id="<?= $cle ?>" value="<?= $valeur ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset><br>
                <fieldset>
                    <label>Bas</label> <br>
                    <?php foreach ($bas as $cle => $valeur): ?>
                        <input type="radio" name="item_bas" id="<?= $cle ?>" value="<?= $valeur ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset> <br>
                <fieldset>
                    <label>Bas Marques</label> <br>
                    <?php foreach ($bas_marque as $cle => $valeur): ?>
                        <input type="checkbox" name="item_bas_marque[]" id="<?= $cle ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset> <br> <br>
                <button type="submit">Voir mon Panier</button>
            </fieldset>
        </form>
    </div>
    <div>
        <?php if (isset($_POST["item_chemise"])): ?>
        <table>
            <tr class="head_tb">
                <td>Produit</td>
                <td>Prix</td>
            </tr>
            <?php foreach (result_data($_POST["item_chemise"]) as $k => $v): ?>
                <tr>
                    <td><?=$k?></td>
                    <td><?=$v?> €</td>
                </tr>
            <?php endforeach ?>
            <tr class="foot">
                <td>Total</td>
                <td><?=result($_POST["item_chemise"])?> €</td>
            </tr>
        </table>
            <div class="alert">Votre panier fait <?= result($_POST["item_chemise"]); result_data($_POST["item_chemise"]) ?> €</div>
        <?php elseif (isset($_POST)): ?>
            <div class="alert_none">Votre panier est vide !!</div>
        <?php endif ?>
    </div>

    
<pre>
    <h1>Debug !!</h1>
    <?= print_r($_POST) ?>
</pre>
<?php require 'footer.php' ?>