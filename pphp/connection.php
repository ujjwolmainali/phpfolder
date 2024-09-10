<?php
$conn = mysqli_connect("localhost", "root", "", "practise");

if ($conn) {
    echo "Connected to database.<br>";
} else {
    die("Not connected to database.<br>");
}
