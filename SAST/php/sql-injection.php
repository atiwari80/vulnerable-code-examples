<?php 
 // Fix the SQL injection vulnerability by using a prepared statement
$stmt = $file_db->prepare("SELECT * FROM employees WHERE employeeId = :id");
$stmt->bindParam('id', $_GET['id'], PDO::PARAM_INT);
$stmt->execute();

foreach ( $stmt->fetchAll() as $row ) {
     $employee = $row[\'LastName\'] . " - " . $row[\'Email\'] . "\n";
     
     echo $employee;
}