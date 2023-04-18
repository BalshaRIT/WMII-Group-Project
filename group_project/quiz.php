<?php

    require_once "assets/class/QuizClass.php";

    $quiz_database = new QuizClass("localhost", "bb8512", "Verge5%megalocyte", "bb8512");
    $select_data = $quiz_database -> selectData();

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="assets/media/unix_logo.png">
    <link rel="stylesheet" href="assets/css/quiz.css">
    <script src="assets/java_script/script.js"></script>
    <title>UnixGuide | Quiz</title>

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
                    <a class="desktop-item" href="about.html">About</a>
                    <input id="show-drop-menu" type="checkbox">
                    <a id="invisible-about" href="about.html">Visit About</a>
                    <label class="mobile-item" for="show-drop-menu">About</label>
                    <ul class="drop-menu">
                        <li><a href="commands.html">Commands</a></li>
                        <li><a href="directories.html">Directories</a></li>
                        <li><a href="permissions.html">Permissions</a></li>
                        <li><a href="packages.html">Packages</a></li>
                    </ul>
                </li>
                <li><a href="history.html">History</a></li>
                <li>
                    <a class="desktop-item" href="types.html">Types</a>
                    <input id="show-mega-menu" type="checkbox">
                    <a id="invisible-types" href="about.html">Visit Types</a>
                    <label class="mobile-item" for="show-mega-menu">Types</label>
                    <ul class="mega-links">
                        <li><a href="oracle_solaris.html">Oracle Solaris</a></li>
                        <li><a href="darwin.html">Darwin</a></li>
                        <li><a href="ibm_aix.html">IBM AIX</a></li>
                        <li><a href="hp_ux.html">HP-UX</a></li>
                        <li><a href="free_bsd.html">FreeBSD</a></li>
                        <li><a href="net_bsd.html">NetBSD</a></li>
                        <li><a href="xenix.html">Xenix</a></li>
                        <li><a href="sgi_irix.html">SGI IRIX</a></li>
                        <li><a href="tru64_unix.html">TRU64 UNIX</a></li>
                        <li><a href="mac_os.html">macOS</a></li>
                    </ul>
                </li>
                <li><a href="tutorial.html">Tutorial</a></li>
                <li><a class="active-nav" href="quiz.php">Quiz</a></li>
                <li><a href="authors.html">Authors</a></li>
            </ul>
            <div class="btn-sign-up">
                <a href="sign_up.php">Sign Up</a>
            </div>
            <label class="nav-btns btn-menu" for="menu"><i class="fa fa-bars"></i></label>
        </div>
    </nav>

    <div class="main-div">
        <h1>UnixGuide Quiz</h1>
        <p class="center-section-txt">Welcome to the UnixGuide Quiz!<br><br>
                                      As we already mentioned, the purpose of this quiz is to help you understand the covered topic better. We would like to encourage you to go
                                      over the quiz as many times as you wish as it will help you with your work in the future.<br><br>
                                      Go ahead and give it your best shot!<br><br>
                                      Good luck!
        </p>
        <form action="quiz_results.php" method="post">
            <div class="border-div"></div>
            <?php
                for($i = 0; $i < sizeof($select_data); $i++) {
                    echo "<label>" . ($i + 1) . ". " . $select_data[$i]['Question'] . "</label><br><br>";

                    $answer = explode("#", $select_data[$i]['Answers']);
                    foreach($answer as $eachAnswer) {
                        echo "<input type=radio name=radio" . $i . " value='" . $eachAnswer . "' required>&emsp;" . $eachAnswer . "<br>";
                    }

                    echo "<div class=border-div></div>";
                }
            ?>
            <div class="btn-div">
                <button type="submit" name="submit" class="php-btn">Submit</button>
            </div>
        </form>
    </div>

    <div class="div-back-button">
        <a id="back-button" href="#top-of-page">&#9757;</a>
    </div>

    <footer>
        <p>&copy; 2023 UnixGuide | <a class="reference-link" href="references.html" target="_blank">References</a> | W&M Project</p>
    </footer>
    
</body>
</html>