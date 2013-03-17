<?php
include('functions.php');
include('config.php');


$newname = $_GET['newname'];
$name = $_GET['name'];
$link = connectToDB();
$res = @mysqli_query($link, "UPDATE instructor set name = '$newname' WHERE name = '$name'");
		if(!$res){
			die("Couldn't edit this instructor");
		}
@header("Location: adminaddinstructor.php");                
?>

  
