<?php
    $conn = new mysqli('localhost', 'iste240t56', 'Pyrex3^sunlamp', 'iste240t56');

    if(mysqli_connect_errno()) {
        echo 'connection failed';
        exit();
    } else {
        // echo 'connection established';
    }
?>