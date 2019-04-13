<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
  
<body style="background-image:url('hi2.jpg');background-size:cover">
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php
header("Refresh:10");
$c=mysqli_connect('localhost','root','','internal_invigilation');
$dis=mysqli_query($c,"select registration.uname,registration.uid,registration.dept,registration.section FROM registration where not EXISTS (SELECT faculty.fid from faculty WHERE registration.uid = faculty.fid)and registration.uid<>'16331A05I0';");
echo "<center>";
echo "<table border=4 border-radius=25px style='color:white;background:#7a0000;border-radius: 25px;border:double; border-color:white; padding: 20px;width: 200px;height: 150px;border-collapse:separate;margin-top:70px;margin-left:100px'>";
echo "<th>"."FacultyName"."</th>";
echo "<th>"."FacultyId"."</th>";
echo "<th>"."Department"."</th>";
echo "<th>"."Section"."</th>";

while($row=mysqli_fetch_assoc($dis))
{

echo"<tr><td name='nm'>".$row['uname']."</td><td>".$row['uid']."</td><td>".$row['dept']."</td><td>".$row['section']."</td></td>";


}
echo "<table>";
echo "</center>";
?>
</body>
</html>