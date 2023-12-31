<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/download.css">
  
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  
  <title>Edupace Language Academy Thrissur No-1</title>
</head>
<body>

    <?php include("header/header.php") ?>
 
    <section>
        <div class="header-image-full">
            <img src="assets/slider/download-edupace_language-academy_best-german-language-acdemy-in-thrissur (1).jpg" class="img-fluid" alt="...">
        </div>
    </section>
    <!-- Mobile View -->
    <section>
        <div class="header-image-full-mobile">
            <img src="assets/slider/mobile.jpg" class="img-fluid" alt="...">
        </div>
    </section>

  

    <div class="download-card-container">
        <h1>Brochures</h1>
        <div class="download-cards-inner">
        <div class="download-card">
            <img src="assets/brochure/Doctors To Spain.jpeg" alt=" Doctors To Spain">
            <a href="assets/brochure/Doctors To Spain.pdf" download="Doctors To Spain">Download</a>
            <h4>Doctors To Spain</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/vocational training to spain_edupace language academy.jpg" alt="">
            <a href="assets/brochure/VOCATIONAL.pdf" download="Vocational Training Program">Download</a>
            <h4>Vocational Training Program</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/Ausbildung educational Language Academy.jpg" alt="Ausbildung educational Language Academy">
            <a href="assets/brochure/Ausbildung.pdf" download="Ausbildung Germany">Download</a>
            <h4>Ausbildung Germany</h4>
        </div>
        
        </div>
    <div class="download-cards-inner">
        <div class="download-card">
            <img src="assets/brochure/NURSE TO GERMANY_EDUPACE LANGUAGE ACADEMY.jpg" alt="NURSE TO GERMANY_EDUPACE LANGUAGE ACADEMY">
            <a href="assets/brochure/nurses to germany.pdf" download="Nurses To Germany">Download</a>
            <h4>Nurses To Germany</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/DRIVERS TO GERMANY_EDUPACE LANGUAGE ACADEMY.jpg" alt="DRIVERS TO GERMANY_EDUPACE LANGUAGE ACADEMY">
            <a href="image.webp" download="image1">Download</a>
            <h4>Drivers To Germany</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/Masters Program at germany_edupace.jpg" alt="Masters Program at germany_edupace">
            <a href="image.webp" download="image1">Download</a>
            <h4>Master Program at Germany</h4>
        </div>
        
        
    </div>
    <div class="download-cards-inner">
        
        <div class="download-card">
            <img src="assets/brochure/doctors to europe.edupace.jpg" alt="doctors to europe.edupace">
            <a href="image.webp" download="image1">Download</a>
            <h4>Doctors to Europe</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/paid internship program spain_edupace.jpg" alt="paid internship program spain_edupace">
            <a href="image.webp" download="image1">Download</a>
            <h4>Paid Internship Program</h4>
        </div>
        <div class="download-card">
            <img src="assets/brochure/Truck Drivers To Germany.jpeg" alt="paid internship program spain_edupace">
            <a href="image.webp" download="image1">Download</a>
            <h4>Truck Drivers to Germany</h4>
        </div>
        
    </div>
    </div>
    
    

  </div>

  <!-- <div id="footer"></div> -->
  <?php include("header/footer.php") ?>

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
    gsap.from(".download-txt", {
      opacity: 0,
      duration: 1.5,
      x: -500
    });
  </script>

<script>
    const slider1 = document.querySelector(".slider1");
    let card1Width = document.querySelector(".card1").offsetWidth;

    // Clone the slider1 content for continuous scrolling
    slider1.innerHTML += slider1.innerHTML;

    function scrollslider1(direction) {
        if (direction === 1) {
            slider1.scrollBy({
                left: card1Width + 20,
                behavior: 'smooth'
            });
        } else if (direction === -1) {
            slider1.scrollBy({
                left: -card1Width - 20,
                behavior: 'smooth'
            });
        } else {
            slider1.scrollBy({
                left: card1Width + 20,
                behavior: 'smooth'
            });
        }

        // Reset scroll position to the beginning when it reaches the cloned set
        if (slider1.scrollLeft >= slider1.scrollWidth / 2) {
            slider1.scrollTo({
                left: 0,
                behavior: 'auto'
            });
        }
    }

    // Automatic scroll every 3 seconds
    setInterval(scrollslider1, 3000);
</script>

</body>
</html>
