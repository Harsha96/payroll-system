<?php

		require("db.php");
$conn =mysqli_connect("localhost", "root", "", "payroll");
		@$id 			= $_POST['deduction_id'];
		@$philhealth 	= $_POST['philhealth'];
		@$bir 			= $_POST['bir'];
		@$gsis 			= $_POST['gsis'];
		@$love 			= $_POST['pag_ibig'];



		$sql = mysqli_query($conn,"UPDATE deductions SET bir='$bir', gsis='$gsis', pag_ibig='$love', philhealth='$philhealth' WHERE deduction_id='1'");

		if($sql)
		{
			?>
		        <script>
		            alert('Deductions successfully updated...');
		            window.location.href='home_deductions.php';
		        </script>
		    <?php
		}
		else {
			echo "Not Successfull!";
		}
 ?>
