$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$statement = $mysqli->prepare('SELECT user FROM users WHERE id = ?');
$statement->bind_param('i', $id);
$result = $statement->execute();
