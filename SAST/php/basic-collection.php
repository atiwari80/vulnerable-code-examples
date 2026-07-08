10	$stmt = $mysqli->prepare('INSERT INTO collection (id, name, description) VALUES (?, ?, ?)');\n\t\t\t$stmt->bind_param('sss', $id, $name, $description);
			$stmt->execute();
			$stmt->close();

