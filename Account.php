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

class testSchedule{
  
    public function getSchedule(){
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
    
    $sql = "SELECT * FROM ContactRequest";
    $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      $e = $row["email"];
      $p = $row["phone"];
      $c = $row["comm"];
      $d = $row["dateStamp"];
       
      echo "<tr><th>Email</th><th>Name</th><th>Comment</th><th>Date</th><th></th></tr>";
      foreach ($result as $comment) {
        print "<tr><td>" . htmlspecialchars($comment['email']) . "</td>" .
              "<td>" . htmlspecialchars($comment['phone']) . "</td>" .
              "<td>" . htmlspecialchars($comment['comm']) . "</td>" .
              "<td>" . htmlspecialchars($comment['dateStamp']) . "</td></tr>" ;
      }
      
    
    return $result;
        
     }
    }
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

</div>

<div class="AboutContainer">
    <h1>Profile</h1>
    <div class = "information">
        <h2>Personal Information</h2>
        <p class = "info"> name:  John Smith<p>
        <p class = "info"> phone Number:  555-555-5555<p>
        <p class = "info"> address: 3495 n made up ln. 83646, Boise ID.<p>
    </div>
    <div class = "adminSchedule" id = "adminSchedule">
    <h1>Schedule</h1>
    <table>
    <?php
    $y = new testSchedule();
    $y -> getSchedule();
    ?>
    </table>
    </div>
    <button type = "button" id = "logoff">Log off </button>
</div>



    <script>
        $("#logoff").click(function() {
            location.href = '/Logout.php';
        })
    </script>

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

var adcheck = '<?=$_SESSION['admin'];?>';
if(adcheck == "1")
{
    $("#adminSchedule").show();
}
else{
    $("#adminSchedule").hide();
}
</script>

</html>