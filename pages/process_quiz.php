<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $path = "../"; 
    include($path . "dbcon.php");

    $questions = array();
    $total_score = 0;

    foreach ($_POST as $key => $value) {
        if (strpos($key, 'answer_') === 0) {
            $question_id = substr($key, strlen('answer_'));
            $user_answer = $conn->real_escape_string($value);

            $sql = "SELECT * FROM easy WHERE id = $question_id LIMIT 1";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                $correct_answer = strtoupper($row['correct_answer']);
                if ($user_answer == $correct_answer) {
                    $total_score++;
                }
                $questions[] = array(
                    'question' => $row['question'],
                    'user_answer' => $user_answer,
                    'correct_answer' => $correct_answer
                );
            }
        }
    }

    $conn->close();
    $score_percent = ($total_score / count($questions)) * 100;
    $score_message = "You got $total_score out of " . count($questions) . " correct ($score_percent%).";

    $title = "Quiz Results";
    include($path . "assets/inc/header.php");
?>
<body>
    <div class="container">    
    <?php $activePage = "quiz"; include($path . "assets/inc/nav.php"); ?>
        <main class="content">
        <h1>Quiz Results</h1>
        <hr>
        <p><?php echo $score_message; ?></p>
        <table>
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Your Answer</th>
                    <th>Correct Answer</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($questions as $index => $question): ?>
                <tr>
                    <td><?php echo ($index + 1) . ". " . $question['question']; ?></td>
                    <td><?php echo $question['user_answer']; ?></td>
                    <td><?php echo $question['correct_answer']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        </main>
    </div>
<?php
    include($path . "assets/inc/footer.php");
} else {
    header("Location: ../index.php");
}
?>

