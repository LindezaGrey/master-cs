<?php
// import pdo from db.php
require_once 'db.php';
// get all news
$stmt = $pdo->prepare('SELECT * FROM news');
$stmt->execute();
$news = $stmt->fetchAll();

foreach ($news as $row) {
    echo
    "<div class='col'>
            <div class='card' style='width: 18rem;'>
            <img src='./assets/tech_thumbnail.webp' class='card-img-top' alt='techpreview'>
            <div class='card-body'>
                <h5 class='card-title'>" . $row["title"] . "</h5>
                <p class='card-text'>" . $row["content"] . "</p>
                <a href='./news_article.php' class='btn btn-primary'>Read more</a>
            </div>
        </div>
    </div>";
}