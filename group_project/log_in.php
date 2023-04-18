<?php

    session_name('UserLogin');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        require_once "assets/class/UserClass.php";

        $user_database = new UserClass("localhost", "bb8512", "Verge5%megalocyte", "bb8512");
        
        $user = $user_database -> getConnection() -> prepare("SELECT Password FROM UserData WHERE UserName = ?;");
        $user -> bind_param("s", $_POST['username']);
        $user -> execute();
    
        $user -> bind_result($result);
    
        $user -> fetch();
        $user -> close();
    
        if(password_verify($_POST['pass'], $result)) {
            $_SESSION['login'] = true;
            $_SESSION['name'] = $_POST['username'];
    
            header("location: index.php");
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/log_in.css">
    <link rel="icon" type="image/x-icon" href="assets/media/unix_logo.png">
    <title>UnixGuide | User Verification</title>

</head>
<body>

    <div class="main-div">
        <h1>Welcome to UnixGuide!</h1>
        <p class="top-info">If you are a new user, please verify your account.<br>
                        If you are a returning user, log into your existing account.
        </p>
        <div class="form-div">
            <form action="" method="post">
                <label>User Name</label><br>
                <input type="text" name="username" id="user" required>
                <br>
                <br>
                <label>Password</label><br>
                <input type="password" name="pass" id="pass" required>
                <br>
                <br>
                <div class="button-div">
                    <button type="submit" id="btn-submit">Log In</button>
                </div>
            </form>
        </div>
        <p class="bottom-info">Happy learning!</p>
    </div>
    
</body>
</html>