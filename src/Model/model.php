<?php

function dbConnect(): PDO
{
    return new PDO('mysql:host=localhost:8889;dbname=myblog;charset=utf8', 'root', 'root');
}

function getPosts()
{
    $pdo = dbConnect();
    $statement = $pdo->query('SELECT * FROM article');
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getPost($id)
{
    $pdo = dbConnect();
    $statement = $pdo->prepare('SELECT * FROM article WHERE id = ?');
    $statement->execute([$id]);
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function getComments($id)
{
    $pdo = dbConnect();
    $statement = $pdo->prepare('SELECT * FROM comment WHERE article_id = ?');
    $statement->execute([$id]);
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}
function createComment($post,$author,$comment): bool
{
    $pdo = dbConnect();
    $statement = $pdo->prepare('INSERT INTO comment (article_id, author, comment, date_comment) VALUES(?, ?, ?, NOW())');
    return $statement->execute([$post,$author,$comment]);
}