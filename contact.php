<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/contact.css">
    <link rel="stylesheet" href="./css/index.css">
  </head>
  <body>
    <?php include("header/header.php") ?>
    <div class="contact-container">
      
      <div class="contact-hero" style="background-image: url('../assets/images/contact-banner.png');">
        <h1 class="contact-txt">Contact us</h1>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3924.6196943971427!2d76.21907477481402!3d10.37226206651903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7f6fc5260cb43%3A0xeca28f4e46ca5694!2z4LSO4LSf4LWBIOC0quC1h-C0uOC1jSDgtJXgtYvgtJrgtY3gtJrgtL_gtILgtJfgtY0g4LS44LWG4LW74LWN4LSx4LW8!5e0!3m2!1sml!2sin!4v1700296679870!5m2!1sml!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="contact-address">
          <h4>Address</h4>
          <p>1234 Street Name, City Name, United States</p>
          <p>1234 Street Name, City Name, United States</p>
          <p>1234 Street Name, City Name, United States</p>
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
