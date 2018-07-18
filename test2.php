<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style><?php include 'CSS/test2.css'; ?></style> 

</head>
<body>
    <nav>
        
            
        <div clsss="logo">
            <img src="Images/logo.png" height="100px" width="10%">
       
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
                <li><a href="#">Paintings</a></li>
                <li><a href="#">Others</a></li>
                <li><a href="#">Test</a></li>
                <li><a href="#">Bday Special</a></li>
                <li><a href="#">Others</a></li>
            
        </ul>
             </div>
        <section class="sec1">        </section>   
        <section class="content">
            <h1> PARA</h1>
            <p>           The paragraph is the basic unit for organising information in your writing. You use paragraphs to structure information in all of your exam and assignment essays and short answer questions. If you write well-constructed paragraphs, then the reader/marker will be able to understand what it is that you are trying to explain. If you write poorly constructed paragraphs, then the marker has to go on a ‘treasure hunt’ to find information—the perfect recipe for losing those valuable marks.
        </p> 
        </section>   
        <section class="content1">
            <h1> PARA1</h1>
            <p>           The paragraph is the basic unit for organising information in your writing. You use paragraphs to structure information in all of your exam and assignment essays and short answer questions. If you write well-constructed paragraphs, then the reader/marker will be able to understand what it is that you are trying to explain. If you write poorly constructed paragraphs, then the marker has to go on a ‘treasure hunt’ to find information—the perfect recipe for losing those valuable marks.
        </p> 
        </section>  <section class="content2">
            <h1> PARA2</h1>
            <p>           The paragraph is the basic unit for organising information in your writing. You use paragraphs to structure information in all of your exam and assignment essays and short answer questions. If you write well-constructed paragraphs, then the reader/marker will be able to understand what it is that you are trying to explain. If you write poorly constructed paragraphs, then the marker has to go on a ‘treasure hunt’ to find information—the perfect recipe for losing those valuable marks.
        </p> 
        </section>  <section class="content3">
            <h1> PARA3</h1>
            <p>           The paragraph is the basic unit for organising information in your writing. You use paragraphs to structure information in all of your exam and assignment essays and short answer questions. If you write well-constructed paragraphs, then the reader/marker will be able to understand what it is that you are trying to explain. If you write poorly constructed paragraphs, then the marker has to go on a ‘treasure hunt’ to find information—the perfect recipe for losing those valuable marks.
        </p> 
        </section>  
        
    </nav>
    
    
    
    
    
    
    
    
    
    <br><br>
    <br><br>
    <br><br>
    
<h2>Automatic Slideshow Testing</h2>
<p>Change image every 2 seconds:</p>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="Images/historical.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="Images/wallpainting.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="Images/sketch.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

    <div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="Images/back.jpg" style="width:100%">
  <div class="text">Caption four</div>
</div>
</div>
<br>

<div style="text-align:center">
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
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
<section class="content">
            <h1> PARA</h1>
            <p>           The paragraph is the basic unit for organising information in your writing. You use paragraphs to structure information in all of your exam and assignment essays and short answer questions. If you write well-constructed paragraphs, then the reader/marker will be able to understand what it is that you are trying to explain. If you write poorly constructed paragraphs, then the marker has to go on a ‘treasure hunt’ to find information—the perfect recipe for losing those valuable marks.
        </p> 
</body>
</html> 
