<?php

require("connect.php");
$sentID =$_GET["ID"];


$sql=" DELETE FROM tblGames WHERE gameID = $sentID";

mysqli_query($conn, $sql);

header("Location:../index.php");
?>