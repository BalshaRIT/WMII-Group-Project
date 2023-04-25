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
    <link rel="stylesheet" href="assets/css/about.css">
    <script src="assets/java-script/script.js"></script>
    <title>UnixGuide | About</title>

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

    <div class="div-top">
        <h1>About Unix</h1>
        <p class="txt1">Unix is a computer operating system that was developed in the 1960s and 1970s.
                It was created by a group of researchers at Bell Labs, including Ken Thompson and Dennis Ritchie. Unix was designed 
                to be a multi-user, multi-tasking system that could run on a wide range of hardware platforms. One of the defining 
                features of Unix is its command line interface.Instead of relying on graphical user interfaces (GUIs) like modern 
                operating systems, Unix users interact with the system through a text-based shell. The shell allows users to run
                commands and scripts that can perform a wide range of tasks, from managing files and directories to running complex 
                programs. Unix has been highly influential in the development of modern computing. Many of the concepts and technologies 
                that are now commonplace, such as networking protocols and the C programming language, were first developed on Unix 
                systems.<br>
                &emsp;&emsp;Unix has also inspired a number of open-source operating systems, such as Linux and FreeBSD, which continue 
                to be popular among developers and power users. Today, Unix is still widely used in a variety of settings, including 
                scientific computing, web servers, and super-computing. While Unix commands and systems can be challenging to learn 
                at first, they offer unparalleled power and flexibility for users who are willing to invest the time and effort to master 
                them. Unix is known for its stability, security, and reliability. Its modular design and strict adherence to standards 
                make it a robust platform for a wide range of applications, from desktop computing to large-scale server deployments. 
                Unix is also highly customizable, with many options for configuring the system to suit specific needs. One of the key 
                advantages of Unix is its support for multi-tasking and multi-user environments. This means that multiple users can 
                access the same system simultaneously, with each user having their own set of resources and permissions.
        </p>
    </div>

    <div class="info2">
        <div class="cards">
            <h2 class="title-for-cards">Commands</h2>
            <p class="p1">Unix commands often provide a wide range of options and flags that allow users to customize their behavior.
                For example, the ls command can be used with various flags to display
                files in different formats or to sort them in different ways.
                Many Unix commands also support command-line completion,
                which allows users to quickly enter commands or arguments by typing the first few characters and then pressing the Tab key.
            </p>
            <div class="button-div">
                <a class="learn-btn" href="commands.php">Learn More</a>
            </div>
        </div>
        <div class="cards bottom-card">
            <h2 class="title-for-cards">Directories</h2>
            <p class="p1">Unix organizes directories into a hierarchical file system.
                The top-level directory in the file system is known as the root directory,
                and it is denoted by a forward slash (/). All other directories are located beneath the root directory.
                Unix supports symbolic links, which allow users to create
                aliases for directories/files; they are useful for creating shortcuts to frequently
                used directories or for simplifying complex directory structures.
            </p>
            <div class="button-div">
                <a class="learn-btn" href="directories.php">Learn More</a>
            </div>
        </div>
    </div>

    <div class="main-div">
        <div class="marquee-page-div">
            <p class="marquee-page-title">Commands</p>
            <a class="visit-link" href="commands.php">Visit Page</a>
        </div>
        <div class="empty-div"></div>
        <div class="marquee-page-div">
            <p class="marquee-page-title">Directories</p>
            <a class="visit-link" href="directories.php">Visit Page</a>
        </div>
        <div class="empty-div"></div>
        <div class="marquee-page-div">
            <p class="marquee-page-title">Permissions</p>
            <a class="visit-link" href="permissions.php">Visit Page</a>
        </div>
        <div class="empty-div"></div>
        <div class="marquee-page-div">
            <p class="marquee-page-title">Packages</p>
            <a class="visit-link" href="packages.php">Visit Page</a>
        </div>
    </div>
    

    <div class="info2 bottom-info2">
        <div class="cards">
            <h2 class="title-for-cards">Permissions</h2>
            <p class="p1">
                Unix permissions are a security feature that controls access to files and directories on a Unix system.
                Each file and directory has three sets of permissions, which determine the level of access that users and groups
                have to that file or directory. The three sets of permissions are read, write, and execute, and they are denoted by
                letters (r, w, x) and numbers (4, 2, 1).
                Unix packages are collections of software that are designed to work together.
            </p>
            <div class="button-div">
                <a class="learn-btn" href="permissions.php">Learn More</a>
            </div>
        </div>
        <div class="cards bottom-card">
            <h2 class="title-for-cards">Packages</h2>
            <p class="p1">
                Unix packages are collections of software that are installed on a Unix system using a package manager.
                These packages make it easy for users to install and manage software on their Unix system. By using packages,
                users can quickly install the software they need without worrying about complex installation procedures or 
                compatibility issues. Packages include anything from simple command-line utilities to complex applications 
                and libraries.
            </p>
            <div class="button-div">
                <a class="learn-btn" href="packages.php">Learn More</a>
            </div>
        </div>
    </div>

    <div class="div-bottom">
        <div class="story">
            <h2>User Experience</h2>
            <p class="p2">
                "I once worked with a programmer who told me that he learned Unix by being
                locked in a server room for a week with nothing but a Unix manual. He emerged a week later as a Unix expert,
                having learned everything he needed to know through trial and error. He said it was a grueling experience,
                but it taught him more about Unix than any class or tutorial ever could.
                After his week in the server room, the programmer became the go-to Unix expert on our team.
                He was able to solve problems quickly and efficiently, and he was always eager to share his knowledge with others."
            </p>
        </div>
        <div class="img">
            <img class="middle-img" src="assets/media/unix_about_img.png" alt="Unix Letters">
        </div>
        <div class="story">
            <h2>User Experience</h2>
            <p class="p2">
                "I once had a problem with a script that was crashing every time it ran.
                I spent hours poring over the code and couldn't find the issue. I eventually asked a colleague for help,
                and he suggested running the script with the '-x' option, which prints each command as it is executed.
                It turned out that a variable was being set to an unexpected value, causing the script to fail. Without the '-x' option,
                I never would have found the issue. It was a great lesson in the power of Unix command-line tools and their ability to help
                you solve even the toughest problems."
            </p>
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