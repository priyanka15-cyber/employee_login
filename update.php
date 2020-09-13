<?php
 $con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
 $q1=$_GET['id'];
 $select_query="select * from employee where id='$q1'";
 $select_query_result=mysqli_query($con,$select_query) or die($select_query);
 $row=mysqli_fetch_array($select_query_result);

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
 			location.href="display.php";
 		}
 	</script>
 </head>
 <body bgcolor=cyan>
 	<button onclick="myfunc()">Cancel</button>
 	<center><h2>Registration Form</h2><hr></center>
 <form action="update1.php" method="POST" style="display:flex; justify-content: center">
 <table>
 <tr><td><b>EMPLOYEE-ID</b></td><td><input type="text" name="eid" value="<?php echo $row['id']?>"/></td></tr><br><br>
 <tr><td><b>FIRST NAME</b></td><td><input type="text" name="fnm" value="<?php echo $row['first_name'] ?>"/></td></tr><br><br>
 <tr><td><b>LAST NAME</b></td><td><input type="text" name="lnm" value="<?php echo $row['last_name'] ?>"/></td></tr><br><br>
 <tr><td><b>DOB</b></td><td><input type="date" name="dob" value="<?php echo $row['date_of_birth'] ?>"/></td></tr><br><br>
<?php
if($row['gender']=='M')
{
?>
<tr><td><b>GENDER</b></td><td><input type="radio" name="gen" value="M" checked/><b>Male</b></td><td><input type="radio" name="gen" value="F"/><b>Female</b></td></tr><br><br>
<?php
}
?>
<?php
if($row['gender']=='F')
{
?>
	<tr><td><b>GENDER</b></td><td><input type="radio" name="gen" value="M"/><b>Male</b></td><td><input type="radio" name="gen" value="F" checked/><b>Female</b></td></tr><br><br>
<?php
}
?>
  
 <tr><td><b>JOB TITLE</b></td><td><input type="text" name="jbtl" value="<?php echo $row['job_title'] ?>"/></td></tr><br><br>
 <tr><td><b>SALARY</b></td><td><input type="text" name="sal" value="<?php echo $row['salary']?>"/></td></tr><br><br>

 <tr><td><b>ADDRESS</b></td><td><select name="addr" value="<?php echo $row['address'];?>" required>
 	<option value="<?php echo $row['address'];?>" selected><?php echo $row['address'];?></option>
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
 </select></td></tr><br><br></td></tr><br><br>

 <tr><td><b>EMAIL</b></td><td><input type="text" name="eml" value="<?php echo $row['email'] ?>"/></td></tr><br><br>
<?php
if($row['user_type']=='admin')
{
?>
<tr><td><b>TYPE</b></td><td><input type="radio" name="typ" value="admin" checked/><b>Admin</b></td><td><input type="radio" name="typ" value="user"/><b>User</b></td></tr><br><br>
<?php
}
?>

<?php
if($row['user_type']=='user')
{
?>
	<tr><td><b>TYPE</b></td><td><input type="radio" name="typ" value="admin"/><b>Admin</b></td><td><input type="radio" name="typ" value="user" checked/><b>User</b></td></tr><br><br>
<?php
}
?>

 <tr><td><input type="submit" name="submit" value="Save" style="background-color:green;color:white;border:none; "/></td></tr>

  </table>
</form>


 </body>
 </html>