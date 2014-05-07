<html>
<body>
<?php

if (isset($_GET["txtName"]))
{
   $name = htmlspecialchars($_GET["txtName"]);
   echo "Your name is: $name";
}



?>
</body>
