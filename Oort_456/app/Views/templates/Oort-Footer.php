<!-- Footer Section -->
<footer>
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>Address</h4>
            <div class="contact_link_box">
              <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span>Location</span></a>
              <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span>Call +01 1234567890</span></a>
              <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>demo@gmail.com</span></a>
            </div>
          </div>

          <div class="info_social">
            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_detail">
            <h4>Info</h4>
            <p>
              Necessary, making this the first true generator on the Internet.
              It uses a dictionary of over 200 Latin words, combined with a handful
              of model sentences.
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>Links</h4>
            <div class="info_links">
              <a class="active" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/images/nav-bullet.png') ?>" alt="">
                Home
              </a>
              <a href="<?= base_url('assets/about.html') ?>">
                <img src="<?= base_url('assets/images/nav-bullet.png') ?>" alt="">
                About
              </a>
              <a href="<?= base_url('assets/service.html') ?>">
                <img src="<?= base_url('assets/images/nav-bullet.png') ?>" alt="">
                Services
              </a>
              <a href="<?= base_url('assets/contact.html') ?>">
                <img src="<?= base_url('assets/images/nav-bullet.png') ?>" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 info_col">
          <h4>Subscribe</h4>
          <form action="#">
            <input type="text" placeholder="Enter email" />
            <button type="submit">Subscribe</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>

  <!-- JS Scripts -->
  <script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/bootstrap.js') ?>"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</footer>
</div> <!-- close hero_area -->
</body>
</html>
