<!DOCTYPE html>
<html>
<head>
	<title>Password Tester</title>
</head>

<body>
	<div>

<?php

require("password.php");

if (isset ($_POST["password"]))
{
	// form submission was made
	$yourPassword = htmlspecialchars($_POST["password"]);
	$yourPasswordHash = password_hash($yourPassword, PASSWORD_DEFAULT);

	$myPassword = "pass";
	$myPasswordHash = password_hash($myPassword, PASSWORD_DEFAULT);

	echo "My password is: $myPassword<br />";
	echo "It's hash is: $myPasswordHash<br /><br />";

	echo "Your guess is: $yourPassword<br />";
	echo "It's hash is: $yourPasswordHash<br /><br />";

	echo "According to password_verify, your password ";

	if (password_verify($yourPassword, $myPasswordHash))
	{
		echo "matches!<br />";
	}
	else
	{
		echo "DOES NOT match!<br />";
	}

}

?>
	<h1>Guess my password</h1>
	<form id="form1" method="POST">
		<input type="text" name="password" /><br />
		<input type="submit" value="Submit" /><br />
	</form>

	</div>
</body>
</html>
