<?php

$userInput = "";

if (isset($_GET["userInput"]))
{
   $userInput = $_GET["userInput"];   
}

for ($i = 0; $i < 10; $i++)
{
   echo "$userInput$i<br />";
}

?>
