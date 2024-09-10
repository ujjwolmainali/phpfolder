<?php
//data retrieve and storing in database
include("kishanconn.php");
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $sql = "INSERT INTO ujjwol1 (`first_name`,`email`,`phone`) 
         VALUES('$name','$email','$phone')";
  $sqll = "delete from ujjwol1 where `id`=2";
  $sqlli = "update ujjwol1 set email='ujjwolmainali12@gmail.com' where `id` =3";
  $result = mysqli_query($conn, $sql);
  $result = mysqli_query($conn, $sqll);
  $result = mysqli_query($conn, $sqlli);
  if ($result) {
    echo "Data inserted successfully.<br>";
  } else {
    echo "Data is not inserted.";
  }
} else {
  header('location:kishan1.php');
}
