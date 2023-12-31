<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Study Abroad</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/study-abroad.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>
  <body>
    <?php include("header/header.php") ?>
    <div class="abroad-container">
      
      <div class="abroad-hero" style="background-image: url('../assets/images/study-abroad.png');">
        <div class="abroad-hero-content">
          <p>WELCOME TO</p>
          <h2>EDU PACE <span>STUDY <br> ABOARD</span></h2>
        </div>
      </div>

      

<!-- aboard content -->
<div class="abroad-bg">
<div class="about-program-container">
  <h1>About  Program</h1><br>
  <p>Edu Pace Study Abroad focuses on programs for a variety of fields, including but not limited to business, engineering, 
      tourism and hospitality, early childhood education, allied health sciences, and medicine. In addition to MBBS and 
      Doctorates, we also provide postgraduate and doctorate studies in these areas. <br><br>

      We are open to expanding our network to include educational hubs of international calibre in any location. In order to
       flourish in this competitive climate, today’s students need a global perspective. <br><br>
      
      Edu Pace Study Abroad is an industry leader in providing these professional opportunities to students who are keen to 
      expand their horizons. Our specialized counselling sessions for middle-class parents facilitate the selection of an 
      institution and a destination for their child’s study abroad. The foreign education market is usually exclusive to 
      families with significant incomes. <br><br>
      
      Foreign academic institutions and universities, as well as their teaching and training techniques, are frequently 
      oversimplified. Consequently, we have received nothing but great comments from our prior customers.
      We are proud of our work and achievements</p>
</div>

<div class="studyaboard-content">
  <div class="studyaboard-content-left">
    <h1>Study Abroad</h1><br>
    <p>Study abroad is a great way to learn new languages, meet new people, and learn new skills. We have a program for you.</p><br>
      <ul>
        <li>Expert advice and guidance</li>
        <li>100% Support for Visa Clearance</li>
        <li>Admission to Top Universities is a Promised Result</li>
        <li>No donation & capitation fees</li>
        <li>Low Admission Fees</li>
        <li>Scholarships should be given to deserving students</li>
        <li>All documentation support</li>
      </ul>
  </div>
  <div class="studyaboard-content-right">
  <img src="./assets/images/about-girl.png" alt="">
  </div>
</div>

<!-- end aboard content -->
      <div class="abroad-carousel-container">
        
        <div class="abroad-carousel">
          <div class="slider1-container">
            <div class="slider1">
              <div
                class="card1 choose-us-card"
                style="
                  background: url('./assets/images/scroll1.png');
                  background-size: cover;
                "
              >
                <h3>Well established social system</h3>
              </div>
              <div
                class="card1 choose-us-card"
                style="
                  background: url('./assets/images/scroll2.png');
                  background-size: cover;
                "
              >
                <h3>Good family support system with free education/ child benefit (family friendly country)</h3>
              </div>
              <div
                class="card1 choose-us-card"
                style="
                  background: url('./assets/images/scroll3.png');
                  background-size: cover;
                "
              >
                <h3>Safe and clean environment</h3>
              </div>
              <div class="card1 choose-us-card" style="background: url('./assets/images/Scroll4.png');background-size: cover;">
                <h3>Having one of the most modern transportation systems in the world</h3>
              </div>
              <div class="card1 choose-us-card" style="background: url('./assets/images/Scroll4.png');background-size: cover;">
                <h3>Allows you to travel to all Cities in Europe - no visa required/ open border within EU</h3>
              </div>
              <div class="card1 choose-us-card" style="background: url('./assets/images/Scroll3.png');background-size: cover;">
                <h3>Strongest economy in Europe/ 4th largest economy in the world</h3>
              </div>

              <i class="fa-solid fa-arrow-left"  onclick="scrollslider1(-1)"></i>
              <i class="fa-solid fa-arrow-right"  onclick="scrollslider1(1)"></i>

            </div>
          </div>
        </div>
      </div>
</div>
      <?php include("header/footer.php") ?>
    </div>
    <script defer>
      fetch("./header.html")
        .then((response) => response.text())
        .then((html) => (document.getElementById("header").innerHTML = html));

      fetch("./footer.html")
        .then((response) => response.text())
        .then((html) => (document.getElementById("footer").innerHTML = html));

      const slider1 = document.querySelector(".slider1");
      const card1 = document.querySelectorAll(".card1");
      let card1Width = card1[0].offsetWidth;

      // Clone the slider1 content for continuous scrolling
      slider1.innerHTML += slider1.innerHTML;

      function scrollslider1(direction) {
        if (direction === 1) {
          slider1.scrollBy({
            left: card1Width + 20,
            behavior: "smooth",
          });
        } else if (direction === -1) {
          slider1.scrollBy({
            left: -card1Width - 20,
            behavior: "smooth",
          });
        } else {
          slider1.scrollBy({
            left: card1Width + 20,
            behavior: "smooth",
          });
        }

        // Reset scroll position to the beginning when it reaches the cloned set
        if (slider1.scrollLeft >= slider1.scrollWidth / 2) {
          slider1.scrollLeft = 0;
        }
      }

      // Automatic scroll every 3 seconds
      setInterval(function () {
        scrollslider1(1);
      }, 3000);
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
        gsap.from(".abroad-hero-content",{
            opacity:0,
            duration:1.5,
            x:-500
        });
  
    </script>

  </body>
</html>
