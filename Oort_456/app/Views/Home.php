<?= $this->include('templates/Oort-Header') ?>

<main class="container-fluid p-0">
  <section class="slider_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          
            <h1>
              Welcome to <br>
              <span>Oort Archive</span>
            </h1>
            <p>
              "Galeri petualangan menimba ilmu".
            </p>
            <a href="<?= base_url('assets/service.html') ?>" class="btn btn-primary">Get Started</a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            
         
        </div>
      </div>
    </div>
  </section>
    <section class="iframe_section py-4">
    <div class="container"> 
      <!-- Iframe tampilan konten -->
      <div class="iframe-container shadow-lg rounded overflow-hidden">
        <iframe id="contentFrame" src="https://journaloort.blogspot.com/" width="100%" height="700" frameborder="0"></iframe>
      </div>
    </div>
  </section>
</main>

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
