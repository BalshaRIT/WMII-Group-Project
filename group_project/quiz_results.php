<?php

    session_name('UserLogin');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "assets/class/QuizClass.php";

        $quiz_database = new QuizClass("localhost", "bb8512", "Verge5%megalocyte", "bb8512");
        $questions = $quiz_database -> selectData();
        $correct_answers = $quiz_database -> selectCorrectAnswers();
    
        $rightAnswers = 0;
        
        for($i = 0; $i < sizeof($correct_answers); $i++) {
            $user_answers[] = $_POST['radio' . $i];
            if($_POST['radio' . $i] == $correct_answers[$i]['CorrectAnswer']) {
                $rightAnswers++;
            }
        }
    }else {
        header("location: quiz.php");
    }

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
    <title>UnixGuide | Quiz Results</title>

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
                <li><a href="tutorial.php">Tutorial</a></li>
                <li><a class="active-nav" href="quiz.php">Quiz</a></li>
                <li><a href="authors.php">Authors</a></li>
            </ul>
            <?php
                echo "<div id='user-name'>" . $_SESSION['name'] . "</div>";
            ?>
            <label class="nav-btns btn-menu" for="menu"><i class="fa fa-bars"></i></label>
        </div>
    </nav>

    <div class="results-main-div">
        <h1>Quiz Results</h1>
        <?php
            echo "<p class=results>" . "Your result: " . $rightAnswers . "/" . sizeof($correct_answers) . "</p><br>";
            echo "<p class=results-description>The following section represents the correct answers.</p>";
            echo "<div class=border-div></div>";
            for($i = 0; $i < sizeof($correct_answers); $i++) {
                echo "<p class=question>" . ($i + 1) . ". " . $questions[$i]['Question'] . "</p><br>";
                echo "<p class=result>" . "Your Answer ---> " . "<span class=user-answer>" . $user_answers[$i] . "</span>" . "</p>";
                echo "<p class=result>" . "Correct Answer ---> " . "<span class=correct-answer>" . $correct_answers[$i]['CorrectAnswer'] . "</span>" . "</p>";
                echo "<div class=border-div></div>";
            }
        ?>
        <p class="bottom-section-txt">If you feel as if you have done poorly on the quiz, feel free to go over the content once more, as well as the quiz, until
                                      you feel confident that you understand the covered topic in its entirety.
        </p>
        <div class="btn-div">
            <a class="php-btn" href="quiz.php">Back To Quiz</a>
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