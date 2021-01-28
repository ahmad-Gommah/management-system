
<style>

a
{
  text-decoration: none;
    font-size: 40px;
    padding: 30px;
}
    body
    {
        background-color: #f5f7f8;
    }

</style>


<a href="Insert1.php"> Insert New Project </a> <br><br>

<?php 

$dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';

$con=mysqli_connect("localhost","root","",'is_project');

$q=mysqli_query($con,"select * from project_manager");


echo "<table border=1 width=100%>";

$counter=1;
while ($row=mysqli_fetch_assoc($q))
	{
		$id=$row["id"];
		echo "<tr>";
		
		echo "<td>".$counter;
        echo "<td>".$row["project_name"];
		echo "<td>".$row["title"];
		echo "<td>".$row["working_days"];
		echo "<td>".$row["starting_date"];
        echo "<td>".$row["due_date"];
        echo "<td>".$row["cost"];
        echo "<td>".$row["deliverables"];
		echo "<td><a href='update.php ? id=$id'>update Deliverable</a>";
        echo "<td><a href='form-task.php ? id=$id'>Add Task</a>";
		echo "</tr>";
		$counter++;
	}
        
	
	echo "</table>";
mysqli_close($con);



?>