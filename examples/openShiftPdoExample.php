<?php

require("dbConnector.php");

/*
$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$db = new PDO("mysql:host=$host:$port;dbname=testdb", $user, $password);
*/

try
{

   $db = loadDatabase();

   foreach ($db->query("SELECT * FROM users") as $row)
   {
      echo "id: " . $row['id'] . " userName: " . $row['userName'] . "<br />";
   }
}
catch (PDOException $ex)
{
   print "Error!: " . $ex->getMessage() . "<br />";
   die();
}

