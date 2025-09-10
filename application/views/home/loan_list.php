<!doctype html>
<html lang="sw">
<head>
  <meta charset="utf-8">
  <title>Orodha ya Maombi ya Mikopo</title>
  <style>
    body{font-family:sans-serif}
    table{border-collapse:collapse;width:100%}
    th,td{border:1px solid #ddd;padding:8px}
    th{background:#f2f2f2}
    .btn{padding:6px 10px;border:1px solid #333;text-decoration:none;margin-right:6px}
  </style>
</head>
<body>
  <h2>Orodha ya Maombi</h2>
  <?php if($this->session->flashdata('success')): ?>
    <div style="color:green"><?= $this->session->flashdata('success');?></div>
  <?php endif;?>
  <p><a href="<?= site_url('loans/create');?>" class="btn">➕ Maombi Mapya</a></p>

  <table>
    <thead>
      <tr>
        <th>#</th>
        <th>Jina la Mwombaji</th>
        <th>Simu</th>
        <th>Kiasi (TZS)</th>
        <th>Tarehe</th>
        <th>Vitendo</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($records as $r): ?>
      <tr>
        <td><?= $r->id; ?></td>
        <td><?= htmlspecialchars($r->first_name.' '.$r->last_name, ENT_QUOTES,'UTF-8'); ?></td>
        <td><?= htmlspecialchars($r->phone, ENT_QUOTES,'UTF-8'); ?></td>
        <td class="right"><?= number_format($r->amount_requested,2); ?></td>
        <td><?= $r->created_at; ?></td>
        <td>
          <!-- <a class="btn" href="<?= site_url('welcome/'.$r->id);?>">👁️ View</a> -->
          <a class="btn" href="<?= site_url('welcome/'.$r->id.'/pdf');?>">⬇️ PDF</a>
        </td>
      </tr>
      <?php endforeach;?>
    </tbody>
  </table>
</body>
</html>
