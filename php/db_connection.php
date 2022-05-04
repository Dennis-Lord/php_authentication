<?php
// functions to interact with database (phpmyadmin)
// db name - blog_db
// tables - admins, blog_posts

// credentials
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "blog_db";

// create a db connection
function db_connect() {
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "blog_db";
$connection = mysqli_connect($servername, $username, $password, $db_name);
return $connection;
}

// close db connection
function db_disconnect($connection) {
    if(isset($connection)) {    
        msqli_close($connection);
    }
}

?>