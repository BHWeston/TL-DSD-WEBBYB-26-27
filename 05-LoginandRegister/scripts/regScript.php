<?php
    require("connect.php");
    $sUsername = $_POST['sUsername'];
    $sPassword = $_POST['sPassword'];

    $hashed_password = password_hash($sPassword, PASSWORD_DEFAULT);

    $sql = "INSERT INTO tblUsers(Username, Password) VALUES ('$sUsername', '$hashed_password')";
    
    mysqli_query($conn, $sql);
?>