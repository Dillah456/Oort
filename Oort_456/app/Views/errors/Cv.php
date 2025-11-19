<?php 
 $data['diri'] = $diri;
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curriculum Vitae - Najwa Abdillah Ramadlan</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <style>
    body {
      background: #f9fafb;
      font-family: 'Poppins', sans-serif;
    }
    .cv_section .card {
      border-radius: 15px;
      border: none;
    }
    .cv_section h4 {
      font-weight: 600;
    }
    .text-primary {
      color: #0056b3 !important;
    }
    @media (max-width: 768px) {
      .cv_section {
        padding: 2rem 1rem;
      }
    }
  </style>
</head>

<body>
<section class="cv_section py-5">
  <div class="container">
    <div class="text-center mb-5">
      <img src="<?= base_url('assets/images/IMG_20220816_072018.jpg') ?>" 
           alt="Profile Picture" 
           class="rounded-circle mb-3 shadow" width="150">
      <h2 class="fw-bold"><?= esc($diri['Nama']) ?></h2>
      <p class="text-muted">Mahasiswa Informatika | Pengembang Sistem | Desainer UI</p>
    </div>

    <div class="row g-4">
      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="card shadow-sm p-3">
          <h4 class="mb-3">Kontak</h4>
          <ul class="list-unstyled">
            <li><i class="fa fa-envelope me-2 text-primary"></i> abdillahrnajwa367@gmail.com</li>
            <li><i class="fa fa-phone me-2 text-primary"></i> <?= esc($diri['Contact']) ?></li>
            <li><i class="fa fa-map-marker me-2 text-primary"></i> <?= esc($diri['Tempat_Lahir']) ?></li>
          </ul>
        </div>

        <div class="card shadow-sm p-3 mt-4">
          <h4 class="mb-3">Keahlian</h4>
          <ul class="list-unstyled mb-0">
            <li>💻 Pemrograman (Kotlin, PHP, Python)</li>
            <li>🎨 UI/UX Design</li>
            <li>🧠 Analisis Sistem & AI</li>
            <li>🌐 Web Development</li>
          </ul>
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-8">
        <!-- Pendidikan -->
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="fw-bold text-primary">Riwayat Pendidikan</h4>
          <hr>
          <?php if (!empty($pendidikan)): ?>
            <table class="table table-borderless align-middle">
              <tbody>
                <?php foreach ($pendidikan as $p): ?>
                  <tr>
                    <td><strong><?= esc($p['Tempat']) ?></strong></td>
                    <td><?= esc($p['Program']) ?></td>
                    <td><small class="text-muted"><?= esc($p['Periode']) ?> - <?= esc($p['Akhir']) ?></small></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          <?php else: ?>
            <p class="text-muted">Belum ada data pendidikan.</p>
          <?php endif; ?>
        </div>

        <!-- Pengalaman -->
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="fw-bold text-primary">Riwayat Pengalaman</h4>
          <hr>

          <?php foreach (['organisasi' => 'Organisasi', 'magang' => 'Magang', 'proyek' => 'Proyek'] as $key => $label): ?>
            <h6 class="fw-bold"><?= $label ?></h6>
            <?php if (!empty($$key)): ?>
              <?php foreach ($$key as $item): ?>
                <p>
                  <strong><?= esc($item['Tempat']) ?></strong>
                  (<?= esc($item['Periode']) ?> - <?= esc($item['Akhir']) ?>)<br>
                  <?= esc($item['Deskripsi']) ?>
                </p>
              <?php endforeach; ?>
            <?php else: ?>
              <p class="text-muted">Belum ada data <?= strtolower($label) ?>.</p>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <!-- Portofolio -->
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="fw-bold text-primary">Portofolio</h4>
          <hr>
          <div class="row g-3">
            <?php if (!empty($portofolio)): ?>
              <?php foreach ($portofolio as $pf): ?>
                <div class="col-sm-6 col-md-4">
                  <div class="card border-0 shadow-sm">
                    <img src="<?= base_url('assets/images/' . esc($pf['Gambar'])) ?>" class="card-img-top rounded" alt="<?= esc($pf['Judul']) ?>">
                    <div class="card-body p-2">
                      <h6 class="text-center"><?= esc($pf['Judul']) ?></h6>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>
            <?php else: ?>
              <p class="text-muted">Belum ada portofolio.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
  body { background: #f9fafb; font-family: 'Poppins', sans-serif; }
  .cv_section .card { border-radius: 15px; border: none; }
  .cv_section h4 { font-weight: 600; }
  .text-primary { color: #0056b3 !important; }
  @media (max-width: 768px) { .cv_section { padding: 2rem 1rem; } }
</style></body>
</html>


