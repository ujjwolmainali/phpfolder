<?php
$conn = mysqli_connect("localhost", "root", "", "auth");
if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
  $firstname = $_SERVER['PHP_AUTH_USER'];
  $password = $_SERVER['PHP_AUTH_PW'];

  $sql = "select * from auth where firstname='$firstname'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows == 0) {
    die("invalid username/password combnation");
  } else {
    echo "welcome to secreat room {$firstname}";
  }
} else {
  header('WWW-Authenticate: Basic realm="Restricted area"');
  header('HTTP/1.0 401 Unauthorized');
  die("please enter your username and password");
}
// $conn->close();
