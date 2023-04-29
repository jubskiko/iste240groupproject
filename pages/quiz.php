<?php
    $title = "Quiz";
    $path = "../"; 
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

    include($path . "assets/inc/header.php");
    
    $conn->close();
?>
<body>
    <div class="container">    

    <?php include($path . "assets/inc/nav.php"); ?>

        <main class="content">
            
            <h1><?php echo($title)?></h1>
            <a class="locator" href="<?php echo $path; ?>index.php">Home/<?php echo $title; ?></a>
            <hr>
            <form id="quizForm" action="process_quiz.php" method="post">
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
    </div>
</body>
<?php include($path . "assets/inc/footer.php"); ?>
