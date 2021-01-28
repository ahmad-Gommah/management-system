
<script>
    /*    
    
    */

function validate()
    {
        var start = new Date();
        var due = new Date();
        start = Date.parse(starting_date);
        due = Date.parse(due_date);
    
    var working_days = document.myform.working_days.value;

    if( working_days == "monday" || working_days == "friday"){
        return true;
    }
    else    
        {
            alert("Please Working Days is monday OR Friday");
            return false;
        }
        
     if(Date.parse(due)>Date.parse(start))
        
        {
           
            return true;
            
        }
    else
        {
            alert("Due date Must Greater Than Start");
            return false;
        }
        
     }

</script>

<style>

body
    {
        background-color: #f5f7f8;
    }


</style>


<form name="myform" action="insert_ok1.php" method="post" onsubmit="return validate()">
Project Name <br>
<input type="text" name="project_name" required> <br><br>
    
Title <br>
<input type="text" name="title" required> <br><br>

working_days<br>
    
<input type="text" name="working_days" required> <br><br>

starting_date<br>
    
<input type="date" name="starting_date" required ><br><br>
    
due_date<br>
    
<input type="date" name="due_date" required><br><br>
    
cost<br>
    
<input type="text" name="cost" required ><br><br>
    
deliverables<br>
    
<input type="text" name="deliverables" required><br><br>

    
<input type="submit" name ="btn" value="Add Project">
	

</form>