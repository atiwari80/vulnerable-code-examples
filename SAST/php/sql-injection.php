
5: $stmt->execute();
6:
7: foreach ( $stmt->fetchAll() as $row ) {
8:      $employee = $row['LastName'] . " - " . $row['Email'] . "\n";
9:      
10: echo $employee;
11: }
12: 
13: $db->close();
14: 