<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>News</title>
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
            <h2>Andy`s tech blog</h2>
            <div class="row row-cols-1 row-cols-md-2 g-4 ">
                <?php include 'blog_cards.php'; ?>
            </div>
        </div>
    </div>
    <div aria-live="polite" aria-atomic="true" class="rounded-3">
        <div class="toast-container p-3 bottom-0 end-0" id="toastPlacementBlog">
            <div id="blogToast" class="toast">
                <div class="toast-header text-bg-info">
                    <strong class="me-auto">Info</strong>
                    <small>just now</small>
                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                        aria-label="Close"></button>

                </div>
                <div class="toast-body">
                    This page contains the Task3 submission.
                </div>
            </div>
        </div>
    </div>
    <!-- include footer -->
    <?php include 'footer.php' ?>
</body>

</html>