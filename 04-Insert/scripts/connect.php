<?php

    // Connection variables:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbgames";
    // Connect
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking:
    if(!$conn){
        die("Error");
    }
?>