<?php 
    $title = "Shell Scripting";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>Shell scripting is a scripting feature of UNIX that allows users to automate tasks and perform operations. A 
                shell script is a text file containing a sequence of commands that are executed by the shell, which is the 
                command-line interpreter for Unix-based systems. This shell script text file is ended with the ‘.sh’ extension.</p>

            <p>The script’s first line should be ‘#!/bin/bash’ to indicate the desired shell interpreter. Variables are used by shell 
                scripts to store data and values. You can instantiate a variable by giving it a name. For example, ‘name=Austin’ 
                creates a variable labeled ‘name’  with the value of ‘Austin’.</p>

            <div class="shellScriptPhoto">
                <img src="../assets/img/shellScript.webp" alt="Photo of shell script">
            </div>

            <p>A script's flow can be managed using control structures based on conditions or loops. Whereas the "for" and "while" loops 
                are used to repeatedly run commands, the "if" statement is used to execute commands based on a condition. The "read" 
                command in a shell script can be used to read input from a user or a file, while the "echo" function can be used to 
                display output to the console. Shell scripts also provide the ability to run commands and then use the results as a 
                value for a variable or command. For instance, myFiles=$(ls)" runs the "ls" command and stores the results in the 
                "myFiles" variable. </p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
