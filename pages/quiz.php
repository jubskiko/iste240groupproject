<?php 
    $title = "Quiz";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
    include($path . "dbcon.php");

    function getQuizQuestions($conn) {
        $sql = "SELECT * FROM easy ORDER BY RAND() LIMIT 5";
        $result = $conn->query($sql);
        $questions = array();

        if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }
        }
        return $questions;
    }

    $questions = getQuizQuestions($conn);
    $submitted = isset($_POST["submit"]) && isset($_POST["ajax"]);

    if ($submitted) {
        $score = 0;

        foreach ($questions as $question) {
        $answer = $_POST["answer_" . $question["id"]];
        if ($answer === $question["correct_answer"]) {
            $score++;
        }
        }

        echo $score;
        exit;
    }
?>
<script>
    function submitQuiz(event) {
        event.preventDefault();

        var form = document.getElementById("quizForm");
        var formData = new FormData(form);
        formData.append("ajax", "1"); // Add an additional POST parameter
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
            var score = xhr.responseText;
            alert("Your score: " + score + "/" + <?php echo count($questions); ?>);
        }
        };

            xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
            xhr.send(formData);
    }
</script>

<body>

<div class="container">    

<?php include($path . "./assets/inc/nav.php"); ?>

<main class="content">

    <h1><?php echo($title)?></h1>

    <hr>

    <form id="quizForm" onsubmit="submitQuiz(event)">
        <?php foreach ($questions as $index => $question): ?>
        <p>
            <?php echo ($index + 1) . ". " . $question["question"]; ?>
        </p>
        <?php foreach (range('A', 'D') as $choice): ?>
            <input type="radio" name="answer_<?php echo $question["id"]; ?>" value="<?php echo $choice; ?>" required>
            <?php echo $choice . ": " . $question["choice_" . strtolower($choice)]; ?><br>
        <?php endforeach; ?>
        <?php endforeach; ?>
        <br>
        <input type="submit" name="submit" value="Submit Quiz">
    </form>
</main>
<?php 
    include($path . "./assets/inc/footer.php");
?>
