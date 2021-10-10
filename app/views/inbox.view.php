<?php require('partials/head.php'); ?>

<div class="main-container">

    <h1>Inbox</h1>

    <form method="POST" action="/inbox">
        <input name="title"></input>
        <button type="submit">Add</button>
    </form>

    <ul class="items-list">
        <?php foreach ($items as $item) : ?>
            <li>
                <p>
                    <?= $item->title; ?>
                </p>
                    <form method="POST" action="/inbox-del">
                        <input value="<?= $item->id; ?>" type="hidden" name="delete">
                        <button type="submit" class="delete">DEL</button>
                    </form>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<?php require('partials/footer.php'); ?>
