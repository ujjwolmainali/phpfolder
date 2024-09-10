<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
        </tr>

        <?php

        include("connection.php");
        $sql = "Select * from details";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_object($result)) {
                echo "<tr>";
                echo "<td>" . $row->ID . "</td>";
                echo "<td>" . $row->Name . "</td>";
                echo "<td>" . $row->Email . "</td>";
                echo "<td>" . $row->Phone . "</td>";
                echo "<td>" . $row->Gender . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'> No result found.> </td></tr>";
        }

        ?>
    </table>
</body>

</html>