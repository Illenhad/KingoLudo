<div class="container well">
    <?php
        foreach ($result as $jeu) {
            include ('src\Vue\jeu_view.php');
            echo '<hr>';
        }
    ?>
</div>