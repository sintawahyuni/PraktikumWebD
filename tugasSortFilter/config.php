<?php
$databaseHost = 'localhost';
$databaseName = 'tgs_simak';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if (!$mysqli)
    {
        echo "<h1>Koneksi gagal</h1>";
    }
?>