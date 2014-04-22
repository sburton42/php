<!DOCTYPE html>
<html>
<head>
   <title>Movies</title>
   <script type="text/javascript" src="movies.js"></script>
   
</head>

<body>

<form id="form1">

<select name="actor" onchange="handleChange(this);">

<?php

// I declared the db variables in this separate script.
require_once("dbInfo.php");

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase);

if ($conn->connect_errno)
{
   echo "Failed to connect!" . $conn->connect_error;
}

$results = $conn->query("SELECT id, name FROM actor");

while ($row = $results->fetch_assoc())
{
   echo "<option value = \"" . $row["id"] . "\">" . $row["name"] . "</option>\n";
}

?>
</select>
</form>
</body>


</html>
