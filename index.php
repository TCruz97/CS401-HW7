<?php
session_start();
?>
<html>
    <head>
            <link rel = "stylesheet" type= "text/css" href="homepage.css">
            <link rel="shortcut icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/objects-5/24/Needle-512.png" />
   
    </head>
    <title>NT</title>
    <body>
        <div class="logo">
                <a href="index.php">
                <img border="0" alt="default" src="logo2.png" width="64px" height="64px">
        </div>
           <!-- search bad and other elements -->
            <div class="signIn" style="float:right">   
                    
                 <ul class = "signlist">
                    <!-- <li class = "login" style="float: right">/</li> -->
                    <li class = "login" id="loginButton" style="float:right"><a href="signin.php">Sign-in</a></li>
                  
                
                </ul>
            </div>

            <!-- navagation elements -->
            <div class="navbar">
                <ul class = "navList">
                        
                    <!-- <li class = "navEl" style="float:right"><a href="sale.html">Sale</a></li> -->
                    <li class = "navEl"  style="float:right"><a href="trends.html">Whats Trending</a></li>
                    <li class = "navEl"  style="float:right"><a href="designers.html">Our Designers</a></li>
                    <li class = "navEl"  style="float:right" ><a  href="shop.html">Shop</a></li>
                  
                
                </ul>
            </div>

        <div class = "background">
                    <!-- <img class="mySlides" src="background.jpg" style="width:100%">
                    <img class="mySlides" src="background2.jpg" style="width:100%">
            <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                // var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                slides[slideIndex-1].style.display = "block";  
                setTimeout(showSlides, 2000); // Change image every 2 seconds
            } -->
            <!-- </script> -->
            <div class="text">
                <h1>Welcome</h1>
            </div>    
        </div>

        <footer class="footer-distributed">

                <div class="footer-right">
    
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
    
                </div>
    
                <div class="footer-left">
    
                    <p class="footer-links">
                        <a href="#">Home</a>
                        .
                        <a href="#">Blog</a>
                        .
                        <a href="#">Pricing</a>
                        .
                        <a href="#">About</a>
                        .
                        <a href="#">Faq</a>
                        .
                        <a href="#">Contact</a>
                    </p>
    
                    <p>NicheThreads &copy; 2018</p>
                </div>
    
            </footer>


    </body>
</html>
