<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Agrotrends nigeria integrated servicess offers practical agricultural training, consultancy, fund support, commodity trading and business partnership.">
  <meta content="AGRO, FARM, AGROTRENDINGHUB" name="keywords">
  <meta http-equiv="X-UA-Compatible" content="IE=7">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Agrotrend">

  <title>AgrotrendingHub</title>

  <!-- Favicons -->
  <link rel="shortcut icon" href="favicon_io/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
  <link rel="manifest" href="favicon_io/site.webmanifest">

   <!-- Google Fonts -->
   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,700;1,900&family=Roboto&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/icofont/icofont.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.css">


  <!-- Main CSS File -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
 
  <main class="main" data-aos="fade-up">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>contact form</h2>
          <ol>
            <li><a href="./index.php">Home</a></li>
            <li>contact us</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

   <!-- ======= Contact Section ======= -->
   <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>Kolawole Ojo Street, Ijoko</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>support@agrotrendinghub.com.ng</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+234 703 967 7720</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15850.316281850337!2d3.3033531!3d6.6989392!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf3a5b46b4d38cd3b!2sAgrotrends%20Nigeria%20Integrated%20Services!5e0!3m2!1sen!2sng!4v1593566227162!5m2!1sen!2sng" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <div class="form-box" id="form">
        
          
          <form method="post" action="mailer.php"  class="php-email-form">
          <?php
          error_reporting(E_ALL ^ E_NOTICE);
        if($_GET['success'] == 1) {
          echo "<div class=\"form-message success\">your message has been sent</div>";
        }
        if($_GET['success'] == -1) {
          echo "<div class=\"form-message error\">Oops... something went wrong</div>";
        }
          
          ?>
            <div class="form-row">
              <div class="col form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
    </div>
    </div>
   </div>
  
  </section><!-- End Contact Section -->
  
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <img src="assets/img/logo-footer.jpg" alt="logo" class="logo">
            <p>
              Our Address:
              Kolawole Ojo Street, Ijoko <br />
              <strong>Phone:</strong> +234 703 967 7720<br />
              <strong>Email:</strong> support@agrotrendinghub.com.ng<br />
              Created by <a href="#">Jife Tech</a> 
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Information</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://agrotrending.blogspot.com" target="_blank">Our blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">contact us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="./privacy-policy.html">Privacy Policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Get involved & Make Requests </h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Start a farm</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="./businessplan.html">Business plan</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p> Agrotrends offer practical agricultural training, consultancy, 
              fund support, commodity trading and business partnership.</p>
            <div class="social-links mt-3">
              <a href="https://twitter.com/agrotrending" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="https://web.facebook.com/Agrotrendinghub" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://twitter.com/agrotrending" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        <P>By using these site you have agree to Terms and condition</P>
      </div>
      <div class="copy-data">
        &copy;<script>document.write(new Date().getFullYear());</script> 
        <strong><span>Agrotrendinghub</span></strong>. All Rights Reserved.   
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f0c34285b59f94722ba9dfb/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

  <!-- Vendor JS Files -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/jquery.counterup@2.1.0/jquery.counterup.js"></script>
  <script type="text/javascript" src="https://cdn.boomcdn.com/libs/owl-carousel/2.3.4/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.8.6/venobox.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/aos/3.0.0-beta.6/aos.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>