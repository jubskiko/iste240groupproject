<?php
    include("../dbcon.php");

    function getQuizQuestions($conn) {
        $sql = "SELECT * FROM easy";
        $result = $conn->query($sql);
        $questions = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $questions[$row['id']] = $row;
            }
        }
        return $questions;
    }

    if (isset($_POST["submit"])) {
        $score = 0;
        $questions = getQuizQuestions($conn);

        foreach ($questions as $question) {
            $answer = isset($_POST["answer_" . $question["id"]]) ? $_POST["answer_" . $question["id"]] : null;
            if ($answer === $question["correct_answer"]) {
                $score++;
            }
        }

        echo "Your score: " . $score . "/" . count($questions);
        $conn->close();
    }
?>
