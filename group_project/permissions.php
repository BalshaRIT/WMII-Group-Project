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
    <title>About | Permissions</title>

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
                        <li><a class="active-nav" href="permissions.php">Permissions</a></li>
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
        <h1>Unix Permissions</h1>
        <p class="center-section-txt">Unix permissions are a security feature that were first introduced in the early'
            1970s as part of the Unix operating system, which was developed by Ken Thompson and Dennis Ritchie at Bell Labs.
            Unix permissions control access to files and directories, and are used to determine who can read, write, or execute
            a file or directory.
        </p>
        <div class="center-img-div">
            <img class="wide-img" src="assets/media/unix_permissions1.png" alt="Unix Permissions">
        </div>
        <p class="center-section-txt">One interesting aspect of Unix permissions is their simplicity and transparency.
            Unix permissions are based on a set of three basic permissions: read (represented by the letter "r"),
            write (represented by the letter "w"), and execute (represented by the letter "x").
            Each file or directory in the Unix file system is associated with a set of permissions that specifies which
            users or groups are allowed to perform each of these actions.
        </p>
        <div class="section-div">
            <div class="img-div full-div">
                <img class="square-img" src="assets/media/unix_penguin.png" alt="Unix Penguin">
            </div>
            <p class="section-txt width">Another interesting aspect of Unix permissions is their use of the "owner/group/other" model.
                In Unix, each file or directory is associated with an owner and a group,
                which are used to determine the permissions that apply to that file or directory.
                The owner of a file or directory is typically the user who created it, while the group is a collection
                of users who have been granted specific permissions by the system administrator.
            </p>
        </div>
        <p class="center-section-txt">Another interesting aspect of Unix permissions is the use of special permission bits,
            such as the set-uid, set-gid, and sticky bits. These special bits provide additional control over how files and
            directories are accessed and executed, and can be used to set default permissions for newly created files and
            directories, ensure that files and directories are only modified by their owners, or allow users to execute files'
            with elevated privileges.
        </p>
        <div class="center-img-div">
            <img class="wide-img permissions-img2" src="assets/media/unix_permissions2.png" alt="Unix Permissions">
        </div>
        <p class="center-section-txt">Overall, Unix permissions are a powerful and flexible security feature
             that have played a critical role in the development and success of the Unix operating system.
              Their simplicity and transparency make them easy to understand and use, while their owner/group/other model provides
               a flexible and customizable approach to controlling access to files and directories.</p>
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>
    
</body>
</html>