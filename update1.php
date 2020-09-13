<?php
$con=mysqli_connect("localhost","root","","priyanka") or die(mysqli_connect_error($con));
$r1=$_POST['fnm'];
$r2=$_POST['lnm'];
$r3=$_POST['jbtl'];
$r4=$_POST['sal'];
$r5=$_POST['addr'];
$r6=$_POST['gen'];
$r7=$_POST['dob'];
$r8=$_POST['eml'];
$r9=$_POST['eid'];
$update_query="update employee set first_name='$r1',
                                   last_name='$r2',
                                   job_title='$r3',
                                   salary='$r4',
                                   address='$r5',
                                   gender='$r6',
                                   date_of_birth='$r7',
                                   email='$r8' 
                                   where id='$r9'" ;
$update_query_result=mysqli_query($con,$update_query);
echo '<script language="javascript">';
echo 'alert("Record Updated Successfully");';
echo 'location.href="display.php";';
echo '</script>';

?>