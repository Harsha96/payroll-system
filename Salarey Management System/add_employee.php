<?php
  include "db.php";
  if(isset($_POST['submit'])!="")
  {
      $lname      = $_POST['lname'];
      $fname      = $_POST['fname'];
      $gender     = $_POST['gender'];
      $type       = $_POST['emp_type'];
  


   $sql = mysqli_query($conn,"INSERT into employee(emp_id,lname, fname, gender, emp_type,deduction,overtime,bonus)VALUES(NULL,'$lname','$fname','$gender', '$type', NULL,NULL,NULL)");


    if($sql)
    {
      ?>
        <script>
            alert('Employee had been successfully added.');
            window.location.href='home_employee.php?page=emp_list';
        </script>
      <?php
    }

    else
    {
      ?>
        <script>
            alert('Invalid.');
            window.location.href='index.php';
        </script>
      <?php
    }
  }
?>
