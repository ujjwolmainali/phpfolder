<?php
$a = 12;
$b = 0;
// if ($b == 0) {
//     die("Error:Divided by xero is not allowed");
// }
// echo "hello world";

try {
    if ($b == 0) {
        throw new Exception("Divided by zero is not allowed.");
    }
} catch (Exception $e) {
    echo $e->getmessage();
} finally {
    echo "<br>hello world";
}
echo "<br>after finally";
