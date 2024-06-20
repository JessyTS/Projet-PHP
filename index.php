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

    $item = 0;
    $item2 = 0;
    $item3 = 0;
    $data_chemise = 0;
    $data_bas = 0;
    $pan_chemise = null;
    $pan_bas = null;
    $pan_radio = null;
    $radio_data = 0;

    if (isset($_POST["item_chemise"])) {
        $data_chemise = result($_POST["item_chemise"]);
        $pan_chemise = result_data($_POST["item_chemise"]);
        $table_ch = result_data($_POST["item_chemise"]);
    };
    if (isset($_POST["item_bas_marque"])) {
        $data_bas = result($_POST["item_bas_marque"]);
        $pan_bas = result_data($_POST["item_bas_marque"]);
        $table_ch2 = result_data($_POST["item_bas_marque"]);
    };
    if (isset($_POST["item_bas"])) {
        $radio_data = result($_POST["item_bas"]);      
        $pan_radio = result_data($_POST["item_bas"]);
        $table_bas = result_data($_POST["item_bas"]);
    };
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
        <table>
            <?php if (isset($table_ch) || isset($table_ch2) || isset($table_bas)): ?>
                <tr class="head_tb">
                    <td>Produit</td>
                    <td>Prix</td>
                </tr>
            <?php endif ?>
            <?php if (isset($table_ch)): ?>
                <?php $item = count($table_ch); ?>
                <?php foreach ($table_ch as $k => $v): ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v?> €</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            <?php if (isset($table_ch2)): ?>
                <?php $item2 = count($table_ch2); ?>
                <?php foreach ($table_ch2 as $k => $v): ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v?> €</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            <?php if (isset($table_bas)): ?>
                <?php $item3 = count($table_bas); ?>
                <?php foreach ($table_bas as $k => $v): ?>
                    <tr>
                        <td><?=$k?></td>
                        <td><?=$v?> €</td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
            <?php if (isset($table_ch) || isset($table_ch2) || isset($table_bas)): ?>
                <tr class="foot">
                    <td>Total</td>
                    <td><?=($data_chemise + $data_bas + $radio_data)?> €</td>
                </tr>
            <?php endif ?>
        </table>
        <div class="alert">Votre panier fait <?=($data_chemise + $data_bas + $radio_data)?> € | <?=($item + $item2 + $item3)?> Items</div>  
    </div>
<?php require 'footer.php' ?>