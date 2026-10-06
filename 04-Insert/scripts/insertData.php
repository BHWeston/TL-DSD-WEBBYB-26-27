<?php
    require("connect.php");
    $sSentGame = $_GET["sGameName"];
    // echo("The game is " . $sSentGame);

    $SQL = "INSERT INTO tblGames (gameName) VALUES ('$sSentGame');";

    echo($SQL);
    mysqli_query($conn, $SQL);
?>