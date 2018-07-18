<DOCTYPE! html>   
    <head>
        <TITLE> Suryarts </TITLE>
    </head>
    <body background="Images/back2.jpg">
      
         <style><?php include 'CSS/test2.css'; ?></style>  
         
         <style><?php include 'CSS/para2.css'; ?></style>  
         
         
     <nav>
        
            
        <div clsss="logo">
            <img src="Images/logo.png" height="80px" width="10%">
       
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
                <li><a href="#">Paintings</a></li>
                <li><a href="#">Others</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Bday Special</a></li>
                <li><a href="#">Others</a></li>
            
        </ul>
             </div>        
    </nav>
    
  
   <br> <br>
   <h2> <font size="5" face="Comic Sans MS" color="#FBFCFC"><marquee direction="right" scrollamount="10"> Welcome to Suresh Arts </marquee></font></h2>
     
  
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


<br>
<br>  

<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1>MY BEST DIGITAL PAINTINGS </h1>
<hr>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
        <img src="Images/sallu.jpg" alt="Mountains" style="width:100%">
      <h3>Salman Khan</h3>
      <p>The most popular actor in Bollywood</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
        <img src="Images/sanju.jpg" alt="Lights" style="width:100%">
      <h3>Ranbir kapoor</h3>
      <p>The most talented actor in Bollywood</p></div>
  </div>
  <div class="column">
    <div class="content">
        <img src="Images/tamanna.jpg" alt="Nature" style="width:100%">
     <h3>Tamanna Bhatiya</h3>
      <p>The most hotest actess in Bollywood</p></div>
  </div>
  <div class="column">
    <div class="content">
        <img src="Images/shradha.jpg" alt="Mountains" style="width:100%">
      <h3>Shradha Kapoor</h3>
      <p>The most popular actor in Bollywood</p></div>
  </div>
<!-- END GRID -->
</div>





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
