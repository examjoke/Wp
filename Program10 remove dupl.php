<?php
$arr=array(1,2,2,3,4,4,4,5,6,6);
echo"original sorted List:,br>";
print_r($arr);
$result=array_unique($arr);
echo",br><br>List after removing duplicates:<br>";
print_r($result);
?>