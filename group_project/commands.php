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
    <title>About | Commands</title>

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
                        <li><a class="active-nav" href="commands.php">Commands</a></li>
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

    <div class="main-div">
        <h1>Unix Commands</h1>
        <p class="center-section-txt">The following commands, the ones we represented through the below image, are some of the most common and 
            used commands in Unix. We also believe that these are some of the most convenient commands as they accomplish the most important 
            tasks, as well as being easy to remember.
        </p>
        <div class="flip-box">
            <div class="flip-box-inner">
                <div class="flip-box-front">
                    <figure>
                        <img class="flip_img" src="assets/media/unix_commands1.png" alt="Unix Commands">
                        <figcaption class="caption">Hover For More Information</figcaption>
                    </figure>
                </div>
                <div class="flip-box-back">
                    <h2>Unix Commands</h2>
                    <hr class="hLine">
                    <div class="back-info">
                        <p><span class="span">ls</span> - Lists files and directories in the current working directory.</p>
                        <p><span class="span">cd</span> - Used to change the current working directory.</p>
                        <p><span class="span">mkdir</span> - Used to create a new directory.</p>
                        <p><span class="span">rm</span> - Used to remove files and directories.</p>
                        <p><span class="span">cp</span> - Used to copy files and directories.</p>
                        <p><span class="span">mv</span> - Used to move or rename files and directories.</p>
                        <p><span class="span">cat</span> - Used to display the contents of a file.</p>
                        <p><span class="span">touch</span> - Used to create a new empty file or update an existing file.</p>
                        <p><span class="span">id</span> - Displays the user ID and group ID of the current user.</p>
                    </div>
                </div>
            </div>
        </div>
        <p class="center-section-txt below-flip-box">Unix commands are case-sensitive. For example, "ls" and "LS" are different commands.
            Unix commands are typically entered into a command-line interface (CLI) or terminal, which is a text-based
            interface for interacting with the operating system.
        </p>
        <div class="section-div">
            <div class="img-div full-div">
                <img class="square-img" src="assets/media/unix_penguin.png" alt="Unix Penguin">
            </div>
            <p class="section-txt width">Unix commands typically consist of a command name, followed by options and/or arguments.
                Options modify the behavior of a command, while arguments provide input data to a command.
                Most Unix commands have a corresponding manual page, which provides detailed information about the
                command, including its usage, options, and examples.
            </p>
        </div>
        <p class="center-section-txt">Many Unix commands can be combined using pipes ("|") and redirects
            (tag characters) to perform more complex operations.
            Unix commands are often used in shell scripts, which are text files
            containing a series of commands that can be executed sequentially or in parallel.
            There are thousands of Unix commands available, each with its own unique functionality and syntax.
            Unix commands can be used to perform a wide variety of tasks, including file management, system administration,
            networking, programming, and more.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_commands2.jpg" alt="Unix Commands">
        </div>
        <p class="center-section-txt">Unix commands can be customized and extended through the use of shell scripts,
            command aliases, and third-party utilities.
            Unix commands are an essential part of Unix-based operating systems and are used extensively by system
            administrators, developers, and power users.
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