<?php
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
error_reporting(0);
?>
<html>
 <head>
 	<style type="text/css">
 		button {
  background-color:red;
  color: white;
  border: none;
}
button:hover {
  opacity: 0.8;
}
 	</style>
 	<script type="text/javascript">
 		function myfunc()
 		{
 			location.href="login.php";
 		}
 	</script>
 </head>
 <body bgcolor=orange>
 	<button onclick="myfunc()">Cancel</button>
 	<center><h2>Registration Form</h2><hr></center>
 <form action="" method="POST" style="display:flex; justify-content: center">
 <table>
 <tr><td><b>FIRST NAME</b></td><td><input type="text" name="first_name" value="" placeholder="Enter first name" required/></td></tr><br><br>
 <tr><td><b>LAST NAME</b></td><td><input type="text" name="last_name" value="" placeholder="Enter last name" required/></td></tr><br><br>
 <tr><td><b>JOB TITLE</b></td><td><input type="text" name="job_title" value="" placeholder="Enter job title" required/></td></tr><br><br>
 <tr><td><b>SALARY</b></td><td><input type="text" name="salary" value=""  placeholder="Enter salary" required/></td></tr><br><br>
 <tr><td><b>GENDER</b></td><td><input type="radio" name="gen" value="M" checked/><b>Male</b></td><td><input type="radio" name="gen" value="F"/><b>Female</b></td></tr><br><br>
 <tr><td><b>DATE-OF-BIRTH</b></td><td><input type="date" name="dob" value="" required/></td></tr><br><br>
 <tr><td><b>EMAIL</b></td><td><input type="text" name="email" value="" placeholder="Enter email" required/></td></tr><br><br>
 <tr><td><b>ADDRESS</b></td><td><select name="address" required>
 	<option>Andhra Pradesh</option>
 	<option>Arunachal Pradesh</option>
 	<option>Assam</option>
 	<option>Bihar</option>
 	<option>Chattisgarh</option></option>
 	<option>Goa</option>
 	<option>Gujarat</option>
 	<option>Haryana</option>
 	<option>Himachal Pradesh</option></option>
 	<option>Jharkand</option>
 	<option>Karnataka</option>
    <option>Kerala</option>
    <option>Madhya Pradesh</option>
    <option>Maharastra</option>
    <option>Manipur</option>
    <option>Meghalaya</option>
    <option>Mizoram</option>
    <option>Nagaland</option>
    <option>Odisha</option>
    <option>Punjab</option>
    <option>Rajasthan</option>
    <option>Sikkim</option>
    <option>Tamil Naduv
    <option>Telangana</option>
    <option>Tripura</option>
    <option>Uttarakhand</option>
    <option>Uttar Pradesh</option>
    <option>West Bengal</option>
 </select></td></tr><br><br>
 <tr><td><b>CREATE PASSWORD</b></td><td><input type="password" name="password" value="" placeholder="Enter password" required/></td></tr><br>
 <tr><td><input type="submit" name="submit" value="Save" style="background-color:green;color:white;border:none; "/></td></tr>
 </table>
</form>
<?php
if(isset($_POST['submit']))
{

$r2=$_POST['first_name'];
$r3=$_POST['last_name'];
$r4=$_POST['job_title'];
$r5=$_POST['salary'];
$r7=$_POST['email'];
$r8=$_POST['password'];
$r8=md5($r8);
$r9=$_POST['gen'];
$r10=$_POST['dob'];
$r11=$_POST['address'];
$query="insert into employee(first_name,last_name,job_title,salary,email,password,gender,date_of_birth,address,user_type) values('$r2','$r3','$r4','$r5','$r7','$r8','$r9','$r10','$r11','user')";
$query_submit=mysqli_query($con,$query) or die($query);
echo '<script language="javascript">';
echo 'alert("You are added successfully!");';
echo 'location.href="login.php";';
echo '</script>';
}
?>
 </body>
 </html>
