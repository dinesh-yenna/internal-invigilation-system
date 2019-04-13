<!DOCTYPE html>
<html>
	<body style="background-image:url('b.jpg');background-repeat:no-repeat">
<div >
<table >
<thead>
	<tr>	
		<div  >
		<h1  >Queries Page</h1>
		</tr>
		</div>
</thead>
</table>
</div>
<nav >
	<div class="container-fluid" >
		<ul class="nav navbar-nav">
	     <li><a href="index.html" class="btn-lg" role="button">Log Out</a></li></ul>

		
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
        $uid=$_POST['uid'];
        $edate=$_POST['edate'];
        $tdate=$_POST['tdate'];
        $dept=$_POST['dept'];
        $section=$_POST['section'];
        $re=$_POST['re'];
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"INSERT into queries values('$uid','$edate','$tdate','$dept','$section','$re')");
{
    echo "<script>";
echo "alert('submitteddetails')";
echo "</script>";
}
?>
</body>
</html>
