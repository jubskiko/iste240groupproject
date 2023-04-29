<?php 
    $title = "Getting Started";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <a class="locator" href="<?php echo $path; ?>index.php">Home/<?php echo $title; ?></a>

            <hr>

            <p>An essential part of utilizing the operating system under UNIX is logging in and out. It enables users to 
                log on to the system and carry out a range of operations, such as running programs, creating and editing 
                files, and managing system resources. You need to have a working login and password in order to log into 
                UNIX. Once completed, you can follow these instructions on how to log into UNIX.</p>

            <ul>
                <li>First, activate a terminal window: You can do this by clicking on the terminal icon or by hitting the Ctrl + Alt + T keys.</li>
                <li>You’ll be prompted to enter your username: Enter your username and hit the Enter key.</li>
                <li>You’ll be prompted to enter your password: Enter your password when prompted, then hit the Enter key.</li>
            </ul>

            <p>Done! Now, you're currently logged in. You will see the command prompt after successfully logging in to the system. If this doesn’t work, 
                it may be because you entered an invalid username or password.</p>

            <p>Now that you’ve logged in and done some work, it’s time to log out. You should follow these steps in order to correctly log out:</p>

            <ul>
                <li>First, save any open files.</li>
                <li>At the command prompt, type the word "exit" and press Enter(As an alternative, you can use the UNIX command "logout", however 
                    not all UNIX systems support this command).</li>
            </ul>

            <p>Done! You've just logged off. You will be returned to the login screen after you log out. Logging out of UNIX is critical to keeping 
                your data safe. It helps prevent others from gaining access to your files which can contain sensitive information that you don’t 
                want to be made public.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
