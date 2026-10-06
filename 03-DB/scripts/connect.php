<?php

    // Connection variables:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbstudents";
    // Connect
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Checking:
    if(!$conn){
        die("Error");
    }
?>