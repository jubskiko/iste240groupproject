<?php 
    $title = "File Management";
    $path = "../";
    include($path . "./assets/inc/header.php");
?>

<body>

    <div class="container">

        <?php $activePage = "fileManagement"; include($path .  "./assets/inc/nav.php"); ?>

        <main class="content">

            <h1>UNIX: File Management</h1>

            <a class="locator" href="<?php echo $path; ?>index.php">Home/<?php echo $title; ?></a>

            <hr>

            <p>UNIX organizes files in a tree structure hierarchy.  For the system to function properly and to enable 
                effective data storage and retrieval, the file system structure is crucial.</p>

            <div class="treePhoto">
                <img src="../assets/img/tree.jpg" alt="Photo of file tree">
            </div>

            <p>The forward slash (/) character designates the root directory, which is the top-level directory in the file 
                system hierarchy. The root directory serves as the top-level storage location for all other directories and 
                files. System files, configuration data, and other significant directories like /bin, /usr, /home, and /etc 
                can be found in the root directory.</p>

            <p>In UNIX, directories are used to organize files. Directories can also organize other directories. Typing "/"
                denotes a directory in the terminal. For example, the /usr directory contains the directory /usr/bin. Files 
                are used to store data, programs, scripts, and other kinds of information. These files are identified by their 
                extensions, which reveal the type of file, and by a combination of letters, numbers, and special characters in 
                their names. For instance, .txt stands for a text file, .html for an HTML file, and .png for a picture file.</p>

            <p>File Management is important because it is responsible for efficiently organizing an individual's data. Some
                projects can consist of many different files, so it is good practice to properly organize your personal files
                in a way which is easy for you to understand.</p>

        </main>

    </div>

</body>

<?php 
    include($path . "./assets/inc/footer.php");
?>