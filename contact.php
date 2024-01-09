<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  </head>
  <body>
    <?php include("header/header.php") ?>
    <div class="contact-container">
      
      <div class="contact-hero" style="background-image: url('assets/slider/Best-Study-Abroad-Agency-thrissur_-Contact-Number_-Edupace-language-academy.jpg');">
        <!-- <h1 class="contact-txt">Contact us</h1> -->
      </div>
      <div class="contact-form-container">
        <h4>Contact Us</h4>
        <h2>GET IN TOUCH</h2>
        <p>We’d love to hear from you. Please fill out this form.</p>
        <form class="contact-form">
          <div class="contact-form-input-name">
            <div class="contact-form-input">
              <p>First Name</p>
              <input type="text" placeholder="First Name" />
            </div>
            <div class="contact-form-input">
              <p>Last Name</p>
              <input type="text" placeholder="Last Name" />
            </div>
        </div>
        <div class="contact-form-input">
          <p>Email</p>
          <input type="email" placeholder="example@gmail.com" />
        </div>
        <div class="contact-form-input">
          <p>Phone Number</p>
          <input type="text" placeholder="Phone Number" />
        </div>
        <div class="contact-form-input">
          <p>Message</p>
          <textarea placeholder="Enter Your Message"></textarea>

        </div>
        <div class="contact-form-input-checkbox">
            <input type="checkbox">
            <p>You agree to our friendly <a href="#"> privacy policy</a>.</p>
        </div>
        <button>Send Message</button>
        </form>
      </div>
      <div class="contact-info-container">
        <div class="contact-location">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15691.046962706998!2d76.2168823!3d10.5194229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ef94631b3851%3A0xf735dcfabd2d791c!2sEdu%20pace%20Language%20Academy!5e0!3m2!1sen!2sin!4v1704534971966!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-address">
          <h4>Address</h4>
          <p><i class="fas fa-home me-3" ></i> Edupace Language Academy | RVK Tower | High Road | Thrissur-01</p>
          <p><i class="fas fa-envelope me-3" ></i><a href="mailto:info@edupace.org" style="text-decoration:none; color: black;">info@edupace.com</a></p>
          <p><i class="fas fa-phone me-3" ></i><a href="tel:+918592925900" style="text-decoration:none; color:black;"> +91 8592925900</a></p>
          <p><i class="fas fa-phone me-3" ></i> <a href="tel:+919072545002" style="text-decoration:none; color:black;">+91 9072545002</a></p>
        </div>
      </div>

      
<!-- <div id="footer"></div> -->
<?php include("header/footer.php") ?>
    </div>
    <script>
            fetch('./header.html')
        .then(response => response.text())
        .then(html => document.getElementById('header').innerHTML = html);
    
      fetch('./footer.html')
        .then(response => response.text())
        .then(html => document.getElementById('footer').innerHTML = html);
    

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.from(".contact-txt",{
            opacity:0,
            duration:1.5,
            x:-500
        });
  
    </script>
  </body>

</html>
