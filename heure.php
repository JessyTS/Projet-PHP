<?php 
    require 'header.php';
    require_once 'function.php';
    require_once 'config.php';
    $creneaux = creneaux_html(CRENAUX);
?>

<p>Horaire de Travail</p>
<div><?=$creneaux?></div>

<?php require 'footer.php' ?>