<?php 
include'connect.php';
$No= $_GET['No'];

	$sql_a="UPDATE data_car SET Route_Confirm ='No' WHERE No = '$No'";	
	$sql_b="DELETE FROM car_route  WHERE No_car = '$No'";
		 if(mysqli_query($con,$sql_a)&&mysqli_query($con,$sql_b))
		 {
			
			 echo "<script>alert('ลบข้อมูลเรียบร้อย');window.location.href = 'http://localhost/project_rmuti/admin/add_route.php';</script>";
			 
		 }
	
?>