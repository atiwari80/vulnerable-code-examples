function addElement(&$array) { // %content%

    $cmd = escapeshellarg($_GET['name']); // Changed: Add escapeshellarg for command injection vulnerability prevention
    return $array; // %content%
