<?php
function isPrime($num){
    if($num<=1) return false;
    for($i=2;$i<=sqrt($num);$i++){
        if($num%$i==0){
            return false;
        }
    }
    return true;
}
echo "Prime numbers from 1 to 50 are:<br>";
for($n=1;$n<=50;$n++){
    if(isPrime($n)){
        echo $n." ";
    }
}
?>
