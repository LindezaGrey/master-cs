<?php

$ini = parse_ini_file('../config/app.ini');
$host = $ini['db_host'];
$dbname = $ini['db_name'];
$username = $ini['db_user'];
$password = $ini['db_password'];

$dsn = "mysql:host=$host;dbname=$dbname";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false
];
try {
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// export pdo so that other files can use it
return $pdo;
