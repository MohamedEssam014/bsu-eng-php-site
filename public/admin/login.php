<?php
session_start();
require_once __DIR__ . '/../../templates/db.php';

$error = '';
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $stmt = $pdo->prepare('SELECT * FROM users WHERE username = ?');
    $stmt->execute([$username]);
    $user = $stmt->fetch();
    if($user && password_verify($password, $user['password_hash'])){
        $_SESSION['admin'] = $user['username'];
        header('Location: /admin/dashboard.php');
        exit;
    } else {
        $error = 'Invalid credentials';
    }
}
?>
<!doctype html>
<html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="p-4">
<div class="container">
  <h3>Admin Login</h3>
  <?php if($error): ?><div class="alert alert-danger"><?= htmlspecialchars($error) ?></div><?php endif; ?>
  <form method="post">
    <div class="mb-3"><label>Username</label><input name="username" class="form-control"></div>
    <div class="mb-3"><label>Password</label><input name="password" type="password" class="form-control"></div>
    <button class="btn btn-primary">Login</button>
  </form>
</div>
</body></html>
