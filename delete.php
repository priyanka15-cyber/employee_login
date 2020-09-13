<html>
<head>
</head>
<body bgcolor="cyan">
<?php
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
$r1=$_GET['id'];
$query="delete from employee where id='$r1'";
$query_result=mysqli_query($con,$query) or die($query);
echo '<script language="javascript">';
echo 'alert("Record Deleted Successfully");';
echo 'location.href="display.php";';
echo '</script>';
?>
</body>
</html>