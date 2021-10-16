<?php require('partials/head.php'); ?>

<div class="main-container">

    <h1>
        <?= $card[0]->title; ?>
    </h1>

    <p class="project-description">
        <?= $card[0]->description; ?>
    </p>

    <form method="POST" action="/next-add">
        <input name="title" placeholder="next single action..."></input>
        <input type="hidden" name="project_id" value="<?=$card[0]->id; ?>">
        <button type="submit">Add</button>
    </form>

    <ul class="items-list">
        <?php  foreach ($card[1] as $item) : ?>
            <li>
                <p>
                    <?= $item->title; ?>
                </p>
                    <form method="POST" action="/next-del">
                        <input type="hidden" name="project_id" value="<?=$card[0]->id; ?>">
                        <input value="<?= $item->id; ?>" type="hidden" name="delete">
                        <button type="submit" class="delete">DEL</button>
                    </form>
            </li>
        <?php endforeach; ?>
    </ul>

</div>

<?php require('partials/footer.php'); ?>
