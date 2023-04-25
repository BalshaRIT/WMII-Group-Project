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
    <title>Types | macOS</title>

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
                    <a id="invisible-types" href="types.php">Visit Types</a>
                    <label class="mobile-item active-nav" for="show-mega-menu">Types</label>
                    <ul class="mega-links">
                        <li><a href="oracle_solaris.php">Oracle Solaris</a></li>
                        <li><a href="darwin.php">Darwin</a></li>
                        <li><a href="ibm_aix.php">IBM AIX</a></li>
                        <li><a href="hp_ux.php">HP-UX</a></li>
                        <li><a href="free_bsd.php">FreeBSD</a></li>
                        <li><a href="net_bsd.php">NetBSD</a></li>
                        <li><a href="xenix.php">Xenix</a></li>
                        <li><a href="sgi_irix.php">SGI IRIX</a></li>
                        <li><a href="tru64_unix.php">TRU64 UNIX</a></li>
                        <li><a class="active-nav" href="mac_os.php">macOS</a></li>
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
        <h1>macOS</h1>
        <p class="center-section-txt">macOS was first introduced in 2001 as Mac OS X, and it has since undergone several
            name changes, with macOS becoming the official name in 2016.
            The operating system is known for its sleek, intuitive user interface, which has won many fans over the years.
            macOS is also known for its tight integration with Apple's hardware and software ecosystem, including features like iCloud
            syncing, Continuity for seamless cross-device integration, and the ability to run iOS apps on Macs with Apple Silicon processors.
        </p>
        <div class="section-div">
            <div class="img-div">
                <img class="types_img" src="assets/media/macos_img1.png" alt="macOS">
            </div>
            <p class="section-txt width">&emsp;&emsp;Like other UNIX-based operating systems, macOS includes a terminal emulator and supports
                a wide range of command-line tools and utilities.
                macOS is the second most popular desktop operating system in the world, after Windows, with a global market share
                of around 17%.
            </p>
        </div>
        <div class="section-div section-reverse">
            <p class="section-txt width">&emsp;&emsp;macOS has a strong focus on security and privacy, with features like Gatekeeper,
                which blocks unauthorized software from running, and FileVault, which encrypts the contents of the hard drive.
                One of the most iconic features of macOS is the Dock, a customizable bar of icons that provides quick access to frequently
                used apps and documents.
            </p>
            <div class="img-div full-div">
                <img class="types_img" src="assets/media/macos_img2.png" alt="macOS">
            </div>
        </div>
        <p class="center-section-txt">&emsp;&emsp;Finally, macOS has a dedicated community of developers and enthusiasts who continue to create
            and maintain a wide range of software and tools for the platform, ensuring that it remains a popular choice for many users
            around the world.
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