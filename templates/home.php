<div class="row">
  <div class="col-md-8">
    <h2><?= $lang==='ar' ? 'أحدث الأخبار' : 'Latest News' ?></h2>
    <?php foreach($news as $n): ?>
      <div class="card mb-3">
        <div class="card-body">
          <h5 class="card-title"><?= htmlspecialchars($lang==='ar' ? $n['title_ar'] : $n['title_en']) ?></h5>
          <p class="card-text"><?= nl2br(htmlspecialchars($lang==='ar' ? $n['body_ar'] : $n['body_en'])) ?></p>
          <small class="text-muted"><?= $n['published_at'] ?></small>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="col-md-4">
    <h4><?= $lang==='ar' ? 'الخدمات' : 'Services' ?></h4>
    <ul class="list-group">
      <li class="list-group-item"><a href="/?page=departments&lang=<?= $lang ?>"><?= $lang==='ar' ? 'الأقسام' : 'Departments' ?></a></li>
      <li class="list-group-item"><a href="/?page=staff&lang=<?= $lang ?>"><?= $lang==='ar' ? 'هيئة التدريس' : 'Staff' ?></a></li>
      <li class="list-group-item"><a href="/?page=home&lang=<?= $lang ?>#contact"><?= $lang==='ar' ? 'اتصل بنا' : 'Contact' ?></a></li>
    </ul>
  </div>
</div>
