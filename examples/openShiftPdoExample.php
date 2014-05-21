<?php

require("dbConnector.php");

/*$host = getenv('OPENSHIFT_MYSQL_DB_HOST');
$port = getenv('OPENSHIFT_MYSQL_DB_PORT');
$user = getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$password = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
*/

//$user = "php";
//$password = "php-pass";

try
{
//   $db = new PDO("mysql:host=$host:$port;dbname=testdb", $user, $password);

   $db = loadDatabase();

   foreach ($db->query("SELECT * FROM users") as $row)
   {
      echo "id: " . $row['id'] . " userName: " . $row['userName'] . "<br />";
   }

/*
   foreach ($db->query("SELECT username, password FROM user") as $row)
   {
      echo "user: " . $row['username'] . " password: " . $row['password'] . "<br />";
   }

   $statement = $db->query("SELECT username, password FROM user");

   while ($row = $statement->fetch(PDO::FETCH_ASSOC))
   {
      echo "user: " . $row['username'] . " password: " . $row['password'] . "<br />";
   }

   $statement = $db->query("SELECT username, password FROM user");
   $results = $statement->fetchAll(PDO::FETCH_ASSOC);
   var_dump($results);

   foreach ($results as $row)
   {
      echo "user: " . $row['username'] . " password: " . $row['password'] . "<br />";
   }
   */

}
catch (PDOException $ex)
{
   print "Error!: " . $ex->getMessage() . "<br />";
   die();
}

