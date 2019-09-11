<?php 
//Connection Credentials
$servername = 'localhost';
$username = 'root';
$password = "";
$database = "ussd";
    // Create connection
    $db = new mysqli($servername, $username, $password, $database);
    // Check connection
    if ($db->connect_error) {
        header('Content-type: text/plain');
        die("END An error was encountered. Please try again later");
    } 
    //echo "Connected successfully (".$db->host_info.")";
?>
