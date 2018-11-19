// Code for smooth scrolling between anchors
$('a[href*=#]').click(function(event){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top
  }, 500);
  event.preventDefault();
});

//Functions for the gallery
var images = [
  "img/about1.jpg" ,
  "img/about2.jpg" ,
  "img/about3.jpg",
  "img/about4.jpg",
  "img/about5.jpg"
];

var cnt = 0;
var numImg = images.length - 1;

function nextImg() {
  cnt++ ;
  if(cnt > numImg) cnt = 0

  document.getElementById("gallery").src = images[cnt] ;
}

function prevImg() {
  cnt--;
  if(cnt < 0) cnt = numImg ;
  document.getElementById("gallery").src = images[cnt] ;
}

function func() {
  nextImg();
  return false;
}

function func1() {
    prevImg();
    return false;
}
