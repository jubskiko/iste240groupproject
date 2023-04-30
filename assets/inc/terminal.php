<?php 
    include("../dbcon.php");

    $sql = "SELECT questions.id, questions.hint, questions.question, questions.correct_answer, questions.output
    FROM questions
    INNER JOIN unix_quiz ON questions.quiz_id = unix_quiz.id
    WHERE unix_quiz.title = 'Commands';";

	  $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }

    $conn->close();
?>
<script type="text/javascript">
  var questions_js = <?php echo json_encode($questions); ?>;
</script>
<head>
<link rel="stylesheet" href="<?php echo $path;?>/assets/styles/terminal.css">
</head>
<div id="terminal">
    <div id="top-bar">
        Use 'clear' to clear terminal
    </div>
    <div id="question-box">
      <div id="qt">

      </div>
        <div id="question">
      
        </div>
        <div id="hint">
            
        </div>
    </div>
  <div id="output"></div>
  <div id="input-line">
    <div id="prompt">$&nbsp;</div>
    <input type="text" id="command" autofocus />
  </div>
</div>
<script src="<?php echo $path;?>./assets/js/terminal.js"></script>