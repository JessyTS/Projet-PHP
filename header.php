<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title> <?= $_SERVER['SCRIPT_NAME'] ?> </title>
</head>
<body>
    <header>
        <div class="head">
            <span><a class="head-acceuil" href="/index.php">Panier</a></span>
            <span><a class="head-indice" href="/jeu.php">Jeu Devine</a></span>
            <span><a class="head-visite" href="/fichier.php">Cartes Mots</a></span>
            <span><a class="head-faq" href="/admin_fichier.php">Gestion Cartes</a></span>
            <!-- <span><a class="head-support" href="#" onclick="alert('Good !')">Support</a></span> -->
            <span><input class="input" type="search" name="" id="" placeholder="Recherche" submit></span>
        </div>
    </header>