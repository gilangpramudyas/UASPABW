<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome icons (free version)-->
  <script src="https://kit.fontawesome.com/105a8c4e49.js" crossorigin="anonymous"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Viga&display=swap" rel="stylesheet">

    <!-- My Css -->
    <link rel="stylesheet" href="style.css">

    <!-- icon -->
<link rel="stylesheet" href="icon/bootstrap-icons.css">
    <title>Tweb</title>
  </head>
  <body>

  <?php include ('header.html'); ?>

    <!-- Contact-->
      <section class="page-section" id="contact">
          <div class="container">
              <div class="text-center">
                  <h2 class="section-heading text-uppercase">Kontak Kami</h2>

              </div>
              <form id="contactForm" name="sentMessage" novalidate="novalidate">
                  <div class="row align-items-stretch mb-5">
                      <div class="col-md-6">
                          <div class="form-group">
                              <input class="form-control" id="name" type="text" placeholder="Nama *" required="required" data-validation-required-message="Please enter your name." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group">
                              <input class="form-control" id="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address." />
                              <p class="help-block text-danger"></p>
                          </div>
                          <div class="form-group mb-md-0">
                              <input class="form-control" id="phone" type="tel" placeholder="Nomor Hp *" required="required" data-validation-required-message="Please enter your phone number." />
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                      <div class="col-md-6">
                          <div class="form-group form-group-textarea mb-md-0">
                              <textarea class="form-control" id="message" placeholder="Pesan *" required="required" data-validation-required-message="Please enter a message."></textarea>
                              <p class="help-block text-danger"></p>
                          </div>
                      </div>
                  </div>
                  <div class="text-center">
                      <div id="success"></div>
                      <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">Kirim</button>
                  </div>
              </form>
          </div>
      </section>




  <!-- footer -->
        <footer class="footer_style_2">
  <div class="container-fuild">
    <div class="row">
      <div class="map_section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15958.788166758004!2d101.4612922!3d0.4467395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7fbc2bbef2457b45!2sGcom%20Design%20%26%20IT%20Solution!5e0!3m2!1sid!2sid!4v1611289197897!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

      </div>
      <div class="footer_blog">
        <div class="row">
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Ayo Ikuti Kami !</h2>
            </div>
            <p>Ikuti kami di Sosial Media untuk mendapatkan informasi menarik dari kami</p>
            <ul class="social_icons">
              <li class="social-icon fb"><a href="#"><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a></li>
              <li class="social-icon tw"><a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Informasi Tambahan</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="it_news.html"><i class="fa fa-angle-right"></i> Laptop Second</a></li>
              <li><a href="it_contact.html"><i class="fa fa-angle-right"></i> Sparepat</a></li>
              <li><a href="it_about.html"><i class="fa fa-angle-right"></i> Portofolio</a></li>
              <li><a href="it_term_condition.html"><i class="fa fa-angle-right"></i> Artikel</a></li>
              <li><a href="it_privacy_policy.html"><i class="fa fa-angle-right"></i> Hubungi Kami</a></li>

            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Jasa</h2>
            </div>
            <ul class="footer-menu">
              <li><a href="#"><i class="fa fa-angle-right"></i> Service PC/Laptop/Notebook</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Desain & 3D Desain</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Server</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Router</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> Printer</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i> CCTV</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <div class="main-heading left_text">
              <h2>Hubungi Kami</h2>
            </div>
            <p>Jalan Air Dingin V No.23, Kel. Air Dingin, <br>Kec. Bukit Raya, Pekanbaru Riau 28284<br>
              <span style="font-size:18px;"><a href="tel:+6282287843969">0822 8784 3969</a></span></p>
            <div class="footer_mail-section">
              <form>
                <fieldset>
                <div class="field">
                  <input placeholder="Email" type="text">
                  <button class="button_custom"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="cprt">
            <p>Copyrights 2021 ©  Gilang</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</footer>


<!-- google map js -->

<!-- end google map js -->



    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
  </body>
</html>
