<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Game Page</title>
</head>
<body>
    <?php
        require("scripts/connect.php");
        $sentID = $_GET["ID"];
        $sql="SELECT * FROM tblGames WHERE GameID=$sentID";
        //echo $sql;

        $result = mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_assoc($result))
        {
        
    ?>
    <form action="#" method="post">
        <label for="sGameName">Game Name: </label>
        <input type="text" name="sGameName" id="sGameName" value='<?php echo($row['GameName']);?>'>

        <label for="iStock">In Stock: </label>
        <input type="number" name="iStock" id="iStock">

        <label for="iPrice">Price: </label>
        <input type="number" name="iPrice" id="iPrice">
    </form>

    <?php
        }
    ?>
</body>
</html>