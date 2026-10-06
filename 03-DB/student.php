<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student View</title>
</head>
<body>
    <h1>Student Page</h1>
    <!-- Add in PHP :) -->
     <?php
        require("scripts/connect.php");

        $sql = "SELECT * FROM tblstudents";
        $result = mysqli_query($conn, $sql);

        // print_r($result);
        while($row = mysqli_fetch_assoc($result)){
            echo($row["Firstname"]);
            echo("<br/>");

            // Firstname is: xx
            // Surname is: xx
            // Course is: xx
        }
     ?>
</body>
</html>