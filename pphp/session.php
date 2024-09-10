<?php
session_start();
$_SESSION['username'] = "saumhz";

if (isset($_SESSION['username'])) {
    echo $_SESSION['username'];
} else {
    echo "Session is not set.";
    session_unset();
    session_destroy();
}
