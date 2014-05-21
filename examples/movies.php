<?php

$user = "php";
$password = "php-pass";

$movieName = "star wars";

try
{
	$db = new PDO("mysql:host=127.0.0.1;dbname=movies", $user, $password);

	$statement = $db->query("SELECT a.name FROM actor AS a INNER JOIN actormovie AS am ON a.id = am.actorId INNER JOIN movie AS m ON am.movieId = m.id WHERE m.Title LIKE '%star wars%';");

	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo "Actor: " . $row["name"] . "<br />\n";
	}

}
catch (PDOException $ex)
{
	echo "Error connecting. Details: $ex";
	die();
}

?>