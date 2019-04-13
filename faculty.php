<html>
<head> 
<title> allocation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-image:url('b.jpg');background-repeat:no-repeat">
<div >
<table >
<thead>
	<tr>
	<div  >
		<h1  >Invigilation System</h1>
		</tr>
		</div>
</thead>
</table>
</div>
<nav >
	<div class="container-fluid" >
		<ul class="nav navbar-nav">
		<li><a href="admin.html" class="btn btn-lg" role="button">Submit another Details</a>
		</li><li><a href="index.html" class="btn-lg" role="button">LogOut</a></li></ul>

		
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
		$fname=$_POST['fname'];
        $dept=$_POST['dept'];
        $section=$_POST['section'];
        $fid=$_POST['fid'];
		$from=$_POST['frm'];
		$till=$_POST['till'];
		$dt=$_POST['fday'];
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"INSERT into Faculty values('$fname','$dept','$section','$fid','$from','$till','$dt')");
{
echo "<script>";
echo "alert('submitteddetails')";
echo "</script>";
}
?>
</body>
</html>
