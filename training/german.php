<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edupace Language Academy No:1 Training Center</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
      integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="./internship.css" />
    <link rel="stylesheet" href="./internship-mobile.css" />
    <link rel="stylesheet" href="./navbar.css">

  </head>
  <body>
    <nav>
  <div class="navbar">
    <i class="fa-solid fa-bars open-bars"></i>
    <div class="logo">
      <img src="../assets/images/edupace-logo.png" alt="" style="width: 250px; height: auto;" >
      <!-- <a href="#">Edu Pace Langauge Academy</a> -->
    </div>
    <button class="mobbutton-9" role="button">Get Started</button>
    <button class="nav-mob-btn" role="button">Get Started</button>
    <div class="nav-links">
      <div class="sidebar-logo">
        
      
        <i class="fa-solid fa-xmark close-bars"></i>
      </div>
      
      <ul class="links">
        <li class="active"><a href="../index.html">Home</a></li>
          <li><a href="about.html">About Us</a></li>
     
        <li>
          <a href="education.html">Language Training</a>
          <i class="fa-solid fa-chevron-down arrow js-arrow"></i>
          <ul class="js-sub-menu sub-menu">
            <li><a href="english.html">English</a></li>
                <li><a href="#">German</a></li>
                <li><a href="#">Spanish</a></li>
                <li><a href="#">French</a></li>
          </ul>
        </li>
           <li>
          <a href="study-abroad.html">Study Abroad</a>
          <i class="fa-solid fa-chevron-down htmlcss-arrow arrow"></i>
          <ul class="htmlCss-sub-menu sub-menu">
            <li><a href="/education.html">Ausbildung Germany</a></li>
                <li><a href="#">Ausbildung Spain</a></li>
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
        <li><a href="carrer-abroad.html">Careers </a>
          <i class="fa-solid fa-chevron-down node-arrow arrow "></i>
          <ul class="node-sub-menu sub-menu">
            <li><a href="#">Nurses To Germany</a></li>
                <li><a href="#">Drivers To Germany</a></li>
                <li><a href="#">Nurses To Spain</a></li>
                
                <li><a href="#">Doctors To Spain</a></li>
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


  <script>
          // search-box open close js code
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
        };
  </script>
    <div class="internship-container">
      <div class="internship-home-container">
        <div class="internship-home-header " style="background: url('assets/images/german.jpg');">
          <div class="internship-home-header-content">
            <h1>Welcome Nurses to Germany</h1>
            <!-- <div class="internship-home-header-middle">
              <h4>Masters Program</h4>
              <span>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-regular fa-star"></i>
              </span>
            </div> -->
            <p style="text-align:justify;">
              The public health care system makes Germany an excellent country in which to work as a nurse. Everybody is covered by the social health care system. Germany has a strong nursing background, and nurses are in high demand there. In Germany, nurses hold a high social status as well. There are several options for nurses to work in a variety of professions in Germany, one of the wealthiest nations in Europe with a top-notch healthcare system. The pay is competitive, and the career prospects are bright. Because there aren't enough nurses to cover every position in Germany, one <br> noteworthy aspect is that nurses can specialize more than they could in other countries.
            </p>
            <ul>
              <li>Career Opportunity: Florence can help any registered nurse profile find employment in Germany. We assist you in locating a company that needs a nurse with your skill set.</li>
              <li>Attractive remuneration</li>
              <li>Personal Development: Registered nurses can select from a variety of training programs to help them reach their objectives of improving their abilities and knowledge or specializing in a particular area of nursing.</li>
              <li>Work life balance</li>
            </ul>
          </div>
        </div>

        <div class="internship-home-bottom">
          <div class="internship-home-bottom-container">
            

            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Expert Instruction</h2>
              <br>
              <p style="text-align:justify;">
                Our instructors are highly qualified and experienced in teaching German . They can offer tailored attention and recommendations. 
              </p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Complete curriculum</h2>
              <br>
              <p style="text-align:justify;">every aspect of the IELTS exam is covered in our well-thought-out and thorough curriculum. This covers speaking, writing, listening, and reading abilities in addition to test-taking hints and techniques.</p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Resources available to students</h2>
              <br>
              <p style="text-align:justify;">Textbooks, practice exams, and internet resources are just a few of the many tools and materials we make available to them. Students may be able to study for the test more successfully and quickly with this assistance.</p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Encouragement and support</h2>
              <br>
              <p>Throughout the preparation process, we will encourage and assist students. This can support students in maintaining their confidence and focus, both of which are important for getting good marks on the test.
              </p>
            </div>
            <span class="vertical-line"></span>
          </div>
        </div>

        <div class="internship-home-course-timeline-container">

          <div class="internship-home-course-timeline-list">

            <ul>
              <p style="padding-right: 50px;"><b>Learning Pathway</b></p>
              <p>Beginner Level (A1-A2): Basics and Foundations</p>
              <li>
                
                Learn the Alphabet and Pronunciation
                

                <span></span>

              </li>

              <li>
               Everyday Vocabulary

                <span></span>
              </li>
              <li>
                Grammar Basics

                <span></span>
              </li>
              <li>Introduction to German Culture</li>
              <p>Intermediate Level (B1-B2): Building Proficiency</p>
              
            <li>Expanded Vocabulary<span></span></li>
                <li>Intermediate Grammar<span></span></li>
              
              <li>Reading Comprehension<span></span></li>
              <li>Listening and Speaking Practice<span></span></li>
              <li>Writing Skills<span></span></li>
              <li>Cultural Exploration<span></span></li>
              <!-- <li>
                Nodejs

                <span></span>
              </li>
              <li>
                Express

                <span></span>
              </li>
              <li>
                MongoDB

                <span></span>
              </li>
              <li>
                React

                <span></span>
              </li>
              <li>
                Tailwind

                <span></span>
              </li>
              <li>
                Next Js

                <span></span>
              </li> -->
            </ul>
          </div>
          <div class="internship-course-certification">
            <img src="../assets/index/about-1.jpg" class="education-english" style="width: 430px; height:250px; border-radius: 20px; margin-bottom: 30%; margin-top: 3%;" alt="" />
            <!-- <div>
              <h3>Master's Certificate</h3>
              <p>*You will get individual certificates for each course.</p>
            </div> -->
          <!-- </div> -->
          <!-- <div class="internship-download-button">
            <button>Download Syllabus</button>
          </div> -->
        </div>
      </div>

      <!-- Overview -->
      <div class="internship-overview-container">
        <div class="internship-overview-left">
          <div class="internship-overview-left-top">
            <h3>Our Courses</h3>
            <!-- <p>2500 students</p> -->
          </div>
          <div class="internship-overview-left-middle">
            <p>German Language (Pflege - A1 to B2) for Nursing Professionals</p>
            <br>
            <ul>
              <li style="text-align: justify;">For their daily job in hospitals and nursing homes, nursing professionals are linguistically prepared by the course. Daily language use is the main focus, and practice-relevant material is used to teach the material. In order to ensure improved communication between nurses, patients, doctors, and other team members within German medical facilities, conversation and pronunciation exercises are implemented. Additionally, we administer German language tests for B2 Pflege. Classes at Florence Academy  are taught both in-person and online by highly motivated professionals.</li>
            </ul>
            <p>
              German Language For IT Professional
            </p>
            <br>
            <ul>
              <li style="text-align: justify;">The goal of this course is to give IT professionals a fundamental understanding of German culture and language. The program's primary goals are: (1) Passing the A1+ German Language exam (2) Moving around in Germany (using public transportation, shopping, getting medical care, going out, and going to government agencies). (3) Understanding the key cultural differences.</li>
            </ul>
            <h3>Exam Preparation</h3>
            <p>Our instruction enables you to ace exams with top marks and demonstrate your German proficiency. We provide the following advice to students:</p>

            <ul>
              <p>> Recognizing test structure</p>
              <p>> Time-related orientation for exams</p>
              <p>> Taking practice tests</p>
              <p>> Acquiring a variety of reading abilities</p>
              <p>> Multitasking when listening in German</p>
              <p>> Recognizing exam techniques</p>
            </ul>
          </div>

          <!-- <div class="internship-overview-left-bottom">
            <div class="internship-overview-rating">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
              4.5
            </div>
            <p>256 Review</p>
          </div> -->
        </div>
        <div class="internship-overview-right">
          <div class="internship-overview-right-top">
            <div class="internship-overview-right-top-content">
              <h4>Preview</h4>
              <button><i class="fa-solid fa-play"></i></button>
            </div>
          </div>
          <div class="internship-overview-right-middle">
            <!-- <div class="internship-overview-right-middle-content">
              <div class="internship-overview-right-middle-title">
                <img src="./assets/images/icons/Vector (1).svg" alt="">
                <h4>Lecture</h4>
              </div>
              <p>3</p>
            </div> -->
            <div class="internship-overview-right-middle-content">
              <div class="internship-overview-right-middle-title">
                <img src="./assets/images/icons/Vector (2).svg" alt="">
                <h4>Intensive Training</h4>
              </div>
              <p></p>
            </div>
            <div class="internship-overview-right-middle-content">
                <div class="internship-overview-right-middle-title">
                  <img src="./assets/images/icons/Vector (5).svg" alt="">
                  <h4>Duration</h4>
                </div>
                <p>6 Months</p>
              </div>
            <div class="internship-overview-right-middle-content">
              <div class="internship-overview-right-middle-title">
                <img src="./assets/images/icons/Vector (3).svg" alt="">
                <h4>Classes</h4>
              </div>
              <p>online/Offline</p>
            </div>
            <div class="internship-overview-right-middle-content">
              <div class="internship-overview-right-middle-title">
                <img src="./assets/images/icons/Vector (4).svg" alt="">
                <h4>Assignments</h4>
              </div>
              <p>Yes</p>
            </div>
 
          
          </div>
          <div class="internship-overview-right-bottom">
            <button><a href="#" class="nav-link">Get Syllabus</a></button>
            <button><a href="#" class="nav-link">Get Brochure</a></button>
          </div>
        </div>
      </div>

      <!-- Course Content -->
      
      <div class="internship-faq">
        <div class="internship-faq-container">
          <h2 style="color:#101663;">FAQs</h2>
          <div
            style="
              visibility: hidden;
              position: absolute;
              width: 0px;
              height: 0px;
            "
          >
            <svg xmlns="http://www.w3.org/2000/svg">
              <symbol viewBox="0 0 24 24" id="expand-more">
                <path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z" />
                <path d="M0 0h24v24H0z" fill="none" />
              </symbol>
              <symbol viewBox="0 0 24 24" id="close">
                <path
                  d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"
                />
                <path d="M0 0h24v24H0z" fill="none" />
              </symbol>
            </svg>
          </div>

          <details open>
            <summary>
              <span style="color:#101663;">The IELTS exam lasts for how long?</span>
              <svg
                class="control-icon control-icon-expand"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#expand-more"
                />
              </svg>
              <svg
                class="control-icon control-icon-close"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#close"
                />
              </svg>
            </summary>
            <p style="text-align:justify; color: black;">The exam takes two hours and forty-five minutes to complete. While the Speaking session can be finished the same day as the others or up to a week later, the Reading, Writing, and Listening sessions must all be completed in one sitting.
</p>
          </details>

          <details>
            <summary>
              <span style="color:#101663;">What is a good score on the IELTS exam?</span>
              <svg
                class="control-icon control-icon-expand"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#expand-more"
                />
              </svg>
              <svg
                class="control-icon control-icon-close"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#close"
                />
              </svg>
            </summary>
            <p style="text-align:justify; color: black;">The IELTS exam is graded from 1 to 9, where 9 represents the highest score. A score of 6.5 or above is typically regarded as good, and it might be necessary for professional registration, immigration, or university admission.</p>
          </details>

          <details>
            <summary>
              <span style="color:#101663;">When is the IELTS exam administered?</span>
              <svg
                class="control-icon control-icon-expand"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#expand-more"
                />
              </svg>
              <svg
                class="control-icon control-icon-close"
                width="24"
                height="24"
                role="presentation"
              >
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#close"
                />
              </svg>
            </summary>
            <p style="text-align:justify; color: black;">Throughout 140 countries worldwide, the IELTS exam is administered several times a month. You can find test dates and locations on the official IELTS website.
</p>
          </details>
        </div>

      </div>
        <div class="request-form">
          <form>
            <h3>Request For More Information</h3>
            <br>
            <div class="request-form-field">
              <label class="form-label">Name</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Name">
              <label class="form-label">Email</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Email">
              <label class="form-label">Contact Number</label>
              <input type="" name=""  class="form-control" placeholder="Contact Number">
              <label class="form-label">Write Your Quote</label>
              <textarea type="" name=""  class="form-control">Message</textarea>
              <button class="btn button-color">Send Message!</button>
            </div>
            
          </form>
        </div>
      <!-- <div class="internship-subscribe">
        <div class="internship-subscribe-container">
          <img src="./assets/images/email.svg" alt="" >
          
          <h2>Get In Touch With Us</h2>
          <div class="internship-subscribe-content">
            <input type="text" placeholder="Enter Your Email">
            <button>Subscribe</button>
        </div>
      </div> -->
    </div>
    <footer class="text-center text-lg-start bg-body-tertiary text-muted ">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <!-- <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Edupace Academy
          </h6> -->
          <img src="../assets/images/edupace-logo.png"class="mb-4" style="width: 250px; height:auto;">
          <p style="text-align:justify;">
            Welcome to Edupace Academy, where talent meets opportunity and careers are crafted with precision. We are architects of professional success, dedicated to connecting exceptional talent with thriving organizations.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Quick Links
          </h6>
          <p>
            <a href="#!" class="nav-link">Home</a>
          </p>
          <p>
            <a href="#!" class="nav-link">About Us</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Coaching</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Study Abroad</a>
          </p>
          <p>
            <a href="" class="nav-link">Career Abroad</a>
          </p>
          <br>
          <h6 class="text-uppercase fw-bold mb-4">
            Language Training
          </h6>
          <p>
            <a href="#!" class="nav-link">English</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Spanish</a>
          </p>
          <p>
            <a href="#!" class="nav-link">French</a>
          </p>
          <p>
            <a href="#!" class="nav-link">German</a>
          </p>
          
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            German Pogram
          </h6>
          <p>
            <a href="#!" class="nav-link">Nurses</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Ausbildung</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Professionals</a>
          </p>
          <br>
          <h6 class="text-uppercase fw-bold mb-4">
            Spain Pogram
          </h6>
          <p>
            <a href="#!" class="nav-link">Doctors</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Engineers</a>
          </p>
          <p>
            <a href="#!" class="nav-link">Student</a>
          </p>
          <!-- <p>
            <a href="#!" class="text-reset">Help</a>
          </p> -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> Edupace Language Academy</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@edupace.org
          </p>
          <p><i class="fas fa-phone me-3"></i> +91 8592925900</p>
          <p><i class="fas fa-phone me-3"></i> +91 9072545002</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-reset fw-bold" style="text-decoration: none;"  href="https://plusitpark.com/">Plus IT Business Park</a>
  </div>
  <!-- Copyright -->
</footer>
    <script>
      const slider1 = document.querySelector(".slider1");
      let card1Width = document.querySelector(".card1").offsetWidth;

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
          slider1.scrollTo({
            left: 0,
            behavior: "auto",
          });
        }
      }

      // Automatic scroll every 3 seconds
      setInterval(scrollslider1, 3000);

      //Scroller
      const scrollers = document.querySelectorAll(".scroller");

      // If a user hasn't opted in for recuded motion, then we add the animation
      if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
        addAnimation();
      }

      function addAnimation() {
        scrollers.forEach((scroller) => {
          // add data-animated="true" to every `.scroller` on the page
          scroller.setAttribute("data-animated", true);

          // Make an array from the elements within `.scroller-inner`
          const scrollerInner = scroller.querySelector(".scroller__inner");
          const scrollerContent = Array.from(scrollerInner.children);

          // For each item in the array, clone it
          // add aria-hidden to it
          // add it into the `.scroller-inner`
          scrollerContent.forEach((item) => {
            const duplicatedItem = item.cloneNode(true);
            duplicatedItem.setAttribute("aria-hidden", true);
            scrollerInner.appendChild(duplicatedItem);
          });
        });
      }
      const detailsElements = document.querySelectorAll('.internship-faq-container details');

detailsElements.forEach((details) => {
    details.addEventListener('click', () => {
        detailsElements.forEach((otherDetails) => {
            if (otherDetails !== details) {
                otherDetails.removeAttribute('open');
            }
        });
    });
});
const sliderTestimonial = document.querySelector(".slider-testimonial");
        let cardTestimonialWidth = document.querySelector(".card-testimonial").offsetWidth;
        // Clone the sliderTestimonial content for continuous scrolling
        sliderTestimonial.innerHTML += sliderTestimonial.innerHTML;

        function scrollsliderTestimonial(direction) {
            if (direction === 1) {
                sliderTestimonial.scrollBy({
                    left: cardTestimonialWidth + 20,
                    behavior: 'smooth'
                });
            } else if (direction === -1) {
                sliderTestimonial.scrollBy({
                    left: -cardTestimonialWidth - 20,
                    behavior: 'smooth'
                });
            } else {
                sliderTestimonial.scrollBy({
                    left: cardTestimonialWidth + 20,
                    behavior: 'smooth'
                });
            }

            // Reset scroll position to the beginning when it reaches the cloned set
            if (sliderTestimonial.scrollLeft >= sliderTestimonial.scrollWidth / 2) {
                sliderTestimonial.scrollTo({
                    left: 0,
                    behavior: 'auto'
                });
            }
        }

        // Automatic scroll every 3 seconds
        setInterval(scrollsliderTestimonial, 3000);
    </script>
  </body>
</html>
