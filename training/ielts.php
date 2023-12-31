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
    <?php include("header.php") ?>


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
        <div class="internship-home-header " style= "background: url('./assets/images/IELTS.jpg');">
          <div class="internship-home-header-content">
            <h1>IELTS - International English Language Testing System</h1>
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
            <p>
              The IELTS Examination is intended to assess the linguistic skills of persons who want to study or work in countries where English is the primary language. IDP is the primary provider of the test. The test comes in two flavors:
            </p>
            <ul>
              <li>General - for candidates who want to go abroad for work or migration</li>
              <li>Academic - for candidates who want to pursue higher education abroad.
                  Both versions of the <br> test evaluate the four required language skills: listening, reading, 
                  writing, and speaking.</li>
            </ul>
          </div>
        </div>

      
        <div class="internship-home-bottom">
          <div class="internship-home-bottom-container">
            

            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Excellent instruction</h2>
              <br>
              <p style="text-align:justify;">Our instructors are highly qualified and experienced in teaching English . They can offer tailored attention and recommendations.
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
              <p style="text-align:justify;">Throughout the preparation process, we will encourage and assist students. This can support students in maintaining their confidence and focus, both of which are important for getting good marks on the test.
              </p>
            </div>
            <span class="vertical-line"></span>
          </div>
        </div>

        <div class="internship-home-course-timeline-container">

          <div class="internship-home-course-timeline-list">

            <ul>
              <p  ><b>Learning Pathway</b></p>
              <li>
                Familiarize Yourself with the Test
                

                <span></span>

              </li>

              <li>
                Assess Your Current English Proficiency

                <span></span>
              </li>
              <li>
                Listening Skills

                <span></span>
              </li>
              <li>Reading Skills<span></span></li>
              <li>Writing Skills<span></span></li>
              <li>Speaking Skills<span></span></li>
              <li>Grammar and Vocabulary<span></span></li>
              <li>Time Management<span></span></li>
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
            <img src="../assets/index/about-1.jpg" class="education-english"  alt="" />
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
            <h3 >IELTS characteristics</h3>
            <!-- <p>2500 students</p> -->
          </div>
          <div class="internship-overview-left-middle">
            <p>Band Scores</p>
            <br>
            <ul>
              <li style="text-align: justify;">For each language subskill (listening, reading, writing, and speaking), band scores are employed.The Band Scale is scaled from 0 ("did not attempt the test") to 9 ("Expert User").</li>
              <li style="text-align: justify;">The speaking module is an important part of the IELTS exam. It takes the form of a one-on-one interview with an examiner. The examiner evaluates the candidate while he or she is speaking, but the session is also videotaped for monitoring and re-marking in the event of an appeal against the banding given. IELTS is created with the help of item writers from all over the world. Teams are based in the United States, the United Kingdom, Australia, New Zealand, Canada, and other English-speaking countries.</li>
            </ul>
            <p>
              IELTS test structure
            </p>
            <br>
            <ul>
              <li style="text-align: justify;">To receive a band score, which is displayed on the IELTS Test Report Form (TRF), all applicants must successfully complete the four modules of listening, reading, writing, and speaking. While the Reading and Writing Modules vary depending on whether the candidate is taking the Academic or General Training Versions of the Test, the Listening and Speaking Modules are the same for all candidates. The IELTS is the longest test without breaks (160 minutes) since the first three sections are administered without a break. The way this test is set up encourages distraction, and statistics show that the results of the second and third portions are typically lower than those of the first part.</li>
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
          <h2 style="color: #101663;">FAQs</h2>
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
              <span style="color: #101663;">The IELTS exam lasts for how long?</span>
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
              <span style="color: #101663;">What is a good score on the IELTS exam?</span>
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
              <span style="color: #101663;">When is the IELTS exam administered?</span>
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
            <p style="text-align:justify; color:black;">Throughout 140 countries worldwide, the IELTS exam is administered several times a month. You can find test dates and locations on the official IELTS website.
            </p>
          </details>
        </div>

      </div>
        <div class="request-form">
          <form>
            <h3 style="color: #101663;">Request For More Information</h3>
            <br>
            <div class="request-form-field">
              <label class="form-label" style="color: #101663;">Name</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Name">
              <label class="form-label" style="color: #101663;">Email</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Email">
              <label class="form-label" style="color: #101663;">Contact Number</label>
              <input type="" name=""  class="form-control" placeholder="Contact Number">
              <label class="form-label" style="color: #101663;">Write Your Quote</label>
              <textarea type="" name=""  class="form-control">Message</textarea>
              <button class="btn button-color" >Send Message!</button>
            </div>
            
          </form>
        </div>

        <div class="request-form-mob">
        <form>
            <h3 style="color: #101663;">Request For More Information</h3>
            <br>
            <div class="request-form-field">
              <label class="form-label" style="color: #101663;">Name</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Name">
              <label class="form-label" style="color: #101663;">Email</label>
              <input type="" name=""  class="form-control" placeholder="Enter Your Email">
              <label class="form-label" style="color: #101663;">Contact Number</label>
              <input type="" name=""  class="form-control" placeholder="Contact Number">
              <label class="form-label" style="color: #101663;">Write Your Quote</label>
              <textarea type="" name=""  class="form-control">Message</textarea>
              <button class="btn button-color" >Send Message!</button>
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
  </div>
    <?php include("footer.php") ?>
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
