            $stmt = $mysqli->prepare('INSERT INTO collection (id, name, description) VALUES (?, ?, ?)');
            $stmt->bind_param('sss', $id, $name, $description);
            $stmt->execute();
            $stmt->close();
        