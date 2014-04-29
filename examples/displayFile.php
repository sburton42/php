<html>

<body>

<div>

<?php

$file = fopen("file.txt", "r") or die("Error opening file.");

while (!feof($file))
{
   $str = fgets($file);
   
   echo "$str<br />";
}

fclose($file);

?>

</div>
</body>
</html>
