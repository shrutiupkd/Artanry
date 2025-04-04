<!DOCTYPE html>
<html>
<head>
    <title>Contact us form using php mysql</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   
   
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="feedback.css">
</head>
<body>
<nav style="top:0;">
		<div class="logo">
			<p>ARTNARY </p>
		</div>
		<ul>
			<li><a href="index1.php"  onMouseOver="this.style.color='#000000'" >Home</a></li>
			<li><a href="feedback.php" onMouseOver="this.style.color='#000000'">Feedback</a></li>
			<li><a href="index.php" onMouseOver="this.style.color='#000000'" >Blog</a></li>
            <li><a href="about.html" onMouseOver="this.style.color='#000000'">About us</a></li>
		</ul>
	</nav>
   
    <form class="form-box" method = "POST" action = "feedback.php">
        
        
        <label> Name </label><input placeholder="Name" type="text" name="name">
        <label> Email:</label> <input placeholder="Email" type="email" name="email">
        <textarea placeholder="Feedback" type="text" name="feedback" ></textarea>
        <button onclick="location.href = 'login.html';" name="submit">Submit</button> <!--After regintering you will be redirected to login page and then you have to login-->
	</form>

    <!--<div class="footer-dark" style="margin-top: 30px;">
        <footer>
            <div class="container">
                    <h2 class="copyright">PBL © 2021</h2>
                    <div class="col item social" style="padding-bottom: 15px;"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                    <h4 style="text-align: center; font-family: 'Times New Roman', Times, serif;">Contact for Association</h4>
                    <p style="text-align: center; font-family: 'Times New Roman', Times, serif;">cultureandvalues@gmail.com</p>
                    
                </div>
                
            </div>
        </footer>
    </div>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>

</body>
</html>

<?php 
$host = "localhost"; /* Host name */
$user = "root"; /* User */
$password = ""; /* Password */
$dbname = "project"; /* Database name */
 
$con = mysqli_connect($host, $user, $password,$dbname);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
   }

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $feedback = $_POST['feedback'];
    if($con->query("insert into feedback(`name`,`email`,`feedback`)values('".$name."','".$email."','".$feedback."')")){
        echo '<script>alert(" data inserted!");document.location="feedback.php"</script>';
        } else {
            echo '<script>alert("Data Not Inserted");document.location="feedback.php"</script>';
        }
}

?>