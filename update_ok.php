<?php

   $dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';

$id=$_POST['id'];
$deliverables=$_POST['deliverables'];

$conn = mysqli_connect("localhost","root","", 'is_project');

$q="UPDATE project_manager SET deliverables = '$deliverables' WHERE project_manager.id = $id";
$result=(mysqli_query($conn,$q));
if ($result==true)
{
 header("Location: select.php");
}
else
{
    echo"not Updated";
}
mysqli_close($conn);

?>