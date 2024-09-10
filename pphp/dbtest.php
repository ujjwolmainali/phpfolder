<?php
include("connectdb.php");
if (isset($_POST['delete'])) {


  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $sqll = "INSERT INTO practice (`full_name`, `email`,`phone`) VALUES ('$name','$email','$phone')";
  $sql = "delete from practice where `id`= 5";
  $a = mysqli_query($conn, $sqll,);
  $b = mysqli_query($conn, $sql);

  if ($a) {
    echo "data entered successfully";
  } else {
    echo "new records were not made";
  }
  if ($b) {
    echo "deleeted";
  }
} else {
  header("location:databasejnis.php ");
}
