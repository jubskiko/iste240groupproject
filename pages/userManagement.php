<?php 
    $title = "User Management";
    $path = "../"; 
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">    

        <?php $activePage = "userManagement"; include($path . "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1><?php echo($title)?></h1>

            <a class="locator" href="<?php echo $path; ?>index.php">Home/<?php echo $title; ?></a>

            <hr>

            <p>The root account is the super account and has complete access to and controls the whole system. The root is used to 
                carry out tasks such as installing software, changing system settings, and managing user accounts. By default, the 
                root is created during the operating system installation process. The root account can also be used to identify and 
                address system problems that may have an impact on the system's functionality and security.</p>

            <p>User groups are used in UNIX to group users into logical sections and grant individuals in those groups access rights. 
                This helps organize user accounts and access rights for users. You can create a group by typing ‘groupadd yourGroupName’. 
                From there, you can use commands to further develop the group, such as the ‘-g’ command that creates an ID for the group, 
                or the ‘-f’ command that forces the creation of a new group even if an identical one already exists. To delete your group, 
                type “groupdel yourGroupName’.</p>

            <p>In UNIX, users can change their passwords using the ‘passwd’ command. By typing ‘passwd yourUsername’, you will be prompted 
                to enter your current password. Once completing that, you will be prompted to type a new password twice before it can be set 
                as the user’s new password. To add a user into a group, type ‘sudo usedmod -aG yourGroupName userName’. Similarly, to remove 
                a user from a group, type ‘sudo usedmod -G yourGroupName userName’. To check and set access rights, type ‘sudo visudo’ to open 
                the configuration file, from which you can enter ‘username  ALL=(ALL:ALL) ALL’. This line of code gives sudo permissions to 
                the user with the specified username. Don’t forget to save this file before closing it.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>
