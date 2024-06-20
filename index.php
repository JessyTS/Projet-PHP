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
    $data_chemise = 0;
    $data_bas = 0;
    $pan_chemise = null;
    $pan_bas = null;
    $pan_radio = null;
    $radio_data = 0;
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
                        <input type="radio" name="item_bas[<?= $cle ?>]" id="<?= $cle ?>" value="<?= $valeur ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset> <br>
                <fieldset>
                    <label>Bas Marques</label> <br>
                    <?php foreach ($bas_marque as $cle => $valeur): ?>
                        <input type="checkbox" name="item_bas_marque[<?= $cle ?>]" id="<?= $cle ?>" value="<?= $valeur ?>">
                        <label for="<?= $cle ?>"><?= $cle ?> - <?= $valeur ?> €</label> <br>
                    <?php endforeach ?>
                </fieldset> <br> <br>
                <button type="submit">Voir mon Panier</button>
            </fieldset>
        </form>
    </div>
    <div>
        <?php if (isset($_POST["item_chemise"])): ?>
            <?php
                $data_chemise = result($_POST["item_chemise"]);
                $data_bas = result($_POST["item_bas_marque"]);
                $radio_data = result($_POST["item_bas"]);
                $pan_chemise = result_data($_POST["item_chemise"]);
                $pan_bas = result_data($_POST["item_bas_marque"]);
                $pan_radio = result_data($_POST["item_bas"]);
            ?>
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
                <?php foreach (result_data($_POST["item_bas"]) as $k => $v): ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v?> €</td>
                    </tr>
                <?php endforeach ?>
                <?php foreach (result_data($_POST["item_bas_marque"]) as $k => $v): ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v?> €</td>
                    </tr>
                <?php endforeach ?>
                <tr class="foot">
                    <td>Total</td>
                    <td><?=($data_chemise + $data_bas + $data_bas)?> €</td>
                </tr>
            </table>  
            <div class="alert">Votre panier fait <?=($data_chemise + $data_bas + $data_bas)?> €</div>
            <?php elseif (isset($_POST)): ?>
            <div class="alert_none">Votre panier est vide !!</div>
        <?php endif ?>
    </div>

    
<pre>
    <h1>Debug !!</h1>
    <?= print_r($_POST) ?>
</pre>
<?php require 'footer.php' ?>