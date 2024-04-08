<?php
require_once 'Includes/Header.php';
?>
<div class="home-container">
    <style>
        .home-container {
            display: flex;

            > * {
                flex: 1;
            }
        }
    </style>
    <div class="main-container">
        <?php require_once 'Contenu/Texte.php'; ?>
    </div>
    <div class="main-container">
        <?php require_once 'Contenu/Video.php'; ?>
    </div>
</div>
<?php
require_once 'Includes/Footer.php';
?>