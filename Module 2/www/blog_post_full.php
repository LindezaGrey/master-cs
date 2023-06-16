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
                echo <<<HTML
                <h2>{$blog_post['title']}</h2>
                <p class="pb-5">{$blog_post['preview_text']}</p>
                
                {$blog_post['content']}
                HTML;
            }
            ?>
        </div>
        <div class="container my-5">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newCommentModal">
                Post comment
            </button>

            <h5 class="mt-4 pb-4">Comment-Section</h5>
            <?php
            // get all comments for this blog post
            $stmt = $pdo->prepare('SELECT * FROM comments WHERE post_id = :blog_post_id ORDER BY created_at DESC');
            $stmt->bindValue(':blog_post_id', $blog_post_id, PDO::PARAM_INT);
            $stmt->execute();
            $comments = $stmt->fetchAll();

            foreach ($comments as $comment) {
                echo <<<HTML
                <div class="mt-3">
                    <p>{$comment['comment']}</p>
                    <p class="fst-italic">Posted at: {$comment['created_at']} by <span class="fw-bold">
                        {$comment['commenter_name']}
                    </span></p>
                    <hr class="hr" />
                </div>
                HTML;
            }
            ?>

            <!-- Modal -->
            <div class="modal fade" id="newCommentModal" tabindex="-1" aria-labelledby="newCommentModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="newCommentModalLabel">Add a comment</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="blog_process_form.php" method="post">
                            <div class="modal-body">
                                <!-- form to post comment -->
                                <div class="mb-3">
                                    <label for="commentName" class="form-label">Your name</label>
                                    <input type="text" class="form-control" id="commentName" name="commentName">
                                </div>
                                <div class="mb-3">
                                    <label for="commentTextarea" class="form-label">Your comment</label>
                                    <textarea class="form-control" id="commentTextarea" name="commentTextarea"
                                        rows="3"></textarea>
                                </div>
                                <?php echo <<<HTML
                                    <input type="hidden" name="blog_post_id" value="$blog_post_id">
                                HTML; ?>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Post comment</button>
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- include footer -->
    <?php include 'footer.php'; ?>
</body>

</html>