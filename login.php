<!DOCTYPE html>
    <html>
<head>
    <link href="login.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <meta charset="utf-8" />
    <title></title>
</head>
<body>

<?php
session_start();




class test{
  public function saveUser($email,$pass){
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
   
   $sql = "INSERT INTO SignUp (email,pass)
   VALUES ('$email', '$pass')";
   
   if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

public function getUser($email,$pass){
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

$sql = "SELECT email, pass FROM SignUp where email = '$email' and pass = '$pass'";
$result = $conn->query($sql);


return $result;
    
 }
}

 //more php code
 ?>

<script type="text/javascript">
    var log = <?=$_SESSION['login'];?>;
    console.log(log);
    // do Javascript stuff with disableAnimation
</script>
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
                    <a href = "Account.php" p class = "NavElement" id = "Account">John Smith</p>   
                    </a>
                    </a>
                </div>
                <p class="bottomText">
                    LLC
                </p>
            </div>
        </div>
    
        <div class="AboutPicture">
    
        </div>
        <div class = "LoginHeader">
        <button type="button" class = "SignButton" id = "SignButton"><h1 class = "SignUpText">Sign Up</h1></button>
        <button type="button" class = "LoginButton" id = "LoginButton"><h1 class = "Login">Login</h1></button>
        </div>

    <script>
        $( "#SignButton" ).click(function() {
            console.log("Sign");
            $("#LoginContainer").hide();
            $("#container").show();
        });

        $( "#LoginButton" ).click(function() {
            console.log("Login");
            $("#container").hide();
            $("#LoginContainer").show();
        });
    </script>
<?php
if(isset($_POST['sub']))
{
    $y = new test();
    $email = $_POST["email"];
    $pass = $_POST["psw"];
    $y -> saveUser($email,$pass);
}

if(isset($_POST['subLogin']))
{
    $y = new test();
    $email = $_POST["email"];
    $pass = $_POST["psw"];
    $result = $y -> getUser($email,$pass);
    $row = $result->fetch_assoc();
    $e = $row["email"];
    $p = $row["pass"];
    if($email == $e && $pass == $p && $_SESSION != "1"){
        if($email == "admin@admin.com" && $pass == "admin"){
        echo "Hello admin";
        $_SESSION['login'] = "1"; 
        $_SESSION['admin'] = "1";
        }
        else{
        echo "LOGGED IN";
        $_SESSION['login'] = "1"; 
        }
        echo "LOGGED IN";
        $_SESSION['login'] = "1";
    }
    
    else { 
        echo "NOT LOGGED IN";
        $_SESSION['login'] = "";
        } 

}


?>
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

        <form class = "signUp" action="login.php" style="border:1px solid #ccc" method = "post">
                <div class="container" id = "container">
                  <hr>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" id = "user" placeholder="Enter Email" name="email" required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" id = "pass" placeholder="Enter Password" name="psw" required>
              
                  <label for="psw-repeat"><b>Repeat Password</b></label>
                  <input type="password" id = "passRepeat" placeholder="Repeat Password" name="psw-repeat" required>
              
                  <label>
                    <input type="checkbox" id = "check" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                  </label>
              
                  <div class="clearfix">
                    <button type="submit" class="signupbtn" name = "sub">Sign Up</button>
                  </div>
                </div>
              </form>


              <form class = "LoginForm" action="login.php" style="border:1px solid #ccc" method = "post">
                <div class="LoginContainer" id = "LoginContainer">
                  <hr>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" id = "userLogin" placeholder="Enter Email" name="email" required>
              
                  <label for="psw"><b>Password</b></label>
                  <input type="password" id = "passLogin" placeholder="Enter Password" name="psw" required>
              
                  <div class="clearfix">
                    <button type="submit" class="signupbtn" name = "subLogin">Sign Up</button>
                  </div>
                </div>
              </form>

              

</body>
</html>

