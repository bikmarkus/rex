<?php require('partials/head.php'); ?>

<div class="main-container">

    <h1>Projects</h1>

    <form method="POST" action="/projects">
        <input name="title"></input>
        <button type="submit">Add</button>
    </form>

    <ul class="items-list">
        <?php foreach ($items as $item) : ?>
            <li>
                <p>
                    <?= $item->title; ?>
                </p>
                    <form method="POST" action="/project-card">
                        <input value="<?= $item->id; ?>" type="hidden" name="card_id">
                        <button type="submit" class="view">VIEW</button>
                    </form>
                    <form method="POST" action="/projects-del">
                        <input value="<?= $item->id; ?>" type="hidden" name="delete">
                        <button type="submit" class="delete">DEL</button>
                    </form>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<?php require('partials/footer.php'); ?>
