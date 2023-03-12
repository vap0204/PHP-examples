<?php
$name = isset($_GET['firstName']) ? $_GET['lastName'] : '';
$surname = isset($_GET['lName']) ? $_GET['lName'] : '';
$greeting = "Здравей, " . $surname . " " . $surname . "!";
echo $greeting;

?>