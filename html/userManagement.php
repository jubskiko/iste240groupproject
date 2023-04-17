<?php 
    $title = "User Management";
    $path = "../"; 
    include($path . "php/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "php/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>Operating systems like UNIX provide a variety of commands that help users carry out different tasks. 
                These commands are executed in what is known as the terminal, which is a text-based user interface 
                that enables a user to interact with the computer’s system.</p>

            <p>Some of the most common commands used in UNIX are listed below:</p>

            <ul>
                <li>pwd: Displays the directory you are currently in(also known as the present working directory)</li>
                <li>ls: Displays a list of the current directory's files and folders.</li>
                <li>cd: Changes the current directory. For example, ‘cd /home/yourName’ takes you to the home directory 
                    of the user 'yourName'.</li>
                <li>mkdir: Creates a new directory. For example, ‘mkdir yourFolder’ creates a directory named 'yourFolder' 
                    in the current directory.</li>
                <li> rmdir: Removes an empty directory. For example, ‘rmdir yourFolder’ removes the directory named 'yourFolder' 
                    in the current directory.</li>
                <li>cp: Creates a copy of files and directories. For example, ‘cp yourFile.doc yourNewFile.doc creates a copy of 
                    'yourFile.doc' and names it 'yourNewFile.txt'.</li>
                <li>mv: Moves or renames files and directories. For example, ‘mv yourFile.doc/home/yourName’ moves 'yourFile.doc' 
                    to the home directory of the user 'yourName'.</li>
                <li>rm: Removes files and directories. For example, ‘rm yourFile.doc’ deletes the file named 'yourFile.doc'.</li>
                <li>cat: Displays the contents of a file. For example, ‘cat yourFile.txt’ displays the contents of the file 'yourFile.doc'.</li>
                <li>echo: Returns a value to the terminal. For example, ‘echo "Hello, World."’ prints 'Hello, World.' to the terminal.</li>
                <li>Note: the ‘-l’ option displays the files' details, such as their date, owner, size, and permissions.</li>
            </ul>

            <p>These commands allow the user to have a broad range of options and controls that can be used to efficiently structure their 
                data repositories. While these are some of the most common and consistently used commands, they only brush the surface of 
                what UNIX can really do.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "php/footer.php");
?>
