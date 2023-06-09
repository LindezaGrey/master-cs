<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Blog Post</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="./assets/favicon.png" type="image/png">
</head>

<body>
    <div style="min-height: calc(100vh - 60px);">
        <?php include 'navigation.php'; ?>

        <div class="container my-5">
            <?php
            // Get the blog_post_id from the query parameter
            $blog_post_id = $_GET['blog_post_id'];

            require_once 'db.php';
            // Using the $blog_post_id to fetch the specific blog post from the database
            $stmt = $pdo->prepare('SELECT * FROM blog_posts WHERE post_id = :blog_post_id');
            $stmt->bindValue(':blog_post_id', $blog_post_id, PDO::PARAM_INT);
            $stmt->execute();
            $blog_post = $stmt->fetch();

            if (!$blog_post) {
                echo <<<HTML
                <h2>Blog Post Not Found</h2>
            HTML;
                echo <<<HTML
                <p>The requested blog post does not exist.</p>
            HTML;
            } else {
                echo "<h2>Blog Post $blog_post_id</h2>";
                echo "<p>This is the content of blog post: " . $blog_post['content'] . "</p>";
            }
            ?>
        </div>
        <hr class="hr" />

    </div>

    <!-- include footer -->
    <?php include 'footer.php'; ?>
</body>

</html>