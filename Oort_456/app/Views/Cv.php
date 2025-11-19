<?php 

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
      <img src="assets/images/IMG_20220816_072018.jpg" alt="Profile Picture" class="rounded-circle mb-3 shadow" width="150">
      <h2 class="fw-bold"><?= esc($diri['Nama']) ?></h2>
      <p class="text-muted">
        Mahasiswa Informatika, tenggelam di dunianya plus tolong saya mudah capek kalau sosialisasi...<br>

      </p>
      <hr>
    </div>

    <div class="row g-4">
      <!-- Sidebar -->
      <div class="col-md-4">
        <div class="card shadow-sm p-3">
          <h4 class="mb-3">Kontak</h4>
          <ul class="list-unstyled">
            <li><i class="fa fa-envelope me-2 text-primary"></i>abdillahrnajwa367@gmail.com</li>
            <li><i class="fa fa-phone me-2 text-primary"></i><?= esc($diri['Contact']) ?></li>
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
        <!-- Pendidikan -->
<div class="card shadow-sm p-4 mb-4">
  <h4 class="fw-bold text-primary">Riwayat Pendidikan</h4>
  <hr>
  <?php if (!empty($pendidikan)): ?>
    <?php foreach ($pendidikan as $edu): ?>
      <div>
        <h5><?= esc($edu['Tempat']) ?></h5>
        <small class="text-muted">
          <?= esc($edu['Program']) ?> 
          (<?= esc($edu['Periode']) ?> - <?= esc($edu['Akhir']) ?>)
        </small>
        <?php if (!empty($edu['Deskripsi'])): ?>
          <p><?= esc($edu['Deskripsi']) ?></p>
        <?php endif; ?>
      </div>
      <hr>
    <?php endforeach; ?>
  <?php else: ?>
    <p class="text-muted">Belum ada data pendidikan yang tercatat.</p>
  <?php endif; ?>
</div>


        <!-- Pengalaman -->
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="fw-bold text-primary">Riwayat Pengalaman</h4>
          <hr>
          <h4>Organisasi</h4>
          <?php if (!empty($organisasi)): ?>
            <?php foreach ($organisasi as $azur): ?>
              <div>
                <h5><?= esc($azur['Tempat']) ?></h5>
                <small class="text-muted">
                  <?= esc($azur['Program']) ?> 
                  (<?= esc($azur['Periode']) ?> - <?= esc($azur['Akhir']) ?>)
                </small>
                <?php if (!empty($azur['Deskripsi'])): ?>
                  <p><?= esc($azur['Deskripsi']) ?></p>
                <?php endif; ?>
              </div>
              <hr>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="text-muted">Belum ada data yang tercatat.</p>
          <?php endif; ?>          

          <h4>Magang</h4>
          <?php if (!empty($magang)): ?>
            <?php foreach ($magang as $intern): ?>
              <div>
                <h5><?= esc($intern['Tempat']) ?></h5>
                <small class="text-muted">
                  <?= esc($intern['Program']) ?> 
                  (<?= esc($intern['Periode']) ?> - <?= esc($intern['Akhir']) ?>)
                </small>
                <?php if (!empty($intern['Deskripsi'])): ?>
                  <p><?= esc($intern['Deskripsi']) ?></p>
                <?php endif; ?>
              </div>
              <hr>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="text-muted">Belum ada data yang tercatat.</p>
          <?php endif; ?> 

          <h4>Proyek</h4>
          <?php if (!empty($proyek)): ?>
            <?php foreach ($proyek as $mayer): ?>
              <div>
                <h5><?= esc($mayer['Tempat']) ?></h5>
                <small class="text-muted">
                  <?= esc($mayer['Program']) ?> 
                  (<?= esc($mayer['Periode']) ?> - <?= esc($mayer['Akhir']) ?>)
                </small>
                <?php if (!empty($mayer['Deskripsi'])): ?>
                  <p><?= esc($mayer['Deskripsi']) ?></p>
                <?php endif; ?>
              </div>
              <hr>
            <?php endforeach; ?>
          <?php else: ?>
            <p class="text-muted">Belum ada data yang tercatat.</p>
          <?php endif; ?> 
        </div>

        <!-- Portofolio -->
        <div class="card shadow-sm p-4 mb-4">
          <h4 class="fw-bold text-primary">Portofolio</h4>
          <hr>
          <div class="row g-3">
            <div class="col-sm-6 col-md-4">
              <div class="card border-0 shadow-sm">
                <img src="assets/images/s1.png" class="card-img-top rounded" alt="Project 1">
                <div class="card-body p-2">
                  <h6 class="text-center">Aplikasi Sewa Mobil</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card border-0 shadow-sm">
                <img src="assets/images/s2.png" class="card-img-top rounded" alt="Project 2">
                <div class="card-body p-2">
                  <h6 class="text-center">Website Arsip Digital</h6>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="card border-0 shadow-sm">
                <img src="assets/images/s3.png" class="card-img-top rounded" alt="Project 3">
                <div class="card-body p-2">
                  <h6 class="text-center">AI Emotion Synthesizer</h6>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- end main -->
    </div>
  </div>
</section>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


