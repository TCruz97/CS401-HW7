<!DOCTYPE html>
<html>

<head>
    <link href="GalleryStyle.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta charset="utf-8" />
    <title></title>
</head>

<body>

    <?php
session_start();
    ?>

    


    <div class="Navbar">
        <div class="HeaderText">
            <div class="nav">
                <a href="Home.php" p class="topText">Matt Vetsch Construction</p>
                </a>
                <a href="Login.php" p class="NavElement">Sign in</p>
                </a>
                <a href="About.php" p class="NavElement">About Us</p>
                </a>
                <a href="ContactPage.php" p class="NavElement">Contact</p>
                </a>
                <a href="GalleryPage.php" p class="NavElement">Porfolio</p>
                </a>
                <a href = "Account.php" p class = "NavElement" id = "Account">Account</a>
            </div>
            <p class="bottomText">
                LLC
            </p>
        </div>
    </div>

    <div class="AboutPicture">

    </div>
    <div class="AboutContainer">
        <h1>Portfolio</h1>
        <div class="gallery">
            <a target="_blank" href="home.jpg">
                <img src="home.jpg">
            </a>
            <div class="desc">Kitchen Remodel</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="home2.jpg">
                <img src="home2.jpg">
            </a>
            <div class="desc">Closet Remodel</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="home3.jpg">
                <img src="home3.jpg">
            </a>
            <div class="desc">Full Kitchen Re-Design</div>
        </div>

        <div class="gallery">
            <a target="_blank" href="home4.jpg">
                <img src="home4.jpg">
            </a>
            <div class="desc">Pine/Cherry Kitchen</div>
        </div>
        <div class="gallery">
                <a target="_blank" href="home5.jpg">
                    <img src="home5.jpg">
                </a>
                <div class="desc">Open Granite Bathroom</div>
            </div>

            <div class="gallery">
                    <a target="_blank" href="home6.jpg">
                        <img src="home6.jpg">
                    </a>
                    <div class="desc">Bathroom Expansion</div>
                </div>
    </div>
</body>
<script>
var log = '<?=$_SESSION['login'];?>';
if(log == "1")
{
    $("#Account").show();
}
else{
    $("#Account").hide();
}
</script>

</html>