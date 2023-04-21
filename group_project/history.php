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
    <link rel="stylesheet" href="assets/css/history.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | History</title>

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
                <li><a href="history.php" class="active-nav">History</a></li>
                <li>
                    <a class="desktop-item" href="types.php">Types</a>
                    <input id="show-mega-menu" type="checkbox">
                    <a id="invisible-types" href="about.php">Visit Types</a>
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
        <h1>Unix Through History</h1>
        <div class="section-div">
            <div class="img-div">
                <img class="img1" src="assets/media/unix_founder1.jpg" alt="Dennis Ritchie">
            </div>
            <div class="founder1">
                <p class="section-txt"><span class="key-word">Dennis Ritchie</span> was a computer scientist and programmer who is best known for his work on the development
                    of the Unix operating system.
                    Ritchie, along with his colleague Ken Thompson, created Unix while working at Bell Labs in the late 1960s and early 1970s.
                    He was responsible for developing the C programming language, which is still widely used today and is considered one of the most
                    important programming languages in the history of computing. C was used to implement Unix and many other software projects.
                </p>
            </div>
        </div>
        <div class="section-div">
            <div class="founder1">
                <p class="section-txt"><span class="key-word">Ken Thompson</span> is another prominent computer scientist who played a key
                    role in the development of the Unix operating system.
                    Thompson was responsible for many of the core components of the operating system,
                    including the shell and many of the utilities and commands that are still used in Unix today.
                    Thompson's contributions to the field of computing have earned him numerous awards and honors,
                </p>
            </div>
            <div class="img-div">
                <img class="img2" src="assets/media/unix_founder2.jpg" alt="Ken Thompson">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="img1" src="assets/media/unix_lab.jpg" alt="Bell Labs">
            </div>
            <div class="founder1">
                <p class="section-txt"><span class="key-word">Bell Labs</span> the research division of AT&T, had been developing Unix
                    since the 1960s. In the early 1990s, Unix was already a well-established operating system used by researchers,
                    scientists, and engineers in various fields. However, the widespread adoption of personal computers led to a shift
                    towards user-friendly graphical user interfaces (GUIs) and away from command-line interfaces.
                    In the 1970s, Unix began to gain popularity among universities and research institutions,
                    who were drawn to its open architecture and portability.
                </p>
            </div>
        </div>
        <div class="section-div">
            <div class="founder1">
                <p class="section-txt"><span class="key-word">1980s</span>
                    Throughout the 1980s, Unix continued to gain popularity, particularly in the business and scientific communities.
                    Different versions of Unix were created by various vendors, each with their own unique features and capabilities.
                </p>
            </div>
            <div class="img-div">
                <img class="img2" src="assets/media/unix_pc.jpg" alt="PC">
            </div>
        </div>
        <div class="section-div">
            <div class="img-div">
                <img class="img1" src="assets/media/unix_pc1.jpg" alt="PC">
            </div>
            <div class="founder1">
                <p class="section-txt">
                   <span class="key-word">1990s</span> 
                   In the 1990s, Unix underwent a major transformation with the development of the GNU project and the creation of Linux,
                   a free and open-source operating system based on Unix. Linux quickly gained popularity among developers and system
                   administrators, and has become one of the most widely used operating systems in the world.
                </p>
            </div>
        </div>
        <div class="section-div">
            <div class="founder1">
                <p class="section-txt"><span class="key-word">2000s</span> Throughout the 2000s, Unix continued to be a popular choice for enterprise and server applications.
                    The rise of cloud computing and virtualization also played a significant role in shaping the Unix landscape.
                    One of the most significant events in Unix history in the early 2000s was the release of Mac OS X,
                    which was based on the Unix-based operating system FreeBSD.
                </p>
            </div>
            <div class="img-div">
                <img class="img2" src="assets/media/macos.jpg" alt="PC">
            </div>
        </div>
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>

</body>
</html>