<?php
 $con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
 error_reporting(0);
 session_start();
?>
 <html>
 <head>
 	<style>
 		td
 		{
 			padding : 5px;
 		}
 	</style>
 	<script>
 		function myFunc()
 		{
 			alert("You are Successfully logged out!");
 		}
 	</script>
 </head>
 <body bgcolor=gold >
 <center>
 <h3>WELCOME <?php echo $_SESSION['fnm'];?></h3><hr>
 <form action="logout.php" method="POST" style="display:flex; justify-content: center">
 <table>
 <tr><td><b>EMPLOYEE-ID</b></td><td><?php echo $_SESSION['id']?></td></tr><br><br>
 <pre>
 <tr><td><b>NAME</b></td><td><?php echo $_SESSION['fnm']?> <?php echo $_SESSION['lnm']?></td></tr><br><br>
</pre>
 <tr><td><b>DATE-OF-BIRTH</b></td><td><?php echo $_SESSION['dob']?></td></tr><br><br>
 <tr><td><b>GENDER</b></td><td><?php echo $_SESSION['gen']?></td></tr><br><br>
 <tr><td><b>JOB TITLE</b></td><td><?php echo $_SESSION['jb']?></td></tr><br><br>
 <tr><td><b>EMAIL</b></td><td><?php echo $_SESSION['eml']?></td></tr><br><br>
 <tr><td><b>ADDRESS</b></td><td><?php echo $_SESSION['addr']?></td></tr><br><br>
 <tr><td><b>SALARY</b></td><td><?php echo $_SESSION['sal']?></td></tr><br><br>
 <tr><td><button onclick="myFunc()">LOGOUT</button></td></tr>
 </table>
</form>
</center>
 </body>
 </html>