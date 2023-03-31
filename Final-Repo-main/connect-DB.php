<!-- Connecting -->
<?php
$databaseName = 'OWELFORD_final';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'owelford_admin';
$password = '0y1ejizPxiI8';

$pdo = new PDO($dsn, $username, $password);
?>
<!-- Connection complete -->
