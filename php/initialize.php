<?php
session_start(); // turn on sessions

// php required files imports
require_once('db_connection.php');
require_once('query_functions.php');
require_once('user_session.php');

// initialize db connection to variable $db
$db = db_connect();
$errors = [];

?>