<?= $this->include('templates/Oort-Header') ?>

<main class="container-fluid p-0">
  <section class="iframe_section py-4">
    <div class="container">
      <div class="text-center mb-4">
        <h1 class="fw-bold mb-3"><span>Oort Archive</span></h1>
        <p class="text-muted">Tampilkan halaman arsip atau profil melalui tampilan interaktif di bawah ini.</p>
      </div>

      <!-- Navigasi untuk memilih link -->
      <div class="d-flex justify-content-center mb-3 flex-wrap gap-2">
        <button class="btn btn-outline-primary" onclick="loadFrame('http://localhost:8080/cv_ummi')">CV Ummi</button>
        <button class="btn btn-outline-secondary" onclick="loadFrame('http://localhost:8080/cv_najwa')">CV Najwa</button>
        <button class="btn btn-outline-success" onclick="loadFrame('http://localhost:8080/about')">About</button>
        <button class="btn btn-outline-dark" onclick="loadFrame('http://localhost:8080/service')">Service</button>
      </div>

      <!-- Iframe tampilan konten -->
      <div class="iframe-container shadow-lg rounded overflow-hidden">
        <iframe id="contentFrame" src="http://localhost:8080/cv_ummi" width="100%" height="700" frameborder="0"></iframe>
      </div>
    </div>
  </section>
</main>


<script>
  // Fungsi untuk mengganti halaman iframe
  function loadFrame(url) {
    const frame = document.getElementById('contentFrame');
    frame.src = url;
  }
</script>

<style>
  .iframe_section {
    background: #f8fafc;
  }
  .iframe-container {
    border: 2px solid #dee2e6;
    border-radius: 15px;
    transition: all 0.3s ease;
  }
  .iframe-container:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
  }
  iframe {
    border: none;
    width: 100%;
    height: 80vh;
  }
  @media (max-width: 768px) {
    iframe {
      height: 60vh;
    }
  }
</style>

<?= $this->include('templates/Oort-Footer') ?>
