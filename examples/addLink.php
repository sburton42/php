<?php

$linkName = $_POST["linkName"];
$linkHref = $_POST["linkHref"];

$linkName = htmlspecialchars($linkName);
$linkHref = htmlspecialchars($linkHref);

$filename = "links.txt";
$file = fopen($filename, "a");

$line = $linkName . " | " . $linkHref . "\n";

fwrite($file, $line);

fclose($file);

header("Location: displayLinks.php");
die();

?>
