<?php
$username = 'jack';
$password = '123';

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
  if ($_SERVER['PHP_AUTH_USER'] == $username && $_SERVER['PHP_AUTH_PW'] == $password)

    echo "you are now logged in";

  else {
    die("invalid username/password combination");
  }
} else {
  header('WWW-Authenticate: Basic realm="Restricted area"');
  header('HTTP/1.0 401 Unauthorized');
  die("please enter your username and password");
}
