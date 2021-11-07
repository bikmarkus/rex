<?php require('partials/head.php'); ?>

<div class="main-container projects">

    <form method="POST" action="/project-card-save">
        <h1>
            <input name="title" value="<?= $card[0]->title;?>"></input>
        </h1>
        <textarea name="description"> <?= $card[0]->description; ?></textarea>
        <input type="hidden" name="project_id" value="<?=$card[0]->id; ?>">
        <button type="submit">Save</button>
    </form>

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
