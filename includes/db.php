<?php
$host = "localhost";
$user = "root";
        //username which provided by XAMPP.
$password = "";
        // Password is blank (in XAMPP).
$db = "croviser";
        //name of the database.
// session_start();
//creates a session
$con = mysqli_connect($host,$user,$password,$db); //connect my sql database.
if($con === false) // if connection failed.
{
    die("connection error");
    // print message and exit from the current php script.

}
mysqli_select_db($con,$db);
?>