<?php
    $title = "Quiz";
    $path = "../"; 
    include $path . "dbcon.php";

    $sql = "SELECT *
            FROM easy 
            ORDER BY RAND() 
            LIMIT 5";
    $result = $conn->query($sql);
    $questions = array();

    // var_dump($result);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $questions[] = $row;
        }
    }

    include $path . "assets/inc/header.php";
?>

<body>
    <div class="container">    
        <?php include $path . "assets/inc/nav.php"; ?>
        <main class="content">
            <h1><?php echo $title ?></h1>
            <hr>
            <form id="quizForm" method="post" action="process_quiz.php">
                <?php foreach ($questions as $index => $question): ?>
                <p>
                    <?php echo ($index + 1) . ". " . $question["question"]; ?>
                </p>
                <?php foreach (range('A', 'D') as $choice): ?>
                <input type="radio" name="answer_<?php echo $question["id"]; ?>" value="<?php echo $choice; ?>" required>
                <?php echo $choice . ": " . $question["choice_" . strtolower($choice)]; ?><br>
                <?php endforeach; ?>
                <br>
                <?php endforeach; ?>
                <input type="submit" name="submit" value="Submit Quiz">
            </form>
        </main>
    </div>
</body>   
<?php include $path . "assets/inc/footer.php"; ?>
