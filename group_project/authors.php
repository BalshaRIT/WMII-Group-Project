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
    <link rel="stylesheet" href="assets/css/authors.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | Authors</title>

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
                <li><a class="active-nav" href="authors.php">Authors</a></li>
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

    <div class="section-div">
        <img class="author-img" src="assets/media/balsha.jpg" alt="Balša Bazović">
        <div class="author-info">
            <h2>Balša Bazović - PM</h2>
            <p class="section-txt">Hello! My name is Balša Bazović. I am a 24-year-old freshman currently enrolled at RIT Croatia.
                I have been assigned the role of project manager for this project, leveraging my strong leadership and organizational 
                skills. With a passion for technology and a keen eye for detail, I am well-equipped to manage the project's workflow, 
                timeline, and resources.
            </p>
            <p class="socials-txt">Make sure to check out my social media content!</p>
            <div class="icons-div">
                <a href="https://www.facebook.com/balsa.bazovic/" target="_blank"><img class="socials-icon first-icon" src="assets/media/facebook_icon.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/_baza7_/" target="_blank"><img class="socials-icon next-icon" src="assets/media/instagram_icon.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/bal%C5%A1a-bazovi%C4%87-6227a2201/" target="_blank"><img class="socials-icon next-icon" src="assets/media/linkedIn_icon.png" alt="LinkedIn"></a>
            </div>
        </div>
    </div>

    <div class="section-div reverse-section">
        <div class="author-info">
            <h2>Aleksa Ivanović - JS & MySQL</h2>
            <p class="section-txt">Hello! My name is Aleksa Ivanović. I am a 19-year-old freshman currently enrolled at RIT Croatia.
                I have been assigned to work on JavaScript and MySQL database for this project. With my strong technical skills and
                keen attention to detail, I am well-equipped to tackle the complex tasks of coding and database management.
            </p>
            <p class="socials-txt">Make sure to check out my social media content!</p>
            <div class="icons-div">
                <a href="https://www.facebook.com/aleksa.ivanovic.9484" target="_blank"><img class="socials-icon first-icon" src="assets/media/facebook_icon.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/ivanovicaleksa/" target="_blank"><img class="socials-icon next-icon" src="assets/media/instagram_icon.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/in/aleksa-ivanovic-405204228/" target="_blank"><img class="socials-icon next-icon" src="assets/media/linkedIn_icon.png" alt="LinkedIn"></a>
            </div>
        </div>
        <img class="author-img" src="assets/media/aleksa.jpg" alt="Aleksa Ivanović">
    </div>

    <div class="section-div">
        <img class="author-img" src="assets/media/matej.jpg" alt="Matej Radović">
        <div class="author-info">
            <h2>Matej Radović - HTML & CSS</h2>
            <p class="section-txt">Hello! My name is Matej Radović. I am a 19-year-old freshman currently enrolled at RIT Croatia.
                For this project, I have been assigned to work on HTML and CSS. With my passion for technology and dedication to learning,
                I have made a significant contribution to the project. I am committed to developing my skills in web development and determined
                to become an expert in this field.
            </p>
            <p class="socials-txt">Make sure to check out my social media content!</p>
            <div class="icons-div">
                <a href="https://www.facebook.com/matej.radovic.79" target="_blank"><img class="socials-icon first-icon" src="assets/media/facebook_icon.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/matej.radovic/" target="_blank"><img class="socials-icon next-icon" src="assets/media/instagram_icon.png" alt="Instagram"></a>
                <a href="https://www.linkedin.com/feed/" target="_blank"><img class="socials-icon next-icon" src="assets/media/linkedIn_icon.png" alt="LinkedIn"></a>
            </div>
        </div>
    </div>

    <div class="section-div reverse-section">
        <div class="author-info">
        <h2>Nora Brkić - UI/UX Design</h2>
        <p class="section-txt">Hello! My name is Nora Brkić. I am a 21-year-old, 2nd-year student, currently enrolled at RIT Croatia. I have been 
            assigned the role of UI/UX designer for this project, leveraging my creative flair and eye for design. With my passion for technology 
            and keen attention to detail, I am well-equipped to create visually appealing and user-friendly interfaces.
        </p>
        <p class="socials-txt">Make sure to check out my social media content!</p>
        <div class="icons-div">
            <a href="https://www.facebook.com/nora.brkic.7" target="_blank"><img class="socials-icon first-icon" src="assets/media/facebook_icon.png" alt="Facebook"></a>
            <a href="https://www.instagram.com/norabrkic/" target="_blank"><img class="socials-icon next-icon" src="assets/media/instagram_icon.png" alt="Instagram"></a>
            <a href="https://www.linkedin.com/in/nora-brki%C4%87-277b2122b/" target="_blank"><img class="socials-icon next-icon" src="assets/media/linkedIn_icon.png" alt="LinkedIn"></a>
        </div>
        </div>
        <img class="author-img" src="assets/media/nora.jpg" alt="Nora Brkić">
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>
    
</body>
</html>