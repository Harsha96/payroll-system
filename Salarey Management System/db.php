
<?php


$conn = mysqli_connect("localhost", "root", "")or die( mysqli_connect_error($conn));
mysqli_select_db($conn,"payroll")or die( mysqli_connect_error($conn));

?>
