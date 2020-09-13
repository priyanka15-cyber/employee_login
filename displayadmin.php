<!DOCTYPE html>
<?php
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
session_start();
error_reporting(0);
?>
<html>
<head>
	<title></title>
	<style type="text/css">
		p
		{
			font-family:verdana;
          font-size: 120%;
		}
		h2
		{
			font-family:verdana;
		}
		button
		{
			width: auto;
            padding: 10px 18px;
            background-color:blue;
            border:none;
            color:white;
            cursor: pointer;
		}
		button:hover
		{
			opacity:0.9;
		}
		.cancelbtn
		{
			width: auto;
         padding: 10px 18px;
         background-color: #f44336;
         border:none;
            color:white;
            cursor: pointer;
		}
	</style>
	<script type="text/javascript">
		function mydispFunc()
		{
			location.href="display.php";
		}
		function mycancFunc()
		{
			location.href="logout.php";
		}
	</script>
</head>
<body bgcolor="cyan">
<h2 >Hello <?php echo $_SESSION['fnm'] ?></h2><hr><br>	
<p>Thank you for being a part of ours.An ambitious admin assistant will be working on professional development consistently, upskilling in the areas of new technologies, HR practices, accounting or management. Many will take each job as a learning opportunity, and once they have mastered each role, will move on to a new role, developing for instance project and people management skills. Admin professionals may begin as a receptionist or part of an admin assistant team and can work up to operations management or senior executive assistant positions.</p>
<p>Depending on the job description and seniority, type and size of the business, and lots of other factors, a secretary or admin assistant will be found doing a huge (and often challenging) range of essential tasks.</p>
<p>
These tasks might include ordering office supplies, taking the minutes of meetings, inducting new staff members, organising executive travel, co-ordinating appointments, answering emails on behalf of their executive, organising events, budgeting, boosting morale in the office, accounting, fielding customer questions, project management and many more.To view employee details <a href="display.php">Click here.</a></p>
<button onclick="mydispFunc()">Show</button><button class="cancelbtn" onclick="mycancFunc()">Cancel</button>
</body>
</html>