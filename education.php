<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Education</title>
    <link rel="stylesheet" href="./css/education.css" />
    <link rel="stylesheet" href="./css/index.css" />
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
    <div class="education-container">
     
      <div class="education-hero-container" style="background-image: url('./assets/images/education-container.png');">
        <div class="education-hero-content">
          <h3>OUR CORE VALUES</h3>
          <h1>Education Service</h1>
        </div>
      </div>
      <div class="education-diff-change-container">
        <h3>Different Stages</h3>
     
        <section class="body-1" id="mobile">
          <div class="content">
            <h2 class="h2">Resources and insights</h2>
            <h2 class="h2">Resources and insights</h2>
          </div>
        </section>
        <!-- <p>
          The latest industry news, interviews, technologies, and resources.
        </p> -->
      </div>
     
      <!-- <div class="education-card-container">
        <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
              <img src="./assets/images/edu-card1.png" alt="img" />
            </div>
            <div class="edu-card-bottom">
              <h1>A1 Weekday Batch (Daily Plan)</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
          
        <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
                <img src="./assets/images/edu-card2.png" alt="img" />
            </div>
            <div class="edu-card-bottom">
              <h1>A2 Weekday Batch</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
          <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
                <img src="./assets/images/edu-card3.png" alt="img" />
            </div>
            <div class="edu-card-bottom">
              <h1>B1 Course + Integration Course (German Citizenship)</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
          <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
                <img src="./assets/images/edu-card1.png" alt="img" />
            </div>
  
            <div class="edu-card-bottom">
              <h1>B2 Course</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
          <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
                <img src="./assets/images/edu-card2.png" alt="img" />
            </div>
            <div class="edu-card-bottom">
              <h1>B2 Exam Preparation (Online & Residential)</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
          <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
            <div class="edu-card-top">
                <img src="./assets/images/edu-card3.png" alt="img" />
            </div>
            <div class="edu-card-bottom">
              <h1>B1 Course</h1>
              <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
              <p>Residential Program : 4 Hrs / 30 Working Days.</p>
              <p>Maximum Paticipants : 10 Students / Batch.</p>
              <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
            </div>
          </div>
      </div> -->



      <div class="education-tab-container">
    
        <div class="edu-horizondal-tab">
        <ul id="tab_ul" class="tabs">
            <li class="selected"><a rel="tab_div1" href="#" onclick="javascript:ShowMyDiv(this, event);">English</a></li>
            <li class=""><a rel="tab_div2" href="#" onclick="javascript:ShowMyDiv(this, event);">German</a></li>
            <li class=""><a rel="tab_div3" href="#" onclick="javascript:ShowMyDiv(this, event);">Spanish</a></li>
            <li class=""><a rel="tab_div4" href="#" onclick="javascript:ShowMyDiv(this, event);">French</a></li>
        </ul>
        </div>
          
          <div class="tabcontents">
            <div class="tabcontent" id="tab_div1" style="display: block;">
    
              <!--  Tab 1 English -->
              <div class="education-card-container">
                <div class="edu-card" onclick="location.href='training/english.html';" style="cursor: pointer;">
                  <div class="edu-card-top">
                    <img src="./assets/images/edu-card1.png" alt="img" />
                  </div>
                  <div class="edu-card-bottom">
                    <h1>IELTS</h1>
                    <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                    <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                    <p>Maximum Paticipants : 10 Students / Batch.</p>
                    <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                  </div>
                </div>
          
                <div class="edu-card" onclick="location.href='training/OET.html';" style="cursor: pointer;">
                  <div class="edu-card-top">
                    <img src="./assets/images/edu-card2.png" alt="img" />
                  </div>
                  <div class="edu-card-bottom">
                    <h1>OET</h1>
                    <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                    <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                    <p>Maximum Paticipants : 10 Students / Batch.</p>
                    <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                  </div>
                </div>
                <div class="edu-card" onclick="location.href='training/OET.html';" style="cursor: pointer;">
                  <div class="edu-card-top">
                    <img src="./assets/images/edu-card3.png" alt="img" />
                  </div>
                  <div class="edu-card-bottom">
                    <h1>ENGLISH  SPEAKING</h1>
                    <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                    <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                    <p>Maximum Paticipants : 10 Students / Batch.</p>
                    <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                  </div>
                </div>
                <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                  <div class="edu-card-top">
                    <img src="./assets/images/edu-card1.png" alt="img" />
                  </div>
          
                  <div class="edu-card-bottom">
                    <h1>PERSONALITY DEVELOPMENT</h1>
                    <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                    <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                    <p>Maximum Paticipants : 10 Students / Batch.</p>
                    <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                  </div>
                </div>
             
              </div>
              
            </div>
    
            <!-- Tab 2 content German -->
            <div class="tabcontent" id="tab_div2" style="display: none;">
                <div class="education-card-container">
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                          <img src="./assets/images/edu-card1.png" alt="img" />
                        </div>
                        <div class="edu-card-bottom">
                          <h1>A1 Weekday Batch (Daily Plan)</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                      
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                            <img src="./assets/images/edu-card2.png" alt="img" />
                        </div>
                        <div class="edu-card-bottom">
                          <h1>A2 Weekday Batch</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                      <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                            <img src="./assets/images/edu-card3.png" alt="img" />
                        </div>
                        <div class="edu-card-bottom">
                          <h1>B1 Course + Integration Course (German Citizenship)</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                      <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                            <img src="./assets/images/edu-card1.png" alt="img" />
                        </div>
              
                        <div class="edu-card-bottom">
                          <h1>B2 Course</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                      <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                            <img src="./assets/images/edu-card2.png" alt="img" />
                        </div>
                        <div class="edu-card-bottom">
                          <h1>B2 Exam Preparation (Online & Residential)</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                      <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                        <div class="edu-card-top">
                            <img src="./assets/images/edu-card3.png" alt="img" />
                        </div>
                        <div class="edu-card-bottom">
                          <h1>B1 Course</h1>
                          <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                          <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                          <p>Maximum Paticipants : 10 Students / Batch.</p>
                          <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                        </div>
                      </div>
                  </div>
            </div>
    
            <!-- Tab 3 content Spanish -->
            <div class="tabcontent" id="tab_div3" style="display: none;">
                <div class="education-card-container">
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                      <div class="edu-card-top">
                        <img src="./assets/images/edu-card1.png" alt="img" />
                      </div>
                      <div class="edu-card-bottom">
                        <h1>IELTS</h1>
                        <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                        <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                        <p>Maximum Paticipants : 10 Students / Batch.</p>
                        <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                      </div>
                    </div>
              
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                      <div class="edu-card-top">
                        <img src="./assets/images/edu-card2.png" alt="img" />
                      </div>
                      <div class="edu-card-bottom">
                        <h1>OET</h1>
                        <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                        <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                        <p>Maximum Paticipants : 10 Students / Batch.</p>
                        <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                      </div>
                    </div>
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                      <div class="edu-card-top">
                        <img src="./assets/images/edu-card3.png" alt="img" />
                      </div>
                      <div class="edu-card-bottom">
                        <h1>ENGLISH  SPEAKING</h1>
                        <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                        <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                        <p>Maximum Paticipants : 10 Students / Batch.</p>
                        <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                      </div>
                    </div>
                    <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                      <div class="edu-card-top">
                        <img src="./assets/images/edu-card1.png" alt="img" />
                      </div>
              
                      <div class="edu-card-bottom">
                        <h1>PERSONALITY DEVELOPMENT</h1>
                        <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                        <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                        <p>Maximum Paticipants : 10 Students / Batch.</p>
                        <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                      </div>
                    </div>
                 
                  </div>
            </div>
    
            <!-- Tab 4 content French -->
            <div class="tabcontent" id="tab_div4" style="display: none;">
            <div class="education-card-container">
                <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                      <img src="./assets/images/edu-card1.png" alt="img" />
                    </div>
                    <div class="edu-card-bottom">
                      <h1>A1 Weekday Batch (Daily Plan)</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
                  
                <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                        <img src="./assets/images/edu-card2.png" alt="img" />
                    </div>
                    <div class="edu-card-bottom">
                      <h1>A2 Weekday Batch</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
                  <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                        <img src="./assets/images/edu-card3.png" alt="img" />
                    </div>
                    <div class="edu-card-bottom">
                      <h1>B1 Course + Integration Course (German Citizenship)</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
                  <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                        <img src="./assets/images/edu-card1.png" alt="img" />
                    </div>
          
                    <div class="edu-card-bottom">
                      <h1>B2 Course</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
                  <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                        <img src="./assets/images/edu-card2.png" alt="img" />
                    </div>
                    <div class="edu-card-bottom">
                      <h1>B2 Exam Preparation (Online & Residential)</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
                  <div class="edu-card" onclick="location.href='./our-courses.html';" style="cursor: pointer;">
                    <div class="edu-card-top">
                        <img src="./assets/images/edu-card3.png" alt="img" />
                    </div>
                    <div class="edu-card-bottom">
                      <h1>B1 Course</h1>
                      <p>Online Program : 2.5 Hrs / 35 Working Days.</p>
                      <p>Residential Program : 4 Hrs / 30 Working Days.</p>
                      <p>Maximum Paticipants : 10 Students / Batch.</p>
                      <p>Book We Follow : A1 Netzwerk Deutsch als Fremdsprache.</p>
                    </div>
                  </div>
            </div>
            </div>
    
          </div>
        </div>
      
      <div class="education-video-container">
        <i class="fa-solid fa-play"></i>
        <h1>We Support Your Career With The <br> Goal Of Trusting Relationships</h1>
      </div>
      <?php include("header/footer.php") ?>
    </div>

<!-- javascript -->
    
<script>
  function ShowMyDiv(Obj, event) {
    // Prevent the default behavior of the link
    event.preventDefault();

    var elements = document.getElementsByTagName('div');
    for (var i = 0; i < elements.length; i++)
      if (elements[i].className == 'tabcontent')
        elements[i].style.display = 'none';

    document.getElementById(Obj.rel).style.display = 'block';

    var ul_el = document.getElementById('tab_ul');
    var li_el = ul_el.getElementsByTagName('li');
    for (var i = 0; i < li_el.length; i++)
      li_el[i].className = "";

    Obj.parentNode.className = "selected";
  }
</script>


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
        gsap.from(".education-hero-content",{
            opacity:0,
            duration:1.5,
            x:-500
        });
  
    </script>

  </body>
</html>
