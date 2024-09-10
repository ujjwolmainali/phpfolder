<?php
include("connection.php");
if (isset($_POST['delete'])) {

    $sql = "delete from details where `ID`= 179";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data deleted successfully";
    } else {
        echo "Error deleting record.";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<form action="D_delete.php" method="post">
    <input type="submit" value="Delete" name="delete">
</form>

<body>

</body>

</html>