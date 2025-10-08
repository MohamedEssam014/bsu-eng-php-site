<h2><?= $lang==='ar' ? 'هيئة التدريس' : 'Staff' ?></h2>
<div class="row">
<?php foreach($staffs as $s): ?>
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="card-body">
        <h5><?= htmlspecialchars($lang==='ar' ? $s['name_ar'] : $s['name_en']) ?> — <?= htmlspecialchars($s['title']) ?></h5>
        <p><?= nl2br(htmlspecialchars($lang==='ar' ? $s['bio_ar'] : $s['bio_en'])) ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
