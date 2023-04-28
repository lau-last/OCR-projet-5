<?php

require_once 'src/Model/model.php';

function addComment(string $post, array $input)
{
    $author = null;
    $comment = null;
    if (!empty($input['author']) && !empty($input['comment'])) {
        $author = $input['author'];
        $comment = $input['comment'];
    }
    createComment($post, $author, $comment);
    header('Location: index.php?url=post&id=' . $post);
}