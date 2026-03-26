<?php
// save.php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    if ($data) {
        // Uloží všetko do súboru database.json na tvojom hostingu
        file_put_contents('database.json', $data);
        echo json_encode(["status" => "success"]);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (file_exists('database.json')) {
        echo file_get_contents('database.json');
    } else {
        echo "{}";
    }
}
?>
