<?php

/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );
/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");

$sqlQuery = "SELECT * FROM movies";
$result = mysql_query($sqlQuery);

if ($result) {
	$htmlString = "";
	$htmlString .=  "<table border='1'>";
	while ($movie = mysql_fetch_assoc($result))
	{
		$htmlString .=  "<tr>" ;
		$htmlString .=  "<td>";
		$htmlString .=  $movie["movie_id"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $movie["title"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $movie["runningtime"];
		$htmlString .=  "</td>";
		$htmlString .=  "<td>";
		$htmlString .=  $movie["rating"];
		$htmlString .=  "</td>";
		$htmlString .=  "</tr>";
		
	}
	$htmlString .=  "</table>";
	
	echo $htmlString ;
	
	
	
} else {
	
	die("Failure: " . mysql_error($link_id));
}





die("..");
















/*
 * Set up constant to ensure include files cannot be called on their own
*/
define ( "MY_APP", 1 );
/*
 * Set up a constant to your main application path
 */
define ( "APPLICATION_PATH", "application" );
define ( "TEMPLATE_PATH", APPLICATION_PATH . "/view" );
/*
 * Include the config.inc.php file
 */
include (APPLICATION_PATH . "/inc/config.inc.php");
include (APPLICATION_PATH . "/inc/db.inc.php");

echo "Hello World";
