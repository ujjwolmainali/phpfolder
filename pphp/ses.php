<?php
session_start();
$_SESSION["username"] = "john";
$_SESSION["email"] = "john@gmail.com";
echo "session started";
echo "username:" . $_SESSION["username"] . "<br>";
echo "email:" . $_SESSION["email"];
session_unset();
session_destroy();
echo "<br> session ended<br>";

if (isset($_SESSION["username"])) {
  echo "username:" . $_SESSION["username"] . "<br>";
} else {
  echo "username variable not set";
}
