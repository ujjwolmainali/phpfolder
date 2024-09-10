 <?php
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $phone;
  } else {
    header('location:building_forms.php');
  }


  ?>