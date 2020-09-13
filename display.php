<html>
<head>
<style>
td
{
	padding:25px;
}
th
{
	padding: 18px;
}
</style>
</head>
<body bgcolor=cyan>
	
<a href="displayadmin.php"><button>Back</button></a><a href="logout.php"><button>Logout</button></a>
<?php

echo "<table border>
<caption>Employee Details</caption>
<tr>
<th>ID</th>
<th>FIRST_NAME</th>
<th>LAST_NAME</th>
<th>JOB_TITLE</th>
<th>DOB</th>
<th>GENDER</th>
<th>ADDRESS</th>
<th>EMAIL</th>
<th>SALARY</th>
<th colspan=2>MODIFY</th>
";
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
session_start();
$query="select * from employee";
$query_result=mysqli_query($con,$query) or die($query);
$total=mysqli_num_rows($query_result);
while($total--)
{
	$row=mysqli_fetch_array($query_result);
	 $_SESSION['p1']=$row["id"];
	 $_SESSION['p2']=$row["first_name"];
	 $_SESSION['p3']=$row["last_name"];
	 $_SESSION['p4']=$row["job_title"];
	 $_SESSION['p5']=$row["salary"];
	 $_SESSION['p6']=$row["address"];
	 $_SESSION['p7']=$row["gender"];
	 $_SESSION['p8']=$row["date_of_birth"];
	 $_SESSION['p9']=$row["email"];
	
	echo "<tr>
	<td>". $_SESSION['p1']."</td>
	<td>". $_SESSION['p2']."</td>
	<td>".$_SESSION['p3']."</td>
	<td>".$_SESSION['p4']."</td>
	<td>".$_SESSION['p8']."</td>
	<td>".$_SESSION['p7']."</td>
	<td>".$_SESSION['p6']."</td>
	<td>".$_SESSION['p9']."</td>
	<td>".$_SESSION['p5']."</td><td>";
	?>
	<a href="update.php?id=<?php echo $row['id']?>"><button>Edit</button></td></a>
	<td><a href="delete.php?id=<?php echo $row['id']?>"><button>Delete</button></a></td>

<?php
}
"</tr></table>";
?>

</body>
</html>