<?php

/**
 * Get the database connection
 *  @return object Connection to a MySqL server
 */
function getDB (){
$db_host = "localhost";
$db_user = "cms_www";
$db_pass = "kreator1986";
$db_name = "cms";

// method to coonect to databes --> stored to variable 
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

//checking for connection errors
if (mysqli_connect_error()) {
    echo mysqli_connect_error();
exit;

}
return $conn;
}