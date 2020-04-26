<?php 
// DB credentials.
define('DB_HOST','aamhm63itk9d75.c2hltscwcoz4.us-east-1.rds.amazonaws.com');
define('DB_USER','root');
define('DB_PASS','elmsroot');
define('DB_NAME','elms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
