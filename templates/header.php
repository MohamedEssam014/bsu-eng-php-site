<?php
$lang_attr = $lang === 'en' ? 'en' : 'ar';
$dir = $lang === 'en' ? 'ltr' : 'rtl';
?><!doctype html>
<html lang="<?= $lang_attr ?>" dir="<?= $dir ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $lang === 'en' ? 'Faculty of Engineering' : 'كلية الهندسة' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php if($lang === 'ar'): ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-rtl@4.2.1/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <style>body{font-family: 'Tajawal', sans-serif;}</style>
  <?php endif; ?>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-white bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand" href="/?lang=<?= $lang ?>"><?= $lang==='ar' ? 'كلية الهندسة' : 'Faculty of Engineering' ?></a>
    <div>
      <a class="btn btn-link" href="/?lang=ar">عربي</a> | <a class="btn btn-link" href="/?lang=en">EN</a>
      <a class="btn btn-primary ms-2" href="/admin/login.php">Admin</a>
    </div>
  </div>
</nav>
<div class="container mt-4">
