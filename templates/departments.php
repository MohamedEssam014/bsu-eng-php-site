<h2><?= $lang==='ar' ? 'الأقسام' : 'Departments' ?></h2>
<div class="row">
<?php foreach($depts as $d): ?>
  <div class="col-md-6">
    <div class="card mb-3">
      <div class="card-body">
        <h5><?= htmlspecialchars($lang==='ar' ? $d['name_ar'] : $d['name_en']) ?></h5>
        <p><?= nl2br(htmlspecialchars($lang==='ar' ? $d['description_ar'] : $d['description_en'])) ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>
