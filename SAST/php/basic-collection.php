$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
$stmt = $mysqli->prepare("SELECT * FROM users WHERE name = ?");
$stmt->bind_param("s", $name);
$stmt->execute(); /* you can get all results and display them using $stmt */
$stmt->close();
