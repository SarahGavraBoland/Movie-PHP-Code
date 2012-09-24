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

if (!empty($_POST)) {
	
	echo "Page is posted";
	
	$movieTitle = $_POST["title"];
	
	$sqlQuery = "INSERT INTO movies (title,
			runningtime, 
			rating) 
			values ('$movieTitle','120','18')";
	$result = mysql_query($sqlQuery);
	
	if (!$result) {
	die("error" . mysql_error());	
		}
	}//end post
	

?>
<?php 
include (TEMPLATE_PATH . "/form_insert.html");
?>