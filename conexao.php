<?php
$user = 'root';
$password = ''; // Altere para sua senha, se houver
$database = 'cliente';
$port = NULL;

$mysqli = new mysqli('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
?>
