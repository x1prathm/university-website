<?php
// Lightweight JSON-based storage helpers (no database required)

define('DATA_DIR', realpath(__DIR__ . '/../data'));

// Ensure data directory exists
if (!file_exists(DATA_DIR)) {
    mkdir(DATA_DIR, 0777, true);
}

function json_load($filename) {
    $path = DATA_DIR . DIRECTORY_SEPARATOR . $filename;
    if (!file_exists($path)) {
        file_put_contents($path, json_encode([]));
    }
    $raw = file_get_contents($path);
    $data = json_decode($raw, true);
    if (!is_array($data)) {
        $data = [];
    }
    return $data;
}

function json_save($filename, $data) {
    $path = DATA_DIR . DIRECTORY_SEPARATOR . $filename;
    file_put_contents($path, json_encode($data, JSON_PRETTY_PRINT));
}

// User helpers
function load_users() {
    return json_load('users.json');
}

function save_users($users) {
    json_save('users.json', $users);
}

?>
