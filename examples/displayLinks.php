<!DOCTYPE html>
<html>
<head>
   <title>Link list</title>
</head>

<body>

<?php

$filename = "links.txt";

if (!file_exists($filename))
{
   die("File does not exist");
}

$file = fopen($filename, 'r');

while ($line = fgets($file))
{
   $parts = explode(" | ", $line);
   echo "<a href='http://{$parts[1]}'>{$parts[0]}</a><br />";
}

fclose($file);
?>

</body>

</html>
