<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>News | Article</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="icon" href="./assets/favicon.png" type="image/png">

</head>

<style>
p {
    text-align: justify;
}
</style>

<body>
    <div style="min-height: calc(100vh - 60px);">
        <?php include 'navigation.php'; ?>
        <div class="container my-5">
            <article>
                <h2>KeePass: Security Gap for Reading the Master Password Closed</h2>
                <figure class="my-4"><img src="./assets/lock_midjourney.webp" alt="article pic" class="rounded shadow"
                        style="max-height: 30vh;">
                    <figcaption class="fst-italic">Image Source: Midjourney</figcaption>
                </figure>
                <ul class="fst-italic">
                    <li>A security flaw in the password manager KeePass allowed attackers to reconstruct the master
                        password from a memory image.</li>
                    <li>Version 2.54 of KeePass has been released to close this vulnerability.</li>
                    <li>The update also includes new features and changes such as saving triggers, URL overrides, and
                        password generator profiles in the enforced configuration file.</li>
                </ul>
                <p>A security flaw in the password manager KeePass allowed the
                    reconstruction of the master password from memory images. An update now closes it. With version 2.54
                    of the password manager KeePass,
                    the developers close a vulnerability that allowed attackers to reconstruct the master password from
                    a memory image. The gap became known about two weeks ago. To exploit it,
                    attackers had to have already broken into the system in order to obtain necessary rights to create
                    or read memory images or swap files.</p>
                <p>The gap was opened by a password input field of the type SecureTextBoxEx. The characters entered
                    there leave certain patterns in memory that enable the reconstruction of the password
                    (CVE-2023-32784, CVSS 7.5, risk " high"). The update was originally announced for July, but it has
                    now appeared early. KeePass users should download and install it promptly.</p>
                <h3>KeePass: Security Gap Closed and Further Changes </h3>
                <p>In the version information,
                    the KeePass developers list new features and changes. Accordingly,
                    KeePass now saves triggers,
                    global URL overrides,
                    and password generator profiles in the so-called enforced configuration file. They thereby take
                    precedence over settings in the global or local configuration file. In addition,
                    the programmers have added a dialogue that allows some settings to be written into the enforced
                    configuration for all users.</p>
                <p>The developers describe the correction for the security vulnerability as improved protection of the
                    process memory from secure edit control fields. A built-in override for ssh-URIs is now disabled by
                    default,
                    it can be reactivated in the URL overrides. The password generator is supposed to build the user
                    interface faster. In addition,
                    it now uses the default setting "Automatically generated
                    passwords for new entries" when the generator is opened without a selected profile. Further
                    improvements are of a cosmetic nature and relate to the colors of dividing lines in dialogs,
                    for example. Users of KeePass should download and install the current version promptly. The files
                    are available on the <a href="https://keepass.info/download.html">KeePass download page.</a></p>
                <span class="fst-italic fw-bold">Source: <a
                        href="https://www.heise.de/news/KeePass-Luecke-zum-Auslesen-des-Master-Passworts-geschlossen-9179419.html">Heise
                        (german news portal)</a></span>
            </article>
        </div>
        <div aria-live="polite" aria-atomic="true" class="rounded-3">
            <div class="toast-container p-3 bottom-0 end-0" id="toastPlacementNews">
                <div id="newsToast" class="toast">
                    <div class="toast-header text-bg-info">
                        <strong class="me-auto">Info</strong>
                        <small>just now</small>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast"
                            aria-label="Close"></button>

                    </div>
                    <div class="toast-body">
                        This page contains the Task2 submission.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>

</html>