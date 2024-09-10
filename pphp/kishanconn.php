<?php
//connecting to database
$conn = mysqli_connect("localhost", "root", "", "ujjwol");

if ($conn) {
  echo "Connected to database.<br>";
} else {
  echo ("Not connected to database.<br>");
}
