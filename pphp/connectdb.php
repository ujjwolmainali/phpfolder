<?php
$conn = mysqli_connect("localhost", "root", "", "dbtest");
if ($conn) {
  echo "database is connected";
} else {
  echo "not connected";
}
