<?php
$backgroundcolor=array(
    "Monday" =>"lightblue",
    "Tuesday" =>"lightgreen",
    "Wednesday" =>"lightyellow",
    "Thursday" =>"lightpink",
    "Friday" =>"lightgrey",
    "Saturday" =>"orange",
    "Sunday" =>"violet"
);
$dayofweek=date("l");
if($dayofweek=="sunday"){
    $color=$background["Sunday"];
}elseif($dayofweek=="Monday"){
    $color=$backgroundcolor["Monday"];
}elseif($dayofweek=="Tuesday"){
    $color=$backgroundcolor["Tuesday"];
}elseif($dayofweek=="Wednesday"){
    $color=$backgroundcolor["Wednesday"];
}elseif($dayofweek=="Thursday"){
    $color=$backgroundcolor["Thursday"];
}elseif($dayofweek=="Friday"){
    $color=$backgroundcolor["Friday"];
}else{//Saturday
    $coloe=$backgroundcolor["Saturday"];
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    background-color:<?php echo $color;?>
}       
</style>
</head>
<body>
    <h1>Today is <?php echo $dayofweek;?>!</h1>
</body>
</html>