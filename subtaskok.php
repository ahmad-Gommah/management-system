<?php

$dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';
        $start_date=$_POST['start_date'];

        $due_date=$_POST['due_date'];
        
        $conn = mysqli_connect("localhost","root","",'is_project');

        $q="INSERT INTO sub_task(start_date,due_date)
        
        values ('$start_date','$due_date')";

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