<?php
require_once 'Example 10-01.php';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Fatal Error");

$query = "DROP TABLE cats";
$result = $conn->query($query);
if (!$result) die ("Database access failed");
?>