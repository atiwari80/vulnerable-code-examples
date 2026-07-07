<?php
if (PHP_SAPI === 'cli') {
    parse_str(implode('&', array_slice($argv, 1)), $_GET);
}

$file_db = new PDO('sqlite:../database/database.sqlite');

if (NULL == $_GET['id']) $_GET['id'] = 1;

$sql = $file_db->prepare('SELECT * FROM employees WHERE employeeId = :id');
$sql->bindParam(':id', $_GET['id']);
$sql->execute();

foreach ($sql->fetchAll() as $row) {
    $employee = $row['LastName'] . " - " . $row['Email'] . "\n";

    echo $employee;
}
?>