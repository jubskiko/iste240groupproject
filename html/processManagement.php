<?php 
    $title = "Process Management";
    $path = "../"; 
    include($path . "php/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "php/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>What is process management? Process management in UNIX is the mechanism that regulates the entirety of 
                UNIX processes. A UNIX process is a running instance of a program. Each process is given a distinct 
                process ID (PID). The management of system resources and the maintenance of the system's effectiveness 
                is dependent on process management.</p>

            <p>The UNIX kernel generates a new process when a program is run in order to carry out the operation. With 
                the exception of the process ID and a few other attributes, the new process is an exact duplicate of 
                the parent process. The new process can carry out its own set of instructions and runs independently of 
                the parent process.</p>

            <p>There are three possible states for a UNIX process to be in: running, sleeping, and stopped. A process is 
                running if it is currently operating. A sleeping process is a process that is expected to operate under 
                future conditions. A stopped process is a process that is no longer actively running. A stopped process 
                keeps its state still stored in memory in case it is requested to run again. A process is erased from 
                memory once it has finished running or has been stopped by the user or the operating system. The process 
                is signaled to stop by the UNIX kernel.</p>

            <p>Some commands to control processes in UNIX include the ps, kill, and nice commands. The kill command terminates 
                the current process. The ps command displays the details about the currently active process(es). The scheduling 
                order of a process is determined by its priority, which can be changed using the nice command.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "php/footer.php");
?>
