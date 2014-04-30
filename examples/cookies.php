<!DOCTYPE html>
<html>
<head>
	<title>Cookie Tests</title>
</head>

<body>

<?php

session_start();

if (isset ($_SESSION["count"]))
{
	$count = $_SESSION["count"] + 1;
	$_SESSION["count"] = $count;
	echo "Welcome back again ($count time(s))";
}
else
{
	$_SESSION["count"] = 1;
	echo "Welcome first time user";
}



?>

</body>
</html>