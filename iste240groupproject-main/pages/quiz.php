<?php 
    $title = "Quiz";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>
<body>

<div class="container">    

    <?php include($path . "./assets/inc/nav.php"); ?>

    <main class="content">

        <h1><?php echo($title)?></h1>

        <hr>

        <p>
            So now that you have learned your way around using Unix, are you ready to test your knowledge?
        </p>

        <ul>
            <li><button onclick="easyTest();">Easy Test</button></li>
            <li><button onclick="mediumTest();">Medium Test</button></li>
            <li><button onclick="hardTest();">Hard Test</button></li>
        </ul>
    </main>

</div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
