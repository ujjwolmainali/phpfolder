 <?php
  if (isset($_GET['submit'])) {
    $name = $_GET['name'] . "<br>";
    $name1 = $_GET['name1'] . "<br>";
    $email = $_GET['email'] . "<br>";
    $phone = $_GET['phone'];

    echo $name;
    echo $name1;
    echo $email;
    echo $phone;
  } else {
    header('location:example1.php');
  }

  ?>