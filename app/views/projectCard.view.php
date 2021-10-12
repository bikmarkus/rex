<?php require('partials/head.php'); ?>

<div class="main-container">

<h1>
    <?= $card[0]->title; ?>
</h1>

<p class="project-description">
    <?= $card[0]->description; ?>
</p>

<?php /*
        echo '<pre>';
        var_dump($card[0]);
        echo '</pre>';*/
?>
</div>

<?php require('partials/footer.php'); ?>
