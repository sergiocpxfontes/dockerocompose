<?php
echo "ok";

$servername="teste";
$username="root";
$password="admin";

try
{
	$con = new PDO("mysql:host=$servername;port=3307;dbname=basedados",$username,$password);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo("success");
}
catch(PDOException $e)
{
	echo"Connection failed: " . $e->getMessage();
}

?>