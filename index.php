<DOCTYPE! html>   
    <head>
        <TITLE> Suryarts </TITLE>
    </head>
    <body background="Images/back2.jpg">
        
<div>
    <h2> <font size="5" face="Comic Sans MS" color="#FBFCFC"><marquee direction="right" scrollamount="10"> Welcome to Suresh Arts </marquee></font></h2>
</div>
    <div>
    <style><?php include 'CSS/menustyle.css'; ?></style> 
    
    <ul id="menu">
        <li><a href="index.php">Home</a></li>
        <li>
            <a href="paintings.php">Paintings </a>
            <ul class="hidden">
                <li><a href="index2.php">Digital Paintings</a></li>
                <li><a href="#">Paintings</a></li>
            </ul>
        </li>
        <li>
            <a href="#">Portraits </a>
            <ul class="hidden">
                <li><a href="menu.php">Test</a></li>
                <li><a href="main.php">Bday Special</a></li>
                <li><a href="test2.php">Others</a></li>
            </ul>
        </li>
        <li><a href="login.php">Admin</a></li>
        <li><a href="contactus.php">Contact us</a></li>
    </ul>
    </div>
    <br> <br> <br>
    <br> <br> <br>
    
   <style><?php include 'CSS/test2.css'; ?></style>  
    <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="Images/historical.jpg" style="width:100%">
  <div class="text">Historical Paintings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="Images/wallpainting.jpg" style="width:100%">
  <div class="text">Wall Paintiings</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="Images/sketch.jpg" style="width:100%">
  <div class="text">Sketches</div>
</div>

    <div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="Images/digitalpainting.jpg" style="width:100%">
  <div class="text">Digital Paintings</div>
</div>
        
  <div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="Images/portraits.jpg" style="width:100%">
  <div class="text">Portraits </div>
</div>        
</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

    
    
 <head>
       <title> welccome </title>
       <link rel="stylesheet" type="text/css" href="CSS/parallex.css">

   </head>
   <body>
       <header> <h1>
           Parallex Effect
           </h1> 
           <a href="paintings.php">
                <button class="button"><span> Paintings </span></button></a>
                <a href="paintings.php">
                <button class="button"><span> Portaits </span></button></a>
                <a href="paintings.php">
                <button class="button"><span> Sketches </span></button></a><a href="paintings.php">
                <button class="button"><span> Other Arts </span></button></a>
            <p>
                <q>In art, the hand can never execute anything higher than the heart can imagine.</q> -Ralph Waldo Emerson  <br> <br>
                <q>Together let us desire, conceive, and create the new structure of the future, which will embrace architecture and sculpture and painting in one unity and which will one day rise toward Heaven from the hands of a million workers like the crystal symbol of a new faith.</q> <br> <br>
                <q>Arts education is a big part of building a 21st century creative mind, and I think that we have let way too many kids lose their way by not drawing in their young minds with music, dance, painting and the other various ways we can express those things we do not have words for.</q>
        
        </header>
      
    </body>
<div align="center">
    <p style="color:red;">
&copy CopyRight 2018 <br>
Digital Paintings | Portraits | Sketches | Other Arts <br>
Designed by AJ Soft Tech
    </P>
</div>     
<br>
</body>
</html>
