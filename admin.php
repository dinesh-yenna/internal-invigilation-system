<html>    
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
</head>
<body >
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
        <li><a href="admin.html" class="btn btn-lg" role="button">Submit another Exam Date</a>
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
global $c,$i;
$date=$_POST['edate'];
$day=$_POST['day'];
$tm=$_POST['tm'];
$tt=$_POST['tt'];
$sub=$_POST['sub'];
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"insert into admin values('$date','$day','$tm','$tt','$sub')");
{
echo "<script>";
echo "alert('submitteddetails')";
echo "</script>";
}
?>
</body>
</html>









































































































































