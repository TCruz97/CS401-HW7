
<html>
<title>Sign In/Sign Up</title>
<head>
    <link rel = "stylesheet" type= "text/css" href="signin.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/objects-5/24/Needle-512.png" />
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="dist/validator.js"></script>




    <script>
        $( function() {
            $( document ).tooltip();
        } );
        </script>
</head>
<body>
<?php
session_start();

mysql://b9e6ea80030140:b6fe7b1d@us-cdbr-iron-east-05.cleardb.net/heroku_19ca8ac0b4b3b5c?reconnect=true
class user{
    public function saveUser($email,$pass, $firstName, $lastName, $address, $city, $state, $zip){
        $host = "us-cdbr-iron-east-05.cleardb.net";
        $user = "b9e6ea80030140";
        $password = "b6fe7b1d";
        $db = "heroku_19ca8ac0b4b3b5c";
        
        // Create connection
        $conn = new mysqli($host, $user, $password, $db);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid Email";
        }
        $sql = "INSERT INTO guest (email,pass, firstName, lastName, address, city, state, zip)
        VALUES ('$email', '$pass', '$firstName','$lastName','$address','$city','$state', '$zip')";
        
        if ($conn->query($sql) === TRUE) {
     }
      else {
         echo "Error: " . $sql . "<br>" . $conn->error;
     }
     }

public function getUser($email,$pass){
    $host = "us-cdbr-iron-east-05.cleardb.net";
    $user = "b9e6ea80030140";
    $password = "b6fe7b1d";
    $db = "heroku_19ca8ac0b4b3b5c";
   

// Create connection
$conn = new mysqli($host, $user, $password, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT email, pass FROM guest where email = '$email' and pass = '$pass'";
if($result = $conn->query($sql)){

    return $result;
}
else{
    echo "You Need to Create an Account";
}

    
 }
}
?>
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



<?php
if(isset($_POST['up']))
{
    $y = new user();
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $firstName = $_POST["fName"];
    $lastName = $_POST["lName"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $zip = $_POST["zip"];
    $y -> saveUser($email,$pass, $firstName, $lastName, $address, $city, $state, $zip);
}

if(isset($_POST['in']))
{
    $y = new user();
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $result = $y -> getUser($email,$pass);
    $row = $result->fetch_assoc();
    $e = $row["email"];
    $p = $row["pass"];
    if($email == $e && $pass == $p && $_SESSION != "1"){
        if($email == "t@gmail.com" && $pass == "admin"){
        $_SESSION['login'] = "1"; 
        $_SESSION['admin'] = "1";
        }
        else{
    
        $_SESSION['login'] = "1"; 
        }
        $_SESSION['login'] = "1";
    }
    
    else { 
    
        $_SESSION['login'] = "";
        } 

}


?>

<!-- Sign in -->
<div class = "leftHalf">
        <button onclick="document.getElementById('modal-wrapper1').style.display='block'" id="signIn" >Sign In</button>
</div>
<div id="modal-wrapper1" class="modal">
  
        <form class="modal-content animate" action="signin.php" method="post">
        
              
          <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="profile.svg" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Sign In</h1>
          </div>
      
          <div class="container">
            <input type="text" placeholder="Enter Username" name="email">
            <input type="password" placeholder="Enter Password" name="pass">        
            <button type="submit" id="upButton" style="margin-left:200px;"name="in">Sign In</button>
          </div>
          
        </form>
        
      </div>
      
      <script>
      // If user clicks anywhere outside of the modal, Modal will close
      
      var modal = document.getElementById('modal-wrapper1');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>




<!-- Sign-Up -->
<div class = "rightHalf">
    <button onclick="document.getElementById('modal-wrapper2').style.display='block'" id="signUp">Sign Up</button>
</div>
<div id="modal-wrapper2" class="modal">
  
        <form class="modal-content animate" action="signin.php" method = "post">
              
          <div class="imgcontainer">
            <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close PopUp">&times;</span>
            <img src="profile.svg" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Sign Up</h1>
          </div>
      
          <div class="container">
            <input type="text" placeholder="Enter First Name" name="fName">
            <input type="text" placeholder="Enter Last Name" name="lName">
            <input type="text" placeholder="Enter Address" name="address">
            <input type="text" placeholder="Enter City" name="city">
            <input type="text" placeholder="Enter State" name="state">
            <input type="text" placeholder="Enter Zip" name="zip">
            <input type="text" placeholder="Enter email" name="email">
            <input type="password" placeholder="Enter Password" name="pass" title = "Enter at least 8 characters One uppercase At least one number or symbol">  
            <input type="password" placeholder="Repeat Password" name="pswd2">     
          
            <button type="submit" id="signButton" style="margin-left:200px;" name="up">Sign Up</button>
            
        </div>

          
        </form>
     
    
        
      </div>
      
      <script>
      // If user clicks anywhere outside of the modal, Modal will close
      
      var modal = document.getElementById('modal-wrapper2');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
      </script>

      <script>
        var log = '<?=$_SESSION['login'];?>';
        if(log == "1")
        {
            console.log("logged in");
        }
    </script>
      
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
