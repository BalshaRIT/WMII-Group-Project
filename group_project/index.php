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
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | Home</title>

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
                <li><a href="index.php" class="active-nav">Home</a></li>
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

    <div class="welcome-div">
        <div>
            <?php
                if(!isset($_SESSION['name'])) {
                    echo "<h1>Welcome to UnixGuide!</h1>";
                }else {
                    echo "<h1>Welcome to UnixGuide " . $_SESSION['name'] . "!</h1>";
                }
            ?>
            <p class="welcome-sentence">
                <span>Discover</span>
                <span>UnixGuide,</span>
                <span>your</span>
                <span>comprehensive</span>
                <span>guide for</span>
                <span>Unix mastery,</span>
                <span>featuring </span>
                <span>in-depth</span>
                <span>tutorials,</span>
                <span>expert tips,</span>
                <span>and an</span>
                <span>engaged</span>
                <span>community for</span>
                <span>your</span>
                <span>development</span>
                <span>needs.<br><br></span>
                <span>&emsp;&emsp;Our goal</span>
                <span>was to</span>
                <span>create a website</span>
                <span>which is easy</span>
                <span>to navigate through,</span>
                <span>pleasing to the eye,</span>
                <span>and which is filled</span>
                <span>which plenty</span>
                <span>of content.</span>
                <span>Our UnixGuide</span>
                <span>website is</span>
                <span>completely free</span>
                <span>for anyone and</span>
                <span>everyone.</span>
                <span>By doing this,</span>
                <span>we wanted to encourage</span>
                <span>users to learn</span>
                <span>as much as</span>
                <span>possible about</span>
                <span>Unix while also</span>
                <span>wanting our</span>
                <span>users to keep</span>
                <span>coming back</span>
                <span>to us</span>
                <span>for further</span>
                <span>updates and</span>
                <span>interesting</span>
                <span>Unix related</span>
                <span>content.<br><br></span>
                <span>&emsp;&emsp;Our users</span>
                <span>can also</span>
                <span>sign up</span>
                <span>and create an</span>
                <span>account for free</span>
                <span>if they are</span>
                <span>interested in</span>
                <span>receiving notifications</span>
                <span>about future updates</span>
                <span>and releases.</span>
                <span>We just want our</span>
                <span>users to</span>
                <span>enjoy the</span>
                <span>content</span>
                <span>we put forth,</span>
                <span>and have fun</span>
                <span>through that</span>
                <span>same content.<br><br></span>
                <span>&emsp;&emsp;Without</span>
                <span>further ado,</span>
                <span>we would like</span>
                <span>to invite</span>
                <span>you to explore</span>
                <span>and enjoy</span>
                <span>UnixGuide.</span>
                <span>Happy learning</span>
                <span>and</span>
                <span>good luck!</span>
            </p>
        </div>
        <img class="circles-img" src="assets/media/circles_home.png" alt="Three Circles">
    </div>

    <div class="info1">
        <div class="div1">
            <h1 class="card-title">About</h1>
            <p>Unix is a powerful, multi-tasking operating system that has been around for over 50 years.
               Developed in the late 1960s by a group of computer scientists at Bell Labs,
               Unix quickly became popular among universities and businesses for its stability,
               flexibility, and ease of use.
               One of the key features of Unix is its command-line interface,
               which allows users to interact with the operating system using text commands.
            </p>
            <a class="learn-btn" href="about.php">Learn More</a>
        </div>
        <div class="div1">
            <h1 class="card-title">History</h1>
            <p>Over the years, Unix has undergone numerous revisions and upgrades,
               each one adding new features and capabilities to the system.
               One of the key strengths of Unix is its modular design,
               which allows it to be customized and adapted to meet the needs of a wide range of users and applications.
               Today, Unix remains an important and influential operating system, powering everything from PCs to smartphones.
            </p>
            <a class="learn-btn" href="history.php">Learn More</a>
        </div>
        <div class="div1">
            <h1 class="card-title">Types</h1>
            <p>Unix comes in different distributions including FreeBSD, Linux, Solaris,
               AIX, and HP-UX, each with its own unique features and benefits.
               Choose the one that fits your specific needs and requirements.
               Whether you need a robust and secure server environment or a flexible and customizable operating system for your desktop,
               Unix has something to offer. Explore the different distributions to find the one that works best for you.
            </p>
            <a class="learn-btn" href="types.php">Learn More</a>
        </div>
    </div>

    <div class="info2">
        <div class="div2">
            <div class="left-side">
                <div class="flip-box">
                    <div class="flip-box-inner">
                        <div class="flip-box-front">
                          <img src="assets/media/unix_img.png" alt="Paris" class="flip_img">
                          <figcaption class="caption">Hover For More Information</figcaption>
                        </div>
                        <div class="flip-box-back">
                          <h2>Unix Commands</h2>
                          <hr class="hLine">
                          <p>cdm</p>
                          <p>linux</p>
                          <p>ls</p>
                          <p>cd</p>
                          <p>mkdir</p>
                          <p>rm</p>
                          <p>rmdir</p>
                          <p>ssh</p>
                          <p>chmod</p>
                          <p>chown</p>
                          <p>tar</p>
                          <p>grep</p>
                          <p>mv</p>
                          <p>cp</p>
                          <p>cat</p>
                          <hr class="hLine">
                          <p>The most powerful OS.</p>
                        </div>
                      </div>
                </div>
            </div>
            <div class="right-side">
                <h3>"Unix is simple. It just takes a genius to understand its simplicity." - Dennis Ritchie</h3>
                <br>
                <p class="middle-info"><strong>Dennis Ritchie</strong>, one of the creators of the Unix operating system,
                   recognized the power and elegance of Unix commands, which can be used to accomplish complex
                   tasks in a simple and efficient way. The quote suggests that while Unix commands may
                   appear daunting at first, once you understand their underlying principles,
                   they become easy to use and incredibly powerful.
                </p>
                <div class="button-div">
                    <a class="learn-btn" href="about.php">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="info3">
        <div class="txt">
            <p class="quiz-info">We have also created a page dedicated to a quiz that is supposed to test your overall knowledge on Unix.
                We advise you to use try the quiz after you have gone through our entire website. It only covers the material that we have 
                put forth through out website. We found it to be very useful because it helps our users learn even more about the covered topic.
                We hope that you find the content and quiz as informational and interesting as we do. Hope you enjoy UnixGuide!
            </p>
            <div class="button-div">
                <a class="learn-btn" href="quiz.php">View Quiz</a>
            </div>
        </div>
        <img class="quiz-img" src="assets/media/quiz_img.png" alt="Quiz Image">
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>

</body>
</html>