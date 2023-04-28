<?php

require_once 'src/Model/model.php';

function post($id){
    $post = getPost($id);
    $comments = getComments($id);
    require 'view/post.php';
}
