<?php
// read of file 
// if (($handle = fopen("sau.txt", "r")) != false) {
//     $row = fgets($handle);
//     echo $row;
// }


// write in file
// $str = "Trust me i am a programer.";
// if (($handle = fopen("sau.txt", "w")) != false) {
//     $row = fputs($handle, $str);
//     echo $row;
// }

//apend 
$str = "Trust me i am a top programmer.";
if (($handle = fopen("sau.txt", "a")) != false) {
    $row = fputs($handle, $str);
    echo $row;
}
fclose($handle);
