<?php

$phpinfo();

$password = "pass";

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

echo "Password: $password<br />\n";
echo "Password Hash: $passwordHash<br />\n";

?>