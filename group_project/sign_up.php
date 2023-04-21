<?php
    
    if(!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['conf']) && passwordMatch() == true) {
        require_once "assets/class/UserClass.php";

        $user_database = new UserClass("localhost", "root", "baki2506", "UnixGuide");
        $user_database -> insertData($_POST['username'], $_POST['pass']);

        header("location: log_in.php");
    }

    function passwordMatch() {
        if(strcmp($_POST['pass'], $_POST['conf']) == 0) {
            return true;
        }

        return false;
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/sign_up.css">
    <link rel="icon" type="image/x-icon" href="assets/media/unix_logo.png">
    <title>UnixGuide | User Sign Up</title>

</head>
<body>

    <div class="main-div">
        <h1>Welcome to UnixGuide!</h1>
        <p class="info">In order to create an account, please fill out the following fields.</p>
        <div class="form-div">
            <form action="sign_up.php" method="post">
                <label>User Name</label><br>
                <input type="text" name="username" id="user" required>
                <br>
                <br>
                <label>Password</label><br>
                <input type="password" name="pass" id="pass" required>
                <br>
                <br>
                <label>Confirm Password</label><br>
                <input type="password" name="conf" id="conf" required>
                <br>
                <br>
                <div class="button-div">
                    <button type="submit" id="btn-submit">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="login-div">
            <p class="question">Already have an account? <a class="login-link" href="log_in.php">Log In</a></p>
        </div>
    </div>
    
</body>
</html>