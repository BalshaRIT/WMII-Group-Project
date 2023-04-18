<?php

class UserClass {

    private $my_database;

    function __construct($server, $user, $pass, $data_base) {

        $sql = new mysqli($server, $user, $pass, $data_base);

        if(mysqli_connect_errno()) {
            die("Connection unsuccessful.");
        }

        $this -> my_database = $sql;
    }

    function getConnection() {
        return $this -> my_database;
    }

    function insertData($user_name, $password) {
        $insert = $this -> my_database -> prepare("INSERT INTO UserData(UserName, Password) VALUES(?, ?);");
        
        $hashed_pass = password_hash($password, PASSWORD_DEFAULT);
        
        $insert -> bind_param("ss", $user_name, $hashed_pass);
        $insert -> execute();
        $insert -> close();
    }
}

?>