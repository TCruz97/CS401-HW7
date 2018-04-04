<!DOCTYPE html>
<html>

<head>
  <link href="HomeStyle.css" rel="stylesheet" type="text/css" />
  <meta charset="utf-8" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  
  <title></title>
</head>

<body>

<?php
session_start();


class testing{
  public function saveComment($email,$phone,$comm){
   $servername = "127.0.0.1";
   $username = "root";
   $password = "Soccer#40";
   $dbname = "sys";
   
   // Create connection
   $conn = new mysqli($servername, $username, $password, $dbname);
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   } 
   
   $sql = "INSERT INTO ContactHome (email,phone,comm)
   VALUES ('$email', '$phone', '$comm')";
   
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

}
?>

  <!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
    <div class="container">
      <div class="HeaderText">
        <div class="nav">
          <a href = "Home.php" p class = "topText">Matt Vetsch Construction</p></a>
          <a href = "Login.php" p class = "NavElement">Sign in</p></a>
          <a href = "About.php" p class = "NavElement">About Us</p></a>
          <a href = "ContactPage.php" p class = "NavElement">Contact</p></a>
          <a href = "GalleryPage.php" p class = "NavElement">Porfolio</p></a>
          <a href = "Account.php" p class = "NavElement" id = "Account">Account</a>
          </div>
        <p class="bottomText">
          LLC
        </p>
      </div>
      <!-- Full-width images with number text -->
      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home2.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home3.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home4.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home5.jpg" style="width:100%">
      </div>

      <div class="mySlides">
        <div class="numbertext"></div>
        <img src="home6.jpg" style="width:100%">
      </div>

      <!-- Next and previous buttons -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <div class = "Gaurentee">
      <p class = "HomeText"><bold>OVER TWENTY YEARS OF PASSIONATE, SUSTAINABLE REMODELING.
          CREATING QUALITY, HEALTHY, COMFORTABLE BUILDINGS AND RELATIONSHIPS.</bold></p>
      <p class = "HomeText2">MVC is proud to be an innovative leader in sustainable residential and light commercial remodeling and construction.
          <p class ="HomeText2">We are committed to quality projects that are completed on time and at competitive prices while reducing our impact on the earth for a greener future.</p>
    </div>
    <div class = "QuickContact">
      <p class = "Offer">
        Ready To Schedule a Project?
      </p>
      <div class = "ContactButton">
      <button class = "Contact" id = "Contact">Contact Now</button>
    </div>
    </div>

    <?php
if(isset($_POST['subContact']))
{
    $y = new testing();
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $comm = $_POST["comm"];
    $y -> saveComment($email,$phone,$comm);
}
?>
<div class = "ContactContainer" id = "ContactContainer">
    <form class = "signUp" action="home.php" style="border:1px solid #ccc" method = "post">
                <div class="container2" id = "container">
                  <hr>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" id = "user" placeholder="Enter Email" name="email" required>
              
                  <label for="phone"><b>Phone Number></label>
                  <input type="text" id = "phone" placeholder="Enter Phone Number" name="phone" required>
              
                  <label for="comm"><b>Comment</b></label>
                  <input type="text" id = "comment" placeholder="Comment" name="comm" required>
              
                  <div class="clearfix">
                    <button type="submit" class="signupbtn" name = "subContact">Request Estimate</button>
                  </div>
                </div>
              </form>
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

<script>
$( "#Contact" ).click(function() {
  console.log("first")
    if($("#ContactContainer").is(':hidden')){
      console.log("2");
      $("#ContactContainer").show();
    }
    else if($("#ContactContainer").is(':visible')){
      console.log("3");
      $("#ContactContainer").hide();
    }

});
</script>

<script>
  var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
<script>
  /* Set the width of the side navigation to 250px and the left margin of the page content to 250px and add a black background color to body */
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  /* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
</script>

<script>
  function ToggleAboutText(){
   
  }
</script>
</html>