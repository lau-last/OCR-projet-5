<?php
ini_set('display_errors', 'On');

require_once('src/Controller/homepage.php');
require_once('src/Controller/post.php');
require_once('src/Controller/addComment.php');

if(isset($_GET['url']) && $_GET['url'] === 'post'){
    $id = $_GET['id'];
    post($id);
} elseif (isset($_GET['url']) && $_GET['url'] === 'addComment') {
    $id = $_GET['id'];
    addComment($id, $_POST);
}else {
    homepage();
}