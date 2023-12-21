<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edu Pace</title>
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/navbar.css" />
    <link rel="stylesheet" href="./css/home.css" />
    <link rel="stylesheet" href="./css/home-mobile.css" />
    <link rel="stylesheet" href="./css/footer.css" />
    <link rel="stylesheet" href="./css/blob.css">
    <link rel="stylesheet" href="./css/animation-card.css">
    

    <!-- <link rel="stylesheet" href="./css/education.css" /> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" media="screen" href="style.css" /> -->
    <link rel="stylesheet" href="animation-card.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>

    <nav>
      <div class="navbar">
        <i class="fa-solid fa-bars open-bars"></i>
        <div class="logo">
          <img src="./assets/images/edupace-logo-ch.png" style="width: 250px; height: auto;" alt="">
          <!-- <a href="#">Edu Pace Langauge Academy</a> -->
        </div>
        <button class="mobbutton-9" role="button">Get Started</button>
      
        <div class="nav-links">
          <div class="sidebar-logo">
            
          
            <i class="fa-solid fa-xmark close-bars"></i>
          </div>
          
          <ul class="links">
            <li class="active"><a href="index.html">Home</a></li>
              <li><a href="about.html">About Us</a></li>
         
            <li>
              <a href="#">Language Training</a>
              <i class="fa-solid fa-chevron-down arrow js-arrow"></i>
              <ul class="js-sub-menu sub-menu">
                <li><a href="training/ielts.html">English</a></li>
                <li><a href="training/german.html">German</a></li>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">French</a></li>
              </ul>
            </li>
               <li>
              <a href="study-abroad.html">Study Abroad</a>
              <i class="fa-solid fa-chevron-down htmlcss-arrow arrow"></i>
              <ul class="htmlCss-sub-menu sub-menu">
                <li><a href="#">Ausbildung Germany</a></li>
                <li><a href="#">Vocation Training Program In Spain</a></li>
                <li><a href="">Masters Program at Germany</a></li>
                <li><a href="">Doctors To Europe</a></li>
                <li><a href="">Paid Internship Program</a></li>
                <!-- <li class="more">
                  <span
                    ><a href="#">More</a>
                    <i class="fa-solid fa-chevron-down arrow more-arrow"></i>
                  </span>
                  <ul class="more-sub-menu sub-menu">
                    <li><a href="#">Neumorphism</a></li>
                    <li><a href="#">Pre-loader</a></li>
                    <li><a href="#">Glassmorphism</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li><a href="carrer-abroad.html">Careers</a>
              <i class="fa-solid fa-chevron-down node-arrow arrow "></i>
              <ul class="node-sub-menu sub-menu">
                <li><a href="nursetogerman.html">Nurses To Germany</a></li>
                <li><a href="#">Drivers To Germany</a></li>
                <li><a href="nursetospain.html">Nurses To Spain</a></li>
                
                <li><a href="#">Doctors To Spain</a></li>
                <li><a href="download.html">Downloads</a></li>
              </ul>
            </li>
            <li><a href="contact.html">Contact Us</a></li>
            <li>
              <button class="button-9" role="button">Get Started</button>
            </li>
          </ul>
        </div>
        <div class="search-box">
          <i class="bx bx-search"></i>
          <div class="input-box">
            <input type="text" placeholder="Search..." />
          </div>
        </div>
      </div>
    </nav>
  
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script>
      
   
      fetch('./footer.html')
      .then(response => response.text())
      .then(html => document.getElementById('footer').innerHTML = html);


      const slider1 = document.querySelector(".slider1");
        const card1 = document.querySelectorAll(".card1");
        let card1Width = card1[0].offsetWidth;
    
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
                slider1.scrollLeft = 0;
            }
        }
    
        // Automatic scroll every 3 seconds
        setInterval(function() {scrollslider1(1)}, 3000);

    </script>
    <script>
      const t1 = gsap.timeline();
  
gsap.from(".tri1",{
  opacity:0,
  top: 159,
  left: 223,
   scale: 0,

  rotate:180,

  ease: "power2.out",

})
      gsap.to(".tri1",{
        opacity:1,
        top: 159,
        left: 223,
         scale: 4,
        duration:2,
        rotate:0,
 
        ease: "power2.in",
      })
gsap.from(".tri3",{
  opacity:0,
  top: 259,
  left: 223,
   scale: 0,

  rotate:180,

  ease: "power2.out",

})

      gsap.to(".tri3",{
        opacity:1,
        top: 154,
    left: 182,
         scale: 4,
        duration:2,
      
        rotate:0,
        ease: "power2.in",
      })
gsap.from(".tri4",{
  opacity:0,
  top: 259,
  left: 223,
   scale: 0,

  rotate:180,

  ease: "power2.out",

})

      gsap.to(".tri4",{
        opacity:1,
        top: 154,
    left: 400,
         scale: 4,
        duration:2,
      
        rotate:0,
        ease: "power2.in",
      })
      gsap.to(".tri1",{
       x:-5,
       y:-5,
       repeat:-1,
       yoyo:true,
      ease: "power2.in",
      })
      gsap.to(".tri3",{
       x:5,
       y:-5,
       repeat:-1,
       yoyo:true,
      ease: "power2.in",
      })
      gsap.to(".tri4",{
       x:5,
       y:-5,
       repeat:-1,
       yoyo:true,
      ease: "power2.in",
      })

      gsap.from(".hero-top-left",{
            opacity:0,
            duration:1.5,
            x:-500
        });
  
  

    </script>
<script>        // search-box open close js code
  let navbar = document.querySelector(".navbar");
  let searchBox = document.querySelector(".search-box .bx-search");
  // let searchBoxCancel = document.querySelector(".search-box .bx-x");

  searchBox.addEventListener("click", () => {
    navbar.classList.toggle("showInput");
    if (navbar.classList.contains("showInput")) {
      searchBox.classList.replace("bx-search", "fa-bars");
    } else {
      searchBox.classList.replace("fa-bars", "bx-search");
    }
  });

  // sidebar open close js code
  let navLinks = document.querySelector(".nav-links");
  let menuOpenBtn = document.querySelector(".navbar .open-bars");
  let menuCloseBtn = document.querySelector(".nav-links .close-bars");
  menuOpenBtn.onclick = function () {
    navLinks.style.left = "0";
    menuOpenBtn.style.opacity = "0";
  };
  menuCloseBtn.onclick = function () {
    navLinks.style.left = "-100%";
    menuOpenBtn.style.opacity = "1";
  };

  // sidebar submenu open close js code
  let htmlcssArrow = document.querySelector(".htmlcss-arrow");
  htmlcssArrow.onclick = function () {
    navLinks.classList.toggle("show1");
  };

  // let moreArrow = document.querySelector(".more-arrow");
  // moreArrow.onclick = function () {
  //   navLinks.classList.toggle("show2");
  // };
  let jsArrow = document.querySelector(".js-arrow");
  jsArrow.onclick = function () {
    navLinks.classList.toggle("show3");
  };
  let nodeArrow = document.querySelector(".node-arrow");
  nodeArrow.onclick = function () {
    navLinks.classList.toggle("show4");
  }</script>
  </body>
</html>
