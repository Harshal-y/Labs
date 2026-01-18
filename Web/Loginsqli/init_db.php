<?php
$db = new SQLite3(__DIR__ . '/users.db');

$db->exec("
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        username TEXT,
        password TEXT
    )
");

$db->exec("DELETE FROM users");

$db->exec("
    INSERT INTO users (username, password)
    VALUES ('admin', 'secret')
");

echo "SQLite database initialized!";
