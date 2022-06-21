<?php
// Connect to mysqli
$mysqli = new mysqli("db","devuser","devpass","test_db");

// Check connection
if ($mysqli -> connect_errno) {
echo "Failed to connect to MySQL: " . $mysqli->connect_error;
exit();
}