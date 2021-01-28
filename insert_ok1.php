<?php

   $dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';
        $project_name=$_POST['project_name'];
        $title=$_POST['title'];
        $working_days=$_POST['working_days'];
        $starting_date=$_POST['starting_date'];
        $due_date=$_POST['due_date'];
        $cost=$_POST['cost'];
        $deliverables=$_POST['deliverables'];

        $conn = mysqli_connect("localhost","root","",'is_project');
         

        $q="INSERT INTO project_manager(project_name,title,working_days,starting_date,due_date,cost,deliverables)
        values ('$project_name','$title','$working_days','$starting_date','$due_date','$cost','$deliverables')";
        $result=(mysqli_query($conn,$q));

        if ($result==true)
        {
	      header("Location: select.php");
        }
      else
      {
	echo "not inserted";
      }
mysqli_close($conn);


?>