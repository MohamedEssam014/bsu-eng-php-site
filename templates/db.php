<?php
$host = getenv('DB_HOST') ?: 'db';
$db   = getenv('DB_NAME') ?: 'bsu_eng';
$user = getenv('DB_USER') ?: 'bsu';
$pass = getenv('DB_PASS') ?: 'secret';
$charset = 'utf8mb4';
$dsn = "mysql:host={$host};dbname={$db};charset={$charset}";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try{
    $pdo = new PDO($dsn, $user, $pass, $options);
}catch(Exception $e){
    echo "<pre>DB connection error: " . htmlspecialchars($e->getMessage()) . "</pre>";
    exit;
}
