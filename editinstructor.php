<?php

include('functions.php');
include('config.php');


$link = connectToDB();

if (isset($_GET['newname'])) {
    $newname = $_GET['newname'];
    $name = $_GET['name'];
    $res = @mysqli_query($link, "UPDATE instructor set name = '$newname' WHERE name = '$name'");
    if (!$res) {
        die("Couldn't edit this instructor");
    }
}

if (isset($_GET['delete'])) {
    $res1 = @mysqli_query($link, "UPDATE instructor set deleted = '1' WHERE name = '$name'");
    if (!$res1) {
        die("Couldn't delete this instructor");
    }
}

@header("Location: adminaddinstructor.php");
?>


