<?php
session_start();
require_once __DIR__ . '/../templates/db.php';
require_once __DIR__ . '/../templates/helpers.php';

if(isset($_GET['lang'])){
    $lang = $_GET['lang'] === 'en' ? 'en' : 'ar';
    $_SESSION['lang'] = $lang;
}
$lang = $_SESSION['lang'] ?? 'ar';

$page = $_GET['page'] ?? 'home';

$newsStmt = $pdo->query('SELECT * FROM news ORDER BY published_at DESC LIMIT 10');
$news = $newsStmt->fetchAll(PDO::FETCH_ASSOC);

include __DIR__ . '/../templates/header.php';

if($page === 'home') {
    include __DIR__ . '/../templates/home.php';
} elseif($page === 'departments') {
    $deptStmt = $pdo->query('SELECT * FROM departments');
    $depts = $deptStmt->fetchAll(PDO::FETCH_ASSOC);
    include __DIR__ . '/../templates/departments.php';
} elseif($page === 'staff') {
    $staffStmt = $pdo->query('SELECT * FROM staff');
    $staffs = $staffStmt->fetchAll(PDO::FETCH_ASSOC);
    include __DIR__ . '/../templates/staff.php';
} else {
    echo '<div class="container mt-5">Page not found</div>';
}

include __DIR__ . '/../templates/footer.php';
