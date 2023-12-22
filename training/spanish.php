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
        <div class="internship-home-header " style="background: url('assets/images/Spain Thrissur - 1.jpeg');">
          <div class="internship-home-header-content">
            <h1>Speak Spanish with confidence and conquer the world!</h1>
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
              Individuals from all over the world travel to Spain, one of the technology giants, for a variety of reasons, including business, pleasure, and the country's renowned trade shows and exhibitions, which are held in the cities of Frankfurt, Munich, Hannover, and Berlin. Not many of the world's biggest trade shows and exhibitions are held in Spanish. There is a great demand for Spanish language proficiency because individuals from all over the world attend these trade shows, with a significant number of Indian participants.
            </p>
            <p style="text-align:justify;">
              Three distinct levels of Spanish instruction are available at Edupace Language Academy  for students who are beginners, intermediates, and advanced. With a communicative approach to instruction, the student will begin using the new language in practice from the very first lesson. To attain international equivalency of proficiency, the training also adheres to international standards for teaching and learning.
            </p>
          </div>
        </div>

        <div class="internship-home-bottom">
          <div class="internship-home-bottom-container">
            

            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Interactive Learning</h2>
              <br>
              <p style="text-align:justify;">
                Immerse yourself in dynamic and interactive learning experiences, designed to make the Spanish language come alive. 
              </p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Passionate Instructors</h2>
              <br>
              <p style="text-align:justify;">Learn from passionate and experienced instructors dedicated to your success. Our team is committed to providing personalized guidance and support at every step of your language-learning adventure.</p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Cultural Enrichment</h2>
              <br>
              <p style="text-align:justify;">Beyond language proficiency, we offer insights into the diverse cultures of Spanish-speaking regions. Discover traditions, celebrations, and the fascinating history that makes Spanish a truly global language.</p>
            </div>
            <div class="internship-home-bottom-content">
              <h2 style="color: #101663;">Community Connection:</h2>
              <br>
              <p>Join our vibrant community of language enthusiasts. Connect with fellow learners, engage in language exchange, and practice your skills in a supportive and encouraging environment.
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
                
                Learn the Spanish Alphabets
                

                <span></span>

              </li>

              <li>
               Familiarize with the Pronounciation



                <span></span>
              </li>
              <li>
                Basics Phrases and Greetings

                <span></span>
              </li>
              <li>Numbers and Counting<span></span></li>
              <li>Introduction To Spanish Culture </li>
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
            <img src="../assets/index/nurses_to_germany/Spanish Thrissur - 1.jpeg" class="education-english" style="width: 430px; height:250px; border-radius: 20px; margin-bottom: 30%; margin-top: 3%;" alt="" />
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
            <p>The goal of Spanish Language Training is to improve candidates' interpersonal skills. The goal of this course is to give students a strong foundation in Spanish language proficiency at the intermediate level. There are different levels in the training program:</p>
            <br>
            <ul>
              <li style="text-align: justify;">A1- The Beginners Level: This level will help the candidate gain a basic understanding of basic phrases and the most common expressions used in the Spanish- Speaking world.</li>
              <li style="text-align: justify;">A2- The Upper Beginners Level: Gain a better understanding of the types of Sentences and expressions related to relevant areas. Learn to communicate in a simple exchange of information</li>
              <li style="text-align: justify;">B1- The intermediate Level: This level deals with the skills like writing, reading, and listening. Candidates will gain skills to be able to structure sentences in the Spanish Language</li>
              <li style="text-align: justify;">B2- The Upper Intermediate Level: This level deals with extra learning about the Spanish Dialects and Complex Texts. The candidate will gain knowledge to create long speeches in Spanish and smoothly explain complex thoughts</li>
            </ul>
            <!-- <p>
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
            </ul> -->
            <br><br><br><br><br><br>
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
