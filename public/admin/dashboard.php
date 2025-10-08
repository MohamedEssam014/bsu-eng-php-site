<?php
session_start();
require_once __DIR__ . '/../../templates/db.php';
if(!isset($_SESSION['admin'])){
    header('Location: /admin/login.php');
    exit;
}
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['create_news'])){
    $title_en = $_POST['title_en'] ?? '';
    $title_ar = $_POST['title_ar'] ?? '';
    $body_en = $_POST['body_en'] ?? '';
    $body_ar = $_POST['body_ar'] ?? '';
    $stmt = $pdo->prepare('INSERT INTO news (title_en,title_ar,body_en,body_ar) VALUES (?,?,?,?)');
    $stmt->execute([$title_en,$title_ar,$body_en,$body_ar]);
    header('Location: /admin/dashboard.php');
    exit;
}
$news = $pdo->query('SELECT * FROM news ORDER BY published_at DESC')->fetchAll();
?>
<!doctype html><html><head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head><body class="p-4">
<div class="container">
  <h3>Admin Dashboard</h3>
  <a class="btn btn-secondary mb-3" href="/">Visit site</a>
  <h4>Create News</h4>
  <form method="post" class="mb-4">
    <input type="hidden" name="create_news" value="1">
    <div class="row">
      <div class="col"><input name="title_en" class="form-control" placeholder="Title (EN)"></div>
      <div class="col"><input name="title_ar" class="form-control" placeholder="العنوان (AR)"></div>
    </div>
    <div class="row mt-2">
      <div class="col"><textarea name="body_en" class="form-control" placeholder="Body (EN)"></textarea></div>
      <div class="col"><textarea name="body_ar" class="form-control" placeholder="المحتوى (AR)"></textarea></div>
    </div>
    <button class="btn btn-primary mt-2">Create</button>
  </form>

  <h4>Existing News</h4>
  <table class="table">
    <thead><tr><th>ID</th><th>Title EN</th><th>Title AR</th><th>Published</th></tr></thead>
    <tbody>
      <?php foreach($news as $n): ?>
        <tr><td><?= $n['id'] ?></td><td><?= htmlspecialchars($n['title_en']) ?></td><td><?= htmlspecialchars($n['title_ar']) ?></td><td><?= $n['published_at'] ?></td></tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
</body></html>
