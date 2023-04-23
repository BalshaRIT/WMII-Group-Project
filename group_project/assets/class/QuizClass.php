<?php

class QuizClass {

    private $my_database;

    function __construct($server, $user, $pass, $database) {

        $sql = new mysqli($server, $user, $pass, $database);

        if(mysqli_connect_errno()) {
            die("Connection unsuccessful!");
        }

        $this -> my_database = $sql;
    }

    function selectData() {
        $select = $this -> my_database -> query("SELECT Question, Answers FROM QuizData");
        if($select) {
            while($row = mysqli_fetch_array($select, MYSQLI_ASSOC)) {
                $rowArray[] = $row;
            }

            return $rowArray;
        }
    }

    function selectCorrectAnswers() {
        $correct = $this -> my_database -> query("SELECT CorrectAnswer FROM QuizData");
        if($correct) {
            while($answer = mysqli_fetch_array($correct, MYSQLI_ASSOC)) {
                $answer_array[] = $answer;
            }

            return $answer_array;
        }
    }
}

?>