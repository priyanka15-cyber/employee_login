<?php
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
session_start();
error_reporting(0);
?>
<html>
<head>
<style>
	center
	{
       text-align:center;
       border: 3px solid black;
       width:40%;
       height: 30%;
       padding: 20px;
       background: lightgrey;
	}
	button
	{
		background:orange;
	}
</style>
<script>
function myFunction()
{
  location.href='newdata.php';
}
</script>
</head>
<body bgcolor=orange style="display:flex; justify-content: center">
<center>
<form method="POST" action="">
<font size=5
px><b>GeekyEmployees</b></font><br>
<font size=3 color="orange"
px><b>An online portal for employees</b></font><hr>
<table>
<tr><td><b>Email</b></td><td><input type="email" name="email" value="" placeholder="Enter gmail" pattern="[a-z0-9._%+=]+@[a-z0-9.-]+\.[a-z]{2,3}$" required/></td></tr><br><br>
<tr><td><b>Password</b></td><td><input type="password" name="password" value="" placeholder="Enter password" pattern=".{6,}" required/></td></tr><br><br>
<tr><td><input type="submit" name="submit" value="SIGN IN "  style="background:orange"/></td>
<td><button onclick="myFunction()">SIGN UP</button>
</td></tr>
</table>
</form>
</center>
<?php
if(isset($_POST['submit']))
{
$email= $_POST['email'];
$password= $_POST['password'];
$password=md5($password);
$query="select * from employee where email='$email' and password='$password'";
$query_result=mysqli_query($con,$query) or die($query);
$total=mysqli_num_rows($query_result);
$row=mysqli_fetch_array($query_result);
     $_SESSION['id']=$row["id"];
	 $_SESSION['fnm']=$row["first_name"];
	 $_SESSION['lnm']=$row["last_name"];
	 $_SESSION['jb']=$row["job_title"];
	 $_SESSION['sal']=$row["salary"];
	 $_SESSION['addr']=$row["address"];
	 $_SESSION['gen']=$row["gender"];
	 $_SESSION['dob']=$row["date_of_birth"];
	 $_SESSION['eml']=$row["email"];
if($total==1 and $row['10']=="admin")
{
    header("location:displayadmin.php");
}
else if($total==1)
{
	 header("location:displayuser.php");
}
else
{
	 echo '<script language="javascript">';
     echo 'alert("Incorrect email or password")';
     echo '</script>';
     
}
}


?>
</body>
</html>