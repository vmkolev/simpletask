<?php
$hostname	= "mysql";
$dbname		= "dbtest";
$username	= "root";
$password	= "passwordroot";

try {

	$conn = new PDO( "mysql:host=$hostname;dbname=$dbname", $username, $password );

	// Configure PDO error mode
	$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

	echo "Connected successfully to $dbname";

}
catch( PDOException $e ) {

	echo "Failed to connect: " . $e->getMessage();
}

echo "<br>";
echo "<br>";
echo "Connected successfully to $dbname from app2";
echo "<br>";
// Close the connection
$conn = null;
