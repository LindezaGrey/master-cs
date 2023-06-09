<?php

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // import pdo from db.php
    require_once 'db.php';
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    // get form data
    $comment_name = $_POST['commentName'];
    $comment_text = $_POST['commentTextarea'];
    $blog_post_id = $_POST['blog_post_id'];

    // insert comment into db
    $stmt = $pdo->prepare('INSERT INTO comments (commenter_name, comment, post_id) VALUES (:commenter_name, :comment, :post_id)');
    $stmt->bindValue(':commenter_name', $comment_name, PDO::PARAM_STR);
    $stmt->bindValue(':comment', $comment_text, PDO::PARAM_STR);
    $stmt->bindValue(':post_id', $blog_post_id, PDO::PARAM_INT);
    $stmt->execute();

    // redirect to blog post
    header("Location: ./blog_post_full.php?blog_post_id=$blog_post_id");
    exit();
}