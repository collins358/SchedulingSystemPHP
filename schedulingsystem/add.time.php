<?php 
 
 $con = mysqli_connect ('localhost', 'root', '');
 
 if (!$con)
 {
	 echo 'not connected to server';
 }
 if (!mysqli_select_db($con, 'insertion'))
 {
	 echo 'database not selected';
 }

 $Start_Time = $_POST['starttime'];
 $End_Time = $_POST['endtime'];
 
 $sql = "INSERT INTO timer (start_Time, end_Time) VALUES ('$Start_Time', '$End_Time')";

 if (!mysqli_query ($con, $sql))
 {
	 echo 'not inserted';
 }
 else
 {
	 echo '<script type="text/javascript">
                      alert("New Dates Added!");
                         location="addtime.php";
                           </script>';
 }
 

?>