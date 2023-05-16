<?php
// import pdo from db.php
require_once 'db.php';
// get all news
$stmt = $pdo->prepare('SELECT * FROM news');
$stmt->execute();
$news = $stmt->fetchAll();

// create table with two columns, id and content
echo "<table><tr><th>id</th><th>content</th></tr>";
foreach ($news as $row) {
    echo "<tr><td>" . $row['id'] . "</td><td>" . $row['content'] . "</td></tr>";
}
echo "</table>";
