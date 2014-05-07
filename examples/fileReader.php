<!DOCTYPE html>
<html>
<head>
   <title>Book list</title>
</head>

<body>

<?php

$file = fopen("books.txt", "r");

while ($line = fgets($file))
{
   echo '<span class="book">' . $line . '</span><br />';
}

fclose($file);

$content = file_get_contents("books.txt");

$array = explode("\n", $content);

foreach ($array as $book)
{
   echo '<span class="book">' . $book . '</span><br />';
}

$backTogether = implode(":,:!~~!:,:", $array);
echo "Imploded: $backTogether<br/>";

?>

</body>

</html>
