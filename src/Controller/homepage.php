<?php

require_once 'src/Model/model.php';

function homepage(){
    $posts = getPosts();
    require 'view/homepage.php';
}