<?php 
    $title = "System Maintenance";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>In Unix, performing routine system maintenance is crucial to maintaining the operating system's effectiveness. 
                Updates to the system are essential for stability and security. Patches, bug fixes, and new features can all 
                be installed using the package manager of your distribution. The system may gather unused apps, log files, 
                temporary files, and log files over time. These files may consume significant disk space and cause the system to lag.</p>

            <p>Large files can be found using the "du" and "df" commands, and then deleted using the "rm" command. Monitoring system performance 
                can aid in problem detection and downtime avoidance. Tools like "top," "htop," or "sar" can be used to keep track of system 
                resources like CPU, memory, and disk consumption.</p>

            <p>To ensure that data is not lost in the event of hardware failure or system crashes, it is essential to back up the system. The "tar" 
                command can be used to make backup copies of files and directories that you can put on external storage. In order to make sure the 
                system has enough storage space for data and programs, you must manage your disk space.</p>

            <p>Seeing how much disk space is being used is the first step in controlling disk space. To view the amount of space utilized and 
                available on each file system, use the "df" command. Use the "du" command to find huge files and directories that are 
                consuming a lot of space (enter "du -sh *" to get the sizes of each directory in the current directory). Get rid of 
                any extra files, including temporary files, log files, and unneeded programs. The "rm" command can be used to delete 
                files and directories.</p>

            <p>By shrinking the size of the file, compression helps conserve disk space. To compress files, use the "gzip" or "bzip2" commands. The 
                "gunzip" or "bunzip2" command can be used to decompress compressed files. If you are out of disk space and deleting data is not 
                an option, you can increase the amount of disk space by adding a new hard drive or resizing the current disk using disk management 
                tools.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
