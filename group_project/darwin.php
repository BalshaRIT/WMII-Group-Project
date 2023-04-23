<?php

    session_name('UserLogin');
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="assets/media/unix_logo.png">
    <link rel="stylesheet" href="assets/css/types_menu.css">
    <script src="assets/java_script/script.js"></script>
    <title>Types | Darwin</title>

</head>
<body onload="scrollFunction();">
    
    <header id="top-of-page"></header>

    <nav>
        <div class="wrapper">
            <div class="logo">
                <a href="index.php"><img class="logo-img" src="assets/media/unix_logo.png" alt="UnixGuide Logo"></a>
            </div>
            <input type="radio" name="slide" id="menu">
            <input type="radio" name="slide" id="cancel">
            <ul class="nav-links">
                <li>
                    <label class="nav-btns btn-cancel" for="cancel"><i class="fa fa-times"></i></label>
                </li>
                <li><a href="index.php">Home</a></li>
                <li>
                    <a class="desktop-item" href="about.php">About</a>
                    <input id="show-drop-menu" type="checkbox">
                    <a id="invisible-about" href="about.php">Visit About</a>
                    <label class="mobile-item" for="show-drop-menu">About</label>
                    <ul class="drop-menu">
                        <li><a href="commands.php">Commands</a></li>
                        <li><a href="directories.php">Directories</a></li>
                        <li><a href="permissions.php">Permissions</a></li>
                        <li><a href="packages.php">Packages</a></li>
                    </ul>
                </li>
                <li><a href="history.php">History</a></li>
                <li>
                    <a class="desktop-item active-nav" href="types.php">Types</a>
                    <input id="show-mega-menu" type="checkbox">
                    <a id="invisible-types" href="about.php">Visit Types</a>
                    <label class="mobile-item active-nav" for="show-mega-menu">Types</label>
                    <ul class="mega-links">
                        <li><a href="oracle_solaris.php">Oracle Solaris</a></li>
                        <li><a class="active-nav" href="darwin.php">Darwin</a></li>
                        <li><a href="ibm_aix.php">IBM AIX</a></li>
                        <li><a href="hp_ux.php">HP-UX</a></li>
                        <li><a href="free_bsd.php">FreeBSD</a></li>
                        <li><a href="net_bsd.php">NetBSD</a></li>
                        <li><a href="xenix.php">Xenix</a></li>
                        <li><a href="sgi_irix.php">SGI IRIX</a></li>
                        <li><a href="tru64_unix.php">TRU64 UNIX</a></li>
                        <li><a href="mac_os.php">macOS</a></li>
                    </ul>
                </li>
                <li><a href="tutorial.php">Tutorial</a></li>
                <li><a href="quiz.php">Quiz</a></li>
                <li><a href="authors.php">Authors</a></li>
            </ul>
            <?php
                if(!isset($_SESSION['name'])) {
                    echo "<div class='btn-sign-up'>
                            <a href='sign_up.php'>Sign Up</a>
                          </div>";
                }else {
                    echo "<div id='user-name'>" . $_SESSION['name'] . "</div>";
                }
            ?>
            <label class="nav-btns btn-menu" for="menu"><i class="fa fa-bars"></i></label>
        </div>
    </nav>

    <div class="main-div">
        <h1>Darwin OS</h1>
        <p class="center-section-txt">Darwin is named after Charles Darwin, the famous naturalist and biologist
            who developed the theory of evolution.
            One of the unique features of Darwin is its use of the "launchd" process, which manages system services
            and user processes. This approach provides greater control and flexibility over system resources than traditional
            Unix-style init systems.
        </p>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/darwin_img.jpg" alt="Darwin">
            </div>
            <p class="section-txt width">&emsp;&emsp;Darwin has been used as the basis for several other operating systems,
                including iOS, iPadOS, and tvOS, which power Apple's mobile devices and set-top boxes.
            </p>
        </div>
        <div class="section-div section-reverse">
            <p class="section-txt width">&emsp;&emsp;There was an attempt by the Internet Systems Consortium to collaborate with Apple to create a
                community-lead OS based on Darwin called OpenDarwin. The project started in 2002 but got shut down in
                only four years due to Apple's disinterest and the fact that Darwin had limited usefulness outside of its macOS
                functionalities.
            </p>
            <div class="img-div full-div">
                <img class="types_img" src="assets/media/unix_types.png" alt="Unix Types">
            </div>
        </div>
        <p class="center-section-txt">&emsp;&emsp;In addition to its use in Apple's products, Darwin has been used in
            a variety of other projects, including the development of the Chameleon boot-loader and the creation
            of a custom operating system for the One Laptop per Child initiative.
            Darwin is notable for its hybrid kernel architecture, which combines elements of both monolithic
            and micro-kernel designs. This approach provides the benefits of both architectures, including efficient
            communication between components and better isolation of system services.
        </p>
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>
    
</body>
</html>