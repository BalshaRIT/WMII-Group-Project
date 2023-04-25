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
    <title>About | Packages</title>

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
                        <li><a href="directories.php">Directories</a></li>
                        <li><a href="permissions.php">Permissions</a></li>
                        <li><a class="active-nav" href="packages.php">Packages</a></li>
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
        <h1>Unix Packages</h1>
        <p class="center-section-txt">Unix packages are collections of software applications, libraries,
            and other resources that are designed to be easily installed and managed on Unix-based operating systems.
            Unix packages provide a convenient way for users to install and manage software, as well as for system administrators
            to distribute and maintain software across multiple machines.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_packages1.png" alt="Unix Packages">
        </div>
        <p class="center-section-txt">One interesting aspect of Unix packages is their use of package managers. Package
            managers are software tools that are designed to automate the process of installing, upgrading, and managing
            packages on Unix systems. Package managers use a package database to keep track of installed packages and their
            dependencies, and can automatically resolve dependencies and install required packages when new software is installed.
        </p>
        <div class="section-div">
            <p class="section-txt width">Another interesting aspect of Unix packages is their modularity and flexibility.
                Unix packages can be designed and distributed in a wide variety of formats, ranging from simple tar archives
                to more complex package formats like RPM and Debian packages. This flexibility allows developers and system
                administrators to choose the package format that best suits their needs, and to easily create and distribute
                packages for different Unix platforms and distributions.
            </p>
            <div class="img-div bottom-img full-div">
                <img class="square-img" src="assets/media/unix_penguin.png" alt="Unix Penguin">
            </div>
        </div>
        <p class="center-section-txt">In addition, Unix packages also provide a centralized and standardized way for users
            to obtain and install software, reducing the risk of downloading and installing potentially malicious or incompatible
            software from untrusted sources. Many Unix distributions provide a repository of pre-built packages that users can easily
            install and manage using the package manager, ensuring that the software they install is trusted, up-to-date, and compatible
            with their system.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_packages2.png" alt="Unix Packages">
        </div>
        <p class="center-section-txt">Overall, Unix packages are an important and widely used feature of Unix-based operating systems.
            Their use of package managers and flexible package formats make them a powerful tool for managing software on Unix systems,
            and have helped to make Unix-based operating systems some of the most widely used and versatile operating systems in the world.
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