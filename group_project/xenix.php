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
    <title>Types | Xenix</title>

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
                        <li><a href="darwin.php">Darwin</a></li>
                        <li><a href="ibm_aix.php">IBM AIX</a></li>
                        <li><a href="hp_ux.php">HP-UX</a></li>
                        <li><a href="free_bsd.php">FreeBSD</a></li>
                        <li><a href="net_bsd.php">NetBSD</a></li>
                        <li><a class="active-nav" href="xenix.php">Xenix</a></li>
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
        <h1>Xenix</h1>
        <p class="center-section-txt">Xenix was originally developed for the Intel 8086 and 8088 processors,
            and was later ported to other hardware platforms, including the Motorola 68000, Zilog Z8000, and DEC VAX.
            Microsoft licensed Xenix to other companies, including SCO (Santa Cruz Operation), who became the primary distributor
            and developer of the operating system.
        </p>
        <div class="section-div section-reverse">
            <p class="section-txt width">&emsp;&emsp;Xenix was designed to be a high-performance, scalable, and reliable operating system,
                and was widely used in business environments for applications such as accounting, inventory management, and payroll processing.
            </p>
            <div class="img-div">
                <img class="types_img" src="assets/media/xenix_img.jpg" alt="Xenix">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div full-div">
                <img class="types_img" src="assets/media/unix_types.png" alt="Unix Types">
            </div>
            <p class="section-txt width">&emsp;&emsp;Xenix included a number of features that were unique to the operating system,
                such as a binary compatibility layer that allowed it to run software developed for other UNIX systems, as well as support
                for multiple users and file systems.
            </p>
        </div>
        <p class="center-section-txt">&emsp;&emsp;Xenix was also notable for its support of the X Window System, a popular graphical user
            interface used on many UNIX-based systems.
            Although Xenix is no longer actively developed or supported, it is still used by some legacy systems, and has a dedicated
            community of enthusiasts who continue to maintain and develop the operating system.
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