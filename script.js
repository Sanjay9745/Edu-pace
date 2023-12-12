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