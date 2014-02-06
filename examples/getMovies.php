<?php


if (isset($_GET["actorId"]))
{
   $actorId = $_GET["actorId"];

   // I declared the db variables in this separate script.
   require_once("dbInfo.php");

   $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

   if ($conn->connect_errno)
   {
      echo "Failed to connect!" . $conn->connect_error;
   }

   // this helps some with sql injection, but prepared statments are
   // probably better
   $actorId = $conn->real_escape_string($actorId);

   $queryString = "SELECT m.title FROM movie AS m "
                . "JOIN `character` AS c ON m.id = c.movieId "
                . "JOIN actor AS a ON a.id = c.actorId "
                . "WHERE a.id = $actorId";

   $results = $conn->query($queryString);

   while ($row = $results->fetch_assoc())
   {
      echo $row["title"] . "\n";
   }

}
else
{
   echo "None";
}

?>
