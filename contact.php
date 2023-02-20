<?php include("header.php"); ?>

<main id="main">

  <!-- ======= Contact Section ======= -->
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Contact</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Contact</li>
        </ol>
      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Contact Section ======= -->
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    <div class="container">

      <div class="row">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
            </div>
            <div class="form-group mt-3 mb-3">
              <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

  <!-- ======= Map Section ======= -->
  <section class="map mt-2">
    <!-- <div class="container-fluid p-0" style="height:500px; overflow:hidden">
      <iframe src="" width="100%" height="500" style="position:relative; top"></iframe>
      </div> -->
    <div class = "container-fluid p-0" style="height:400px; width:100%; display:inline-block; overflow:hidden; margin-bottom: -60px">
      <iframe class="custom-google-map" style="position:relative; top:-60px; border:none;"
        src="https://www.google.com/maps/d/embed?mid=1ylgE5AFXJNW9eRcyJatqQxmZssHUZTE&ehbc=2E312F"
        width="What Ever Width" height="445"></iframe>
    </div>
  </section><!-- End Map Section -->



</main><!-- End #main -->

<script>
  function send_contact(e) {
    var name = document.querySelector("#name");
    name = name.value.trim();
    console.log(name);
  }
</script>

<?php include("footer.php") ?>
<?php var_dump($_POST); ?>