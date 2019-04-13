<html>
	<body style="background-image:url('b.jpg');background-repeat:no-repeat">
<div >
<table>
<thead>
	<tr>	
		<div  >
		<h1  >Registration Page</h1>
		</div>
	</tr>
</thead>
</table>
</div>
<nav >
	<div class="container-fluid" >
		<ul class="nav navbar-nav">
	     <li><a href="index.html" class="btn-lg" role="button">Click here to Login</a></li></ul>

		
			</div>
			</nav>


		<div class="login-page">
					<form>
					     <div class="row centered">

							<div class="form">
								
						  </div></div>
			</form>
</div>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Internal_Invigilation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
//echo "YOUR";
function NewUser()
{
//echo "YOUR2";
	$nam = $_POST['uname'];
	$ui = $_POST['uid'];
	$pw = $_POST['pwd'];
	$repw = $_POST['repwd'];
	$dep = $_POST['dept'];
	$section = $_POST['section'];
	$sql = "INSERT INTO registration (uname,uid,pwd,repwd,dept,section) VALUES ('$nam', '$ui' ,'$pw', '$repw','$dep','$section')";
	$data = mysqli_query($GLOBALS['conn'],$sql)or die(mysqli_error($GLOBALS['conn']));
	
	echo "<script>";
    echo "alert('submitteddetails')";
     echo "</script>";
	}
NewUser();
if(!empty($_POST['uid']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$sql1 = mysqli_query($GLOBALS['conn'] , "SELECT * FROM registration WHERE uid = '$_POST[uid]'") or die(mysqli_error($GLOBALS['conn']));

	if(!$row = mysqli_fetch_array($sql1) or die(mysqli_error($GLOBALS['conn'])))
	{
		NewUser();
	}
	else
	{
		echo "<script>";
        echo "alert('You are already a Registered User')";
        echo "</script>";
	}
}
$conn->close();
?> 
</body>
</html>
