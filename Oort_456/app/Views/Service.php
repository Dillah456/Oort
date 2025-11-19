<?= $this->include('templates/Oort-Header') ?>

<main class="container-fluid p-0">
  <section class="slider_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
           
          </div>
          
            <!-- Tombol: Tambah Entitas -->
            <button id="btnShowForm" class="add-btn" type="button" aria-expanded="false" aria-controls="entitasForm">
              + Tambah Entitas
            </button>
            <form id="entitasForm" action="/diphda/save" method="post" style="display:none;">
                <label>Id:</label>
                <input type="text" name="Id">

                <label>Nama:</label>
                <input type="text" name="Nama">

                <label>Harta:</label>
                <input type="number" name="Harta">

                <label>Hutang:</label>
                <input type="number" name="Hutang">

              <button type="submit">Simpan</button>
            </form>
        
        </div>
        <div class="container"> <header> <h1>Map Of Content</h1> <p class="description"></p> </header>  
        <!-- MOC Time Block -->
            <section class="section">
            <h2>MOC Time Block</h2>
            <div class="table-controls">
              <table class="moc-table">
                  <thead>
                    <tr>
                      <th>Idea</th>
                      <th>Source</th>
                      <th>Methode</th>
                      <th>Idea_Rel</th>
                      <th>Time</th>
                    </tr>
                  </thead>

                  <tbody>
                     <?php if (!empty($data)) : ?>
                      <?php foreach ($data as $row) : ?>
                        <tr>
                            <td><?= $row['Idea_Central'] ?></td>
                            <td><?= $row['Soure'] ?></td>
                            <td><?= $row['Methode'] ?></td>
                            <td><?= $row['Idea_Rel'] ?></td>
                            <td><?= $row['Canopus'] ?></td>
                        </tr>
                      <?php endforeach ?>
                    <?php endif ?>
                  </tbody>
              </table>
                <br>
                <div class="pagination-control">
                    <label for="tb-page-size">Show</label>
                    <select id="tb-page-size">
                        <option value="10">10</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>items</span>
                </div>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Hierarchy</th>
                    <th>Time Frame (Berdasar lingkungan)</th>
                    <th>Title</th>
                    <th>Object (Key ke proyek lain)</th>
                    <th>Time Stamp</th>
                </tr>
                </thead>
                <tbody id="tb-body"></tbody>
            </table>
            <div class="pagination" id="tb-pagination"></div>
            </section>

            <!-- MOC Idea -->
            <section class="section">
            <h2>MOC Idea</h2>
            <div class="table-controls">
                <label for="idea-page-size">Show</label>
                <select id="idea-page-size">
                <option value="10">10</option>
                <option value="50">50</option>
                <option value="100">100</option>
                </select>
                <span>items</span>
            </div>
            <table>
                <thead>
                <tr>
                    <th>Idea Central (Topik Utama)</th>
                    <th>Sumber</th>
                    <th>Metode</th>
                    <th>Proses</th>
                    <th>Koneksi</th>
                </tr>
                </thead>
                <tbody id="idea-body"></tbody>
            </table>
            <div class="pagination" id="idea-pagination"></div>
            </section>
        </div>
      </div>
    </div>
    
  </section>

  

</main>
<style>
/* Container styling */
.table-controls {
  margin-top: 20px;
  width: 100%;
}

/* Table styling */
.moc-table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 12px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  box-shadow: 0 4px 14px rgba(0,0,0,0.06);
}

.moc-table thead {
  background: #007bff;
  color: white;
  text-align: left;
}

.moc-table th,
.moc-table td {
  padding: 10px 14px;
  border-bottom: 1px solid #e0e6ed;
}

.moc-table tbody tr:hover {
  background: #f5f8ff;
}

/* Pagination controls */
.pagination-control {
  margin-top: 10px;
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 14px;
}

.pagination-control select {
  padding: 4px 8px;
  border-radius: 6px;
  border: 1px solid #ccc;
}

/* Tombol styling kecil */
.add-btn {
  background: #007bff;
  color: #fff;
  border: none;
  padding: 10px 14px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 15px;
  margin-bottom: 12px;
}
.add-btn:focus { outline: 2px solid rgba(0,123,255,0.6); }

/* Form container default (hidden + ready for animation) */
#entitasForm.entitas-form {
  opacity: 0;
  transform: translateY(-12px) scale(0.98);
  transition: opacity 280ms ease, transform 280ms ease, filter 280ms ease;
  will-change: opacity, transform;
}

/* Saat ditampilkan: fade-in + slide-down + slight scale */
#entitasForm.entitas-form.show {
  opacity: 1;
  transform: translateY(0) scale(1);
}

/* Styling visual form */
#entitasForm {
  padding: 14px;
  background: #fff;
  border: 1px solid #e3e6ea;
  border-radius: 10px;
  box-shadow: 0 6px 18px rgba(34,34,34,0.06);
  max-width: 520px;
  margin-top: 8px;
}


/* Label & input */
#entitasForm label { display:block; margin-top:10px; font-weight:600; font-size:14px; }
#entitasForm input { width:100%; padding:8px; margin-top:6px; border-radius:6px; border:1px solid #cfcfcf; }

/* Sembunyikan overflow saat transisi (opsional) */
#entitasForm[aria-hidden="true"] { pointer-events: none; }
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const btn = document.getElementById("btnShowForm");
  const form = document.getElementById("entitasForm");

  // siapkan class baseline untuk form agar CSS transisi bekerja
  if (!form.classList.contains('entitas-form')) {
    form.classList.add('entitas-form');
  }
  // flag accessibilty: awalnya disembunyikan
  form.setAttribute('aria-hidden', 'true');

  btn.addEventListener("click", function () {
    const isShown = form.classList.contains("show");

    if (!isShown) {
      // show
      form.style.display = "block";          // tampilkan dulu supaya transition bisa dipakai
      // delay kecil supaya transition CSS punya waktu untuk membaca perubahan display
      setTimeout(() => {
        form.classList.add("show");
        form.setAttribute('aria-hidden', 'false');
        btn.setAttribute('aria-expanded', 'true');
        btn.textContent = "Tutup Form";
        // fokus ke input pertama agar keyboard fokus langsung
        const firstInput = form.querySelector('input, textarea, select, button');
        if (firstInput) firstInput.focus();
      }, 12);
    } else {
      // hide: hapus class show, tunggu durasi transition lalu set display none
      form.classList.remove("show");
      form.setAttribute('aria-hidden', 'true');
      btn.setAttribute('aria-expanded', 'false');
      btn.textContent = "+ Tambah Entitas";
      // durasi harus >= durasi CSS transition (280ms)
      setTimeout(() => {
        form.style.display = "none";
      }, 300);
    }
  });

  // Esc key untuk menutup jika form terbuka
  document.addEventListener("keydown", function(e) {
    if (e.key === "Escape" || e.key === "Esc") {
      if (form.classList.contains("show")) {
        btn.click();
      }
    }
  });
});
</script>


<?= $this->include('templates/Oort-Footer') ?>