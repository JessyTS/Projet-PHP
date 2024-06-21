<?php 
    require 'header.php';
    require_once 'function.php';

    if (isset($_POST['data_add']) && isset($_POST['carte'])) {
        if (isset($_POST['reset'])) {
            echo "Good !";
            if ($_POST['carte'] === 'un') {
                reset_data_file('card1.txt');
            } elseif ($_POST['carte'] === 'deux') {
                reset_data_file('card2.txt');
            } elseif ($_POST['carte'] === 'trois') {
                reset_data_file('card3.txt');
            } elseif ($_POST['carte'] === 'quatre') {
                reset_data_file('card4.txt');
            } elseif ($_POST['carte'] === 'cinq') {
                reset_data_file('card5.txt');
            };
        } else {
            echo "Good !";
            if ($_POST['carte'] === 'un') {
                add_data_file('card1.txt', $_POST['data_add']);
            } elseif ($_POST['carte'] === 'deux') {
                add_data_file('card2.txt', $_POST['data_add']);
            } elseif ($_POST['carte'] === 'trois') {
                add_data_file('card3.txt', $_POST['data_add']);
            } elseif ($_POST['carte'] === 'quatre') {
                add_data_file('card4.txt', $_POST['data_add']);
            } elseif ($_POST['carte'] === 'cinq') {
                add_data_file('card5.txt', $_POST['data_add']);
            };
        };
    };
?>
<h1>Création de Cartes de Mots</h1>

<form class="form_file" action="admin_fichier.php" method="POST">
    <textarea class="ta" name="data_add" cols="30" rows="10" maxlength="100"></textarea>
    <select class="sl" name="carte">
        <option value="un">Prémière Carte</option>
        <option value="deux">Deuxième Carte</option>
        <option value="trois">Troisième Carte</option>
        <option value="quatre">Quatrième Carte</option>
        <option value="cinq">Cinquième Carte</option>
    </select>
    <button class="bt" type="submit">Valider</button>
    <input class="cb" type="checkbox" name="reset" id="lbl" value="good">
    <label class="lcb" for="lbl">Effacer Toute la Carte</label>
</form>

<?php require 'footer.php' ?>