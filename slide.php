<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>


.mySlides1 {display: none}


/* Slideshow container */
.slideshow-container1 {
  max-width: 1000px;
  
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev10, .next10 {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: #BF9000;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next10 {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev10:hover, .next10:hover {
  background-color: #B6D7A8;
}




/* The dots/bullets/indicators */
.dot10 {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active1, .dot10:hover {
  background-color: #009688;
}

/* Fading animation */
.fade1 {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade1 {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev10, .next10,.text1 {font-size: 11px}
}
</style>
</head>
<body>


<div class="slideshow-container1">

<div class="mySlides1 fade1">

  <img src="3754684.jpg" style="width:1000px; height:500px">
 
</div>

<div class="mySlides1 fade1">

  <img src="8177473.jpg" style="width:1000px; height:500px">
 
</div>

<div class="mySlides1 fade1">

  <img src="5656134.jpg" style="width:1000px; height:500px">

</div>

<p class="prev10" onclick="plusSlides(-1)">❮</p>
<p class="next10" onclick="plusSlides(1)">❯</p>

</div>
<br>

<div style="text-align:center">
  <span class="dot10" onclick="currentSlide(1)"></span> 
  <span class="dot10" onclick="currentSlide(2)"></span> 
  <span class="dot10" onclick="currentSlide(3)"></span> 
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides1");
  let dots = document.getElementsByClassName("dot10");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active1", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active1";
}
</script>

</body>
</html> 