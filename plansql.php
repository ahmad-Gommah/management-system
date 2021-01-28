<?php
$dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';
        $workinghs=$_POST['workinghs'];
        $startday=$_POST['startday'];

        $conn = mysqli_connect("localhost","root","", 'is_project');
        $q="INSERT INTO plan_configration(workinghs,startday)
        values ('$workinghs','$startday')";
       
        if ($result==true)
        {
	      header("Location: select.php");
            
        }
else
{
	echo "not inserted";
}

?>