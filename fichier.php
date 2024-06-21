<?php 
    require 'header.php';
    require_once 'function.php';
?>
<h1>Cartes de Mots</h1>
<div class="file">
    <?php if (get_file('card1.txt') != '.'): ?>
        <div class="card"><?=get_file('card1.txt')?></div>
    <?php endif; ?>
    <?php if (get_file('card2.txt') != '.'): ?>
        <div class="card"><?=get_file('card2.txt')?></div>
    <?php endif; ?>
    <?php if (get_file('card3.txt') != '.'): ?>
        <div class="card"><?=get_file('card3.txt')?></div>
    <?php endif; ?>
    <?php if (get_file('card4.txt') != '.'): ?>
        <div class="card"><?=get_file('card4.txt')?></div>
    <?php endif; ?>
    <?php if (get_file('card5.txt') != '.'): ?>
        <div class="card"><?=get_file('card5.txt')?></div>
    <?php endif; ?>
</div>

<?php require 'footer.php' ?>