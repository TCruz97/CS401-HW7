<?php
session_start();
?>
<html>
        <head>
                <link rel = "stylesheet" type= "text/css" href="trends.css">
                <link rel="shortcut icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/objects-5/24/Needle-512.png" />
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        </head>
        <title>NT</title>
        <body>
                <div class="logo">
                        <a href="index.php">
                        <img border="0" alt="default" src="logo2.png" width="64px" height="64px">
                </div>
               <!-- search bad and other elements -->
                <div class="searchBar" style="float:right">   
        
                        <ul class = "signlist">
                            <!-- <li class = "login" style="float: right">/</li> -->
                            <li class = "login"  style="float:right"><a href="signin.php">Sign-in</a></li>
                        
                        </ul>
                </div>
                <!-- navagation elements -->
                <div class="navbar">
                    <ul class = "navList">
                            
                        <!-- <li class = "navEl" style="float:right"><a href="sale.html">Sale</a></li> -->
                        <li class = "navEl"  style="float:right"><a href="trends.php">Whats Trending</a></li>
                        <li class = "navEl"  style="float:right"><a href="designers.php">Our Designers</a></li>
                        <li class = "navEl"  style="float:right" ><a  href="shop.php">Shop</a></li>
                           
                    
                    </ul>
                </div>
                <div class="looks" >
                                <img class="mySlides" id="f1" src="background6.jpg" style="display:block">
                                <img class="mySlides" id="f2" src="background4.jpg" style="display: none">
                              
                    

                </div>

                <div class="lookAt">
                        <h2 class="title"><a href ="index.php">Shop</a></h2>

                </div>

                <script>
                                    $(function(){

                                        
                                        // $('#test').hide();
                                                
                                        setTimeout(function(){
                                                if(document.getElementById('f1').style.display == "block"){
                                                        
                                                         $('#f1').fadeOut('slow');     
                                                         $('#f2').fadeIn('slow');  
                                                         
                                                }

                                                 if(document.getElementById('f2').style.display == "none"){
                                                        
                                                        $('#f2').fadeOut('slow');  
                                                        $('#f1').fadeIn('slow');     
                                                        console.log("got to second if")
                                               }
                                        },4000);

                                        });

                                

                 </script>
                                









        </body>

    
</html>