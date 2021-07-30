<?php
echo "ok";

$servername="db";
$username="root";
$password="admin";

try
{
	$con = new PDO("mysql:host=$servername;port=3306;dbname=basedados",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo("success");
}
catch(PDOException $e)
{
	echo"Connection failed: " . $e->getMessage();
}

?>
