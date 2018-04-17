
<html>
<title>Sign In/Sign Up</title>
<head>
    <link rel = "stylesheet" type= "text/css" href="signin.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://cdn4.iconfinder.com/data/icons/objects-5/24/Needle-512.png" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src ="Form-Validation-Plugin-jQuery-Validity/js/jquery.validity.js"></script>

    <script>
        $( function() {
            $(document).tooltip(); //Tooltip
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
                    <li class = "navEl"  style="float:right"><a href="trends.php">Whats Trending</a></li>
                    <li class = "navEl"  style="float:right"><a href="designers.php">Our Designers</a></li>
                    <li class = "navEl"  style="float:right" ><a  href="shop.php">Shop</a></li>
                  
                
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
     password_hash($pass, PASSWORD_BCRYPT);

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
            <span onclick="document.getElementById('modal-wrapper1').style.display='none'" class="close" title="Close Pop Up">&times;</span>
            <img src="profile.svg" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Sign In</h1>
          </div>
      
          <div class="container">
            <input type="text" class ="field" placeholder="Enter Username" name="email" required>
            <input type="password" class ="field" placeholder="Enter Password" name="pass" required>        
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
            <span onclick="document.getElementById('modal-wrapper2').style.display='none'" class="close" title="Close Pop Up">&times;</span>
            <img src="profile.svg" alt="Avatar" class="avatar">
            <h1 style="text-align:center">Sign Up</h1>
          </div>
      
          <div class="container">                                                                     <!--   How you save the form data -->
            <input  type="text" class ="field" placeholder="Enter First Name" name="fName" value="<?php echo isset($_POST['fName'])? $_POST['fName'] : "" ?>" required
            data-missing="This field is required">
            <input type="text" class ="field" placeholder="Enter Last Name" name="lName" value = "<?php echo isset($_POST['lName'])? $_POST['lName'] : "" ?>" required
            data-missing="This field is required">
            <input  type="text" class ="field" placeholder="Enter Address" name="address"value = "<?php echo isset($_POST['address'])? $_POST['address'] : "" ?>" required
            data-missing="This field is required">
            <input  type="text" class ="field" placeholder="Enter City" name="city" value = "<?php echo isset($_POST['city'])? $_POST['city'] : "" ?>" required
            data-missing="This field is required">
            <input  type="text" class ="field" placeholder="Enter State" name="state" value ="<?php echo isset($_POST['state'])? $_POST['state'] : "" ?>" required
            data-missing="This field is required">
            <input type="text" class ="field" placeholder="Enter Zip" name="zip" value = "<?php echo isset($_POST['zip'])? $_POST['zip'] : "" ?>" required
            data-missing="This field is required">
            <input  type="text" class ="field" placeholder="Enter email" name="email" value = "<?php echo isset($_POST['email'])? $_POST['email'] : "" ?>"  required
                data-missing="This field is required">
            <input type="password" class ="field" placeholder="Enter Password" name="pass" pattern = "^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d][A-Za-z\d$@$!%*#?&]{8,}$" title = "Enter at least 8 characters One uppercase At least one number or symbol"
            required data-missing="This field is required">  
            <input  type="password" class ="field" placeholder="Repeat Password" name="pswd2">     
          
            <button type="submit" id="signButton" style="margin-left:200px;" name="up">Sign Up</button>
            
        </div>
        
        <script>

            //checking if form fields are validx
           $(function() {
            $(".module-content animate").validity()
                .on('submit', function(e) {
                var $this = $(this),
                    $btn = $this.find('[type="submit"]');
                    $btn.button('loading');
                if (!$this.valid()) {
                    e.preventDefault();
                    $btn.button('reset');
                }
            });
            });
</script>
          
        </form>
     
    
        
      </div>
      
      <script>
      // If user clicks anywhere outside of the modal, Modal will close
      
      var modal1 = document.getElementById('modal-wrapper1');
      var modal2 = document.getElementById('modal-wrapper2');
      window.onclick = function(event) {
          if (event.target == modal) {
              modal1.style.display = "none";
              modal2.style.display = "none";
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
