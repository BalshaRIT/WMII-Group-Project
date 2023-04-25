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
    <link rel="stylesheet" href="assets/css/tutorial.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | Tutorial</title>

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
                <li><a class="active-nav" href="tutorial.php">Tutorial</a></li>
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
        <h1>Unix Tutorial</h1>
        <p class="center-section-txt">Step #1 - Open the search bar on your PC, laptop, or Mac.</p>
        <div class="center-img-div">
            <img class="img_s" src="assets/media/tutorial1_searchbar.png" alt="SearchBar">
        </div>
        <p class="center-section-txt">Step #2 - Search for either "Terminal" or "Command Prompt" and open the program.</p>
        <div class="center-img-div">
            <img class="img_s" src="assets/media/tutorial2_terminal.png" alt="CMD">
        </div>
        <p class="center-section-txt">Step #3 - Insert Commands (in this case we tried "dir" command). On Windows, we use "dir" instead of "ls" to 
            list the directories.     
        </p>
        <div class="center-img-div">
            <img class="img_s" src="assets/media/tutorial3_commands.png" alt="commands">
        </div>
        <p class="center-section-txt">Step #4 - To change the name of a directory (folder) on Windows Command Prompt, you can use the
            "ren" command, which is short for "rename."" The following image represents the basic syntax (on the macOS Terminal, you can use the "mv" command).
        </p>
        <div class="center-img-div">
            <img class="img_s" src="assets/media/tutorial4_rem.png" alt="Rename">
        </div>
        <p class="center-section-txt">Step #5 - You can create a new folder (directory) on Windows Command Prompt
            using the "mkdir" command. Here is an example of the basic syntax:
            mkdir folder_name (in this case mkdir Tutorial).
        </p>
        <div class="center-img-div">
            <img class="img_s" src="assets/media/tutorial5_mkdir.png" alt="mkdir">
        </div>
        <p class="center-section-txt">These were some of the most basic commands we used because we wanted to just give a small glimpse into how Unix operates. 
            We hope that you found it to be useful. On a final note, We believe that now would be a great time for the Quiz!
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