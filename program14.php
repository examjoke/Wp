<!DOCTYPE html>
<html>
<head>
  <title>Read and Write File In PHP</title>
</head>
<body>
   <h2>Write and Read File Example<h2>

<form method="post">
<label>Enter Text To Save In File:</label><br>
<textarea name="content" rows="5" cols="40"></textarea><br><br>
<input type="submit" name="write" value="Write to File">
<input type="submit" name="read" value="Read from File">
</form>

<hr>

<?php
$filename="myfile.txt";

if(isSet($_POST['write'])){
$data=trim($_POST['content']);

if(!empty($data)){
$file=fopen($filename,"a") or die("Unable to open file!");

fwrite($file,$data. "\n");
fclose($file);
echo "<p style='color:green;'>Data Successfully written to filename</p>";
}
}

if(isSet($_POST['read'])){
if(file_exists($filename) && filesize($filename)>0){
   $content=file_get_contents($filename);
   echo "<h3>content of $filename:</h3><pre>$content</pre>";
}else{
echo "<p style='color:red;'>File Does not exist or is empty.Write some content first!</p>";
}
}
?>
</body>
</html>