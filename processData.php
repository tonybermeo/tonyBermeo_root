<?php
include("obj/dbConn.php");
$username = $_POST['usernameCreateUser'];
$Password = $_POST['passwordCreateUser'];
#echo $taskName;

$sql = "INSERT INTO users(Username,Password) 
		VALUES('".$username."','".$Password."')";

$rec = $conn->query( $sql );

header("location:admin.php");
?>
