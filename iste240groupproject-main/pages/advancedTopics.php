<?php 
    $title = "Advanced Topics";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <hr>

            <p>Within UNIX exists three permission types: read, write, and execute. These permissions are granted to 
                the owner of a file or directory, the group to which the file or directory belongs, and each user on 
                the system in turn. A combination of letters and numbers are used to specify the permissions for each of these groups.</p>

            <p> In addition to other information mentioned before, the 'ls -l' command can be used to view a file or directory's permissions. 
                Permissions of a file or directory can be modified with the 'chmod' command. This command allows you to add or remove 
                permissions for each of the three groups of users. UNIX also provides two more security features, access control lists, 
                and file ownership.</p>

            <p>The ownership of a file identifies its owner and determines who has the power to modify the file's rights and attributes. 
                You can more precisely manage which users or groups can access which files and folders by setting permissions for certain 
                users or groups using ACLs. A popular technique for safely connecting to remote systems via a network is called Secure 
                Shell (SSH). It offers a safe means to access a distant system, run commands, send data, and control network functions.</p>

            <p>System Administration, network security, and software development are all incorporated with SSH. Both the SSH client and SSH 
                server are required to use SSH. The program that connects to the remote system is known as the SSH client, whereas the software 
                that runs on the remote system and offers the SSH service is known as the SSH server. You need to know the distant system's IP 
                address or hostname as well as a working username and password in order to connect to it via SSH.</p>

            <p>There are numerous other features and settings available with SSH in addition to the core capability. SSH can be used, 
                for instance, to tunnel network traffic, forward ports, and authenticate users using public key encryption. SSH also 
                allows key-based authentication, which offers a more secure alternative to entering a password when authenticating to 
                a remote machine.</p>

            <p>On a UNIX system, services and daemons are background processes that run continuously and carry out duties like managing network 
                connections, operating web servers, and handling email. System administration includes managing these activities since doing so 
                can help to ensure the efficient and effective operation of the system.</p>

            <p>There are a number of commands and tools available to manage services and daemons on a Unix-based system, including: systemctl - 
                start, stop, restart, enable or disable services and view the status of services. chkconfig - view status and configure services 
                to start at boot time. ps - view a list of running processes on the system, including services and daemons. Top displays real-time 
                information about CPU usage, memory usage, and the processes currently running.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
