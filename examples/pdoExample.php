<?php
$user = "php";
$password = "php-pass";

try
{
   $db = new PDO("mysql:host=127.0.0.1;dbname=myTestDB", $user, $password);

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

}
catch (PDOException $ex)
{
   print "Error!: " . $ex->getMessage() . "<br />";
   die();
}

