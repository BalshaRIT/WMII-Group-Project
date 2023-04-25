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
    <link rel="stylesheet" href="assets/css/about_menu.css">
    <script src="assets/java_script/script.js"></script>
    <title>About | Directories</title>

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
                    <a class="desktop-item active-nav" href="about.php">About</a>
                    <input id="show-drop-menu" type="checkbox">
                    <a id="invisible-about" href="about.php">Visit About</a>
                    <label class="mobile-item active-nav" for="show-drop-menu">About</label>
                    <ul class="drop-menu">
                        <li><a href="commands.php">Commands</a></li>
                        <li><a class="active-nav" href="directories.php">Directories</a></li>
                        <li><a href="permissions.php">Permissions</a></li>
                        <li><a href="packages.php">Packages</a></li>
                    </ul>
                </li>
                <li><a href="history.php">History</a></li>
                <li>
                    <a class="desktop-item" href="types.php">Types</a>
                    <input id="show-mega-menu" type="checkbox">
                    <a id="invisible-types" href="types.php">Visit Types</a>
                    <label class="mobile-item" for="show-mega-menu">Types</label>
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
        <h1>Unix Directories</h1>
        <p class="center-section-txt">Unix directories were first introduced in the early 1970s as
            part of the Unix operating system, which was developed by Ken Thompson and Dennis Ritchie at Bell Labs.
            Unix directories are a hierarchical organization of files and directories that are arranged in a tree-like structure.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_directories1.png" alt="Unix Commands">
        </div>
        <p class="center-section-txt">One interesting aspect of Unix directories is their flexibility and versatility.
            Unix directories can be organized and arranged in a wide variety of ways, and can be easily customized and
            configured to meet the needs of individual users and organizations. For example, users can create subdirectories
            within directories to organize their files, and can use symbolic links to create shortcuts or aliases to frequently
            used directories or files.
        </p>
        <div class="section-div">
            <p class="section-txt width">Another interesting aspect of Unix directories is their use of the root directory.
                In Unix, the root directory (represented by the symbol "/") is the top-level directory in the file system,
                and all other directories and files are organized beneath it in a hierarchical tree structure.
                The root directory contains all other directories and files, and is considered the starting point
                for all file system operations in Unix.
            </p>
            <div class="img-div bottom-img full-div">
                <img class="square-img" src="assets/media/unix_penguin.png" alt="Unix Penguin">
            </div>
        </div>
        <p class="center-section-txt">Another interesting aspect of Unix directories is their use in scripting and automation.
            In Unix, directories can be easily navigated and manipulated using command-line tools and shell scripts,
            which can be used to automate repetitive tasks or perform complex operations on large numbers of files and directories.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_directories2.jpg" alt="Command Line">
        </div>
        <p class="center-section-txt">Overall, Unix directories are an important and foundational aspect of the Unix operating system,
            and their flexibility and versatility have made them a popular choice for a wide variety of computing applications.
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