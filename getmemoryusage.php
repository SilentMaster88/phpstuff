<?php
// get the size of memoery used in a script php:
// Print memory usage before the script:
echo memory_get_usage() . "\n";

// Sample code to test:
echo "<hr>";
while (list($data1, $data2)=each($_SERVER)){
echo "$data1 ---> $data2<br>";
} echo "<hr>";

// print the memory usage after the script:
echo memory_get_usage() . "\n";
?>
