<script>
function validate()
    {
        
    var startday = document.myform.startday.value;

    if( startday == "monday" || startday == "friday"){
        return true;
    }
    else    
        {
            alert("Please Working Days is monday OR Friday");
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



<form name="myform" action="plansql.php" method="post" onsubmit="return validate()">
    workinghs
    <br><br>
    <input type="text" name="workinghs">
    <br><br>
    startday
    <br><br>
    <input type="text" name="startday">
    
    <br><br>
<input type="submit" name ="btn" value="Add Plan">
	

</form>