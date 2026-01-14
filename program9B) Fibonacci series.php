<?php
$n=10;
$f1=0;
$f2=1;
echo "Fibonacci series up to $n terms:<br>";
echo $f1." ".$f2." ";
for($i=3;$i<=$n;$i++){
    $next=$f1+$f2;
    echo $next." ";
    $f1=$f2;
    $f2=$next;
}
?>
