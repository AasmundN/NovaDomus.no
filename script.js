var test_1 = true;
var test_2 = true;

function checkDropdown_1() {
  if(test_1) {
    showDropdown_1();
  } else {
    hideDropdown_1();
  }
}

function showDropdown_1() {
    test_1 = false;
    hideDropdown_2();
    document.getElementById("drop_arrow_1").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "200px";
}


function hideDropdown_1() {
    test_1 = true;
    document.getElementById("drop_arrow_1").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_1");
    elem.style.maxHeight = "0px";
}

function checkDropdown_2() {
  if(test_2) {
    showDropdown_2();
  } else {
    hideDropdown_2();
  }
}

function showDropdown_2() {
    test_2 = false;
    hideDropdown_1();
    document.getElementById("drop_arrow_2").style.transform = "rotate(90deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "400px";
}


function hideDropdown_2() {
    test_2 = true;
    document.getElementById("drop_arrow_2").style.transform = "rotate(0deg)";
    var elem = document.getElementById("menu_2");
    elem.style.maxHeight = "0px";
}

//Start of slideshow
var slideIndex = 1;
//Define the interval

var interval;
//Sets a length of the interval
var intervalLength = 7000;
//Starts the interval
intervalPause();

//Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
  intervalPause();
}

//Dot controls
function currentSlide(n) {
  showSlides(slideIndex = n);
  intervalPause();
}

//Displays the current slide, and hides others
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  //Makes sure slides dont go past the last slide or before the first
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  //Hides all the slides
  for (i = 0; i < slides.length; i++) {
      slides[i].style.opacity = "0";
  }
  //Turns off all dots
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  //Turn on selected slide and dot
  slides[slideIndex-1].style.opacity = "1";
  dots[slideIndex-1].className += " active";
}

//Resets the interval upon interraction from client
function intervalPause(){
  clearInterval(interval);
  interval = setInterval(function(){plusSlides(1)}, intervalLength);
}


function showSideMenu() {
  document.getElementById("side_menu").style.width = "65vw";
}

function hideSideMenu() {
  document.getElementById("side_menu").style.width = "0vw";
}
