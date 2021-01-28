<?php

   $dsn ='mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';
        $due_date=$_POST['due_date'];
        $start_date=$_POST['start_date'];
        $number_working_days=$_POST['number_working_days'];
        $actual_working_days=$_POST['actual_working_days'];

        $conn = mysqli_connect("localhost","root","",'is_project');
        $q="INSERT INTO task(due_date,start_date,number_working_days,actual_working_days)
        values ('$due_date','$start_date','$number_working_days','$actual_working_days')";
        $result=(mysqli_query($conn,$q));
        if ($result==true)
        {
	      header("Location: select.php");
            
        }
else
{
	echo "not inserted";
}

?>