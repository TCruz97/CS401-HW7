<!DOCTYPE html>
<html>

<head>
    <link href="About.css" rel="stylesheet" type="text/css" />
    <meta charset="utf-8" />
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                <a href = "Account.php" p class = "NavElement" id = "Account">John Smith</a>
            </div>
            <p class="bottomText">
                LLC
            </p>
        </div>
    </div>

    <div class="AboutPicture">

</div>
<div class="AboutContainer">
    <h1>About Us</h1>
    <div class="AboutUs">
        <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.</p>
        <p class="info">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem
            aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores
            eos qui ratione voluptatem sequi nesciunt.</p>
        <p class="info">
            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti
            quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa
            qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et
            expedita distinctio.
        </p>
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