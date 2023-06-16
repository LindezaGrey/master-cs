<?php
// import pdo from db.php
require_once 'db.php';
// get all posts
$stmt = $pdo->prepare('SELECT post_id, title, preview_text, image FROM blog_posts');
$stmt->execute();
$blog_post = $stmt->fetchAll();

foreach ($blog_post as $row) {
    echo <<<HTML
    <div class='col'>
        <div class='card' style='width: 18rem;'>
            <div style='height: 286px;'>
                <img src="./assets/blogpictures/{$row['image']}" style="object-fit: contain; height: 100%; width: 100%;" alt='techpreview'>
            </div>
            <div class='card-body'>
                <h5 class='card-title'>{$row["title"]}</h5>
                <p  style='height: 200px;' class='card-text'>{$row["preview_text"]}</p>
                <a href="./blog_post_full.php?blog_post_id={$row['post_id']}" class='btn btn-primary'>Read more</a>
            </div>
        </div>
    </div>
    HTML;
}