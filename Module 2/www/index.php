<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Profile</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
    <script src='main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
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

            <div class="row">
                <div class="col-sm-6">
                    <h1>Andy Ziegler</h1>
                    <ul>
                        <li>Based in Germany</li>
                        <li>Studying CS @Abertay University</li>
                    </ul>

                    <h3>Aspirations</h3>
                    <p>I am studying within the School of Design and Informatics at Abertay University. I have always
                        been
                        interested in computers and technology in general.
                        Luckily i could turn my hobby into a career - i am currently working as a software developer in
                        Germany.
                    </p>

                    <h3>Hobby</h3>
                    <p>My favorite leisure activity besides tinkering with technology is climbing - more specifically
                        bouldering. There is nothing more rewarding than solving a hard route with your last bit of
                        energy.
                        Usually i hang out at the climbing gym after bouldering with my friends and a bottle of "Club
                        Mate".
                    </p>

                    <h3>Contact</h3>
                    <ul>
                        <li><a href="mailto:2208771@abertay.ac.uk">📧 E-Mail</a></li>
                    </ul>

                    <h3>Program at Abertay</h3>
                    <p>This module introduces the student to dynamic web applications,
                        through client-side and server-side web development. The module
                        also will enable the student to develop necessary skills to develop
                        complex database driven web applications, effectively employing
                        server side technology.<sup style="color: blue"><span id="programSourceTooltip"
                                data-bs-toggle="tooltip"
                                data-bs-title="Taken from the HEP504 Module description">Source</span></sup></p>

                </div>
                <div class="col-sm-6">
                    <img src="./assets/profile.webp" alt="Andy Ziegler" class="img-fluid float-end rounded shadow"
                        style="max-height: 30vh;">
                </div>
            </div>
        </div>

        <div aria-live="polite" aria-atomic="true" class="rounded-3">
            <div class="toast-container p-3 bottom-0 end-0" id="toastPlacement">
                <div id="introToast" class="toast">
                    <div class="toast-header text-bg-info">
                        <strong class="me-auto">Info</strong>
                        <small>just now</small>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>

                    </div>
                    <div class="toast-body">
                        This page contains the Task1 submission.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- include footer -->
    <?php include 'footer.php'; ?>
</body>

</html>