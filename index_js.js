// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-black";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-black", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

var slideIndex = 0;
var timeHandle;

function nextSlide(index)
{
    showSlide(slideIndex + index);
}
function showSlide(index)
{
    clearTimeout(timeHandle);

    var movieImages = ['assets/Movie1.jpg', 'assets/Movie2.jpg'];
    if(index >= movieImages.length)
        index = 0;
    else if(index < 0)
        index = movieImages.length - 1;

    slideIndex = index;

    $(".bgimg-2").fadeOut(0);
    $(".bgimg-2").css("background-image", "url('" + movieImages[index] + "')");
    $(".bgimg-2").stop();
    $(".bgimg-2").fadeIn(500);

    toggleSlideBadge();

    timeHandle = setTimeout(function(){showSlide(slideIndex + 1)}, 5000);
}

function toggleSlideBadge()
{
    slides = $(".slide");
    for (var i = 0; i < slides.length; i++) {
        $(slides[i]).removeClass("w3-white");
    }
    $(slides[slideIndex]).addClass("w3-white");
}

$(document).ready(function(){
    showSlide(0);

}); 

function toggleLoginModal()
{
    $("#loginModal").fadeToggle();
}