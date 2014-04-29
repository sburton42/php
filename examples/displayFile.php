<html>

<body>

<div>

<?php

$file = fopen("file.txt", "r") or die("Error opening file.");

if ($file == false)
{
   echo "Error, could not open file";
   exit();
}

while (!feof($file))
{
   $str = fgets($file);
   
   echo "$str<br />";
}

fclose($file);

$outputFile = fopen("file.txt", "a") or die ("Error opening file.");

fwrite($outputFile, "Paged visited.\n");

fclose($outputFile);

?>

</div>
</body>
</html>
