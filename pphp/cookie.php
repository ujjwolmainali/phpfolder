<?php
// setcookie("Name", "Sau", time() + (24 * 60 * 60), "/");
setcookie("Name", "Sau", time() + (24 * 60 * 60), "/");
if (isset($_COOKIE['Name'])) {
    echo $_COOKIE['Name'];
} else {
    echo "Cookie is not set.";
}
