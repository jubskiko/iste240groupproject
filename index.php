<?php 
    $title = "Welcome To UNIX Survival Guide";
    $path = "./"; 
    include($path . "assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>Welcome to the *team name* UNIX Survival Guide! This website contains all the information a 
                UNIX user would find helpful, including file management, system maintenance, and shell scripting.</p>

            <p>If you are new to UNIX, you may be wondering what exactly UNIX is or how it is useful. Well, UNIX 
                is a computer operating system used to execute programs on the computer. UNIX is widely used and 
                an essential file management tool, especially for a developer.</p>

            <div class="terminalPhoto">
                <img src="assets/img/terminal2.png" alt="Photo of terminal">
            </div> 
            
            <p> UNIX was initially developed in 1969 at the Bell Labs in Murray Hill, New Jersey. Researchers Dennis 
                Ritchie and Ken Thompson are accredited as the original developers of UNIX, known initially as AT&T 
                UNIX. AT&T eventually sold its rights to UNIX and they landed in the hands of The Open Group, an 
                "industry consortium" that allows anyone to use their services in order to create universal standards.</p>

            <p>Today, UNIX is widely dependent due to its stability in that it is uncommon to crash. Moreover, UNIX provides 
                excellent encryption protocols that increase the security protecting your files. However, many UNIX operating 
                systems lack a user-friendly interface which can make tasks seem more difficult to do. UNIX is also somewhat 
                complex and can be challenging for new users to learn.</p>

            <p>There are hundreds of different commands available to use that can really confuse you if you’re seeing them for 
                the first time. In order to find a more simplistic solution to teaching about the core features of UNIX, our 
                team has developed this website that makes the learning process a much simpler one. Test your knowledge by taking 
                our quizzes and refer back to our resources whenever it’s necessary.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "assets/inc/footer.php");
?>
