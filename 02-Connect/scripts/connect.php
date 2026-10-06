<?php
    // Connection variables:
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbfirst";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Testing the connection:
    if(!$conn) {
        die("Error, does not work");
    } else {
        echo("You are connected");
    }
    // Error if it does not work:
?>