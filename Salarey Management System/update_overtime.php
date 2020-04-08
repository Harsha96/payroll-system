<?php

		require("db.php");
$conn =mysqli_connect("localhost", "root", "", "payroll");
//overtime
		@$id 			= $_POST['ot_id'];
		@$otrate		= $_POST['rate'];


		$sql = mysqli_query($conn,"UPDATE overtime SET rate='$otrate' WHERE ot_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('OT rate successfully changed...');
		            window.location.href='home_salary.php';
		        </script>
		    <?php
		}
		else {
			echo "Not Successfull!";
		}
 ?>
