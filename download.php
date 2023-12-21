<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/download.css">
  
  
  
  <title>Download</title>
</head>
<body>

    <?php include("header/header.php") ?>
  <div class="download-container" style="background-image: url('/assets/images/download.png');">
    <div class="download-hero-container">
      <div class="download-hero-content" >
        <div class="download-txt">
          <h2>Downloads</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="brochure-container">
    <div class="slider1-container">
        <h2>Brochures</h2>
        <div class="slider1">
            <div class="card1">
                <img src="image.webp" alt="">
                <a href="image.webp" download="image1">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <!-- ... (repeat for other cards) ... -->
            <i class="fa-solid fa-arrow-left" onclick="scrollslider1(-1)"></i>
            <i class="fa-solid fa-arrow-right" onclick="scrollslider1(1)"></i>
        </div>
    </div>
    <div class="slider1-container">
        <h2>Forms</h2>
        <div class="slider1">
            <div class="card1">
                <img src="image.webp" alt="">
                <a href="image.webp" download="image1">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <div class="card1">
                <img src="image2.webp" alt="">
                <a href="image2.webp" download="image2">Download</a>
            </div>
            <!-- ... (repeat for other cards) ... -->
            <i class="fa-solid fa-arrow-left" onclick="scrollslider1(-1)"></i>
            <i class="fa-solid fa-arrow-right" onclick="scrollslider1(1)"></i>
        </div>
    </div>
  </div>

  <div id="footer"></div>

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
