<!DOCTYPE html>
<html>
<head>
	<title>Movies</title>
</head>

<body>

<?php

$user = "php";
$password = "php-pass";

if (isset($_GET["movieName"]))
{
	$movieName = $_GET["movieName"];

	echo "<h1>Actors for movies like '$movieName'</h1>";

	try
	{
		$db = new PDO("mysql:host=127.0.0.1;dbname=movies", $user, $password);

		$movieSearch = "%" . $movieName . '%';

		$statement = $db->prepare("SELECT a.name, m.title FROM actor AS a INNER JOIN actormovie AS am ON a.id = am.actorId INNER JOIN movie AS m ON am.movieId = m.id WHERE m.Title like :title ORDER BY m.title;");
		$statement->bindValue(":title", $movieSearch, PDO::PARAM_STR);
		$statement->execute();

		while ($row = $statement->fetch(PDO::FETCH_ASSOC))
		{
			echo $row["title"] . " -- " . $row["name"] . "<br />\n";
		}

	}
	catch (PDOException $ex)
	{
		echo "Error connecting. Details: $ex";
		die();
	}

}
?>

<br /><br />

<form METHOD="GET" ACTION="">
	Movie: <input type="text" name="movieName" />
	<input type="submit" value="Find movie!" />

</form>

</body>
</html>