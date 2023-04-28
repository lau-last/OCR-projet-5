<?php ob_start(); ?>

    <a href="index.php">Retour à la liste des billets</a>
    <h1><?= $post['title'] ?></h1>
    <p><?= $post['content'] ?></p>
    <p><?= $post['date_content'] ?></p>
    <h2>Commentaires</h2>

    <form action="index.php?url=addComment&id=<?= $post['id'] ?>" method="post">
        <div>
            <label for="author">Auteur</label><br/>
            <input type="text" id="author" name="author"/>
        </div>
        <div>
            <label for="comment">Commentaire</label><br/>
            <textarea id="comment" name="comment"></textarea>
        </div>
        <div>
            <input type="submit"/>
        </div>
    </form>


<?php foreach ($comments as $comment) : ?>
    <p><?= ($comment['author']) ?> le <?= $comment['date_comment'] ?></p>
    <p><?= ($comment['comment']) ?></p>
<?php endforeach; ?>

<?php
$content = ob_get_clean();
require 'layout.php';
