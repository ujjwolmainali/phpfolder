
<?php

include("connection.php");
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mail = $_POST['email'];
    $number = $_POST['phone'];

    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";


    $sql = "INSERT INTO Details(`Name`,`Email`,`Phone`,`Gender`) 
         VALUES('$name','$mail','$number','$gender')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Data inserted successfully.<br>";
    } else {
        echo "Data is not inserted.";
    }
} else {
    header("location:html.php");
}

?>