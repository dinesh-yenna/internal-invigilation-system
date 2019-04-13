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
}
function SignIn()
{
session_start();   //starting the session for user profile page
$uid=$_POST['uid'];
$pwd = $_POST['pwd'];
if(!empty($_POST['uid']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysqli_query($GLOBALS['conn'],"SELECT *  FROM registration where uid = '$_POST[uid]' AND pwd = '$_POST[pwd]'") or die(mysqli_error($GLOBALS['conn']));
	$row = mysqli_fetch_array($query) or die(mysqli_error($GLOBALS['conn']));
	if(!empty($row['uid']) AND !empty($row['pwd']))
	{
		$_SESSION['uid'] = $row['pwd']; 
		$sql = mysqli_fetch_array($row);
		if($row['user-type']==0){
			header("location:admintype.html");
		}
		elseif($row['user-type']==1){
			header("location:facultyview.html");
		}
	}
	else
	{
		echo "<script>";
		echo "alert('SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...')";
		echo "</script>";
	}
	
}
}
	SignIn();

?>


