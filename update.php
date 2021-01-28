
<?php

   $dsn = 'mysql:host=localhost; dbname=is_project';
   $user='root'; 
   $pass='';

    $id=$_GET["id"];
    $conn = mysqli_connect("localhost","root","",'is_project');

$q=mysqli_query($conn,"select * from project_manager where id=".$id);
    $row=mysqli_fetch_assoc($q);

    mysqli_close($conn);


  ?>
<style>

body
    {
        background-color: #f5f7f8;
    }


</style>


<form action="update_ok.php" method="post">

<input type="hidden" name="id" value="<?php echo $row["id"]?>">
New deliverables <br>
<input type="text" name="deliverables" value="<?php echo $row["deliverables"]?>" required> <br>
<br>

<input type="submit" name="btn" value="update deliverables">