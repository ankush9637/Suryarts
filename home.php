<html>
<body bgcolor="800080">
     <h1 align="center">This web site is under construction </h1>
<?php
include '/CSS/gallery.css';
?>
     <div class="w3-content w3-display-container">
         <img class="mySlides" src="Images/1.jpg" style="width:100%">
         <img class="mySlides" src="Images/2.jpg" style="width:100%">
         <img class="mySlides" src="Images/3.jpg" style="width:100%">
         <img class="mySlides" src="Images/4.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

<p>
    Image Information 
</p>   
</body>
</html>
