<?php

ob_start();

foreach ($posts as $post) : ?>
    <p><?= $post['title'] ?></p>
    <p><?= $post['content'] ?></p>
    <p><?= $post['date_content'] ?></p>
    <a href="?url=post&id=<?= $post['id'] ?>">Commentaires</a>
<?php endforeach; ?>

<?php

$content = ob_get_clean();

require 'layout.php';