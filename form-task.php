
<html>
    <head>
        
        
      
<style>


a
    {
        text-decoration: none;
    }
    
    
    /* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #fff;
  --divider: lightgrey;
  --body: #f5f7f8;
}

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

ul {
  list-style: none;
}

a {
  text-decoration: none;
  color: inherit;
}

body {
  background: var(--body);
  font-size: 16px;
  font-family: sans-serif;
  padding-top: 40px;
}

.chart-wrapper {
  max-width: 1150px;
  padding: 0 10px;
  margin: 0 auto;
}


/* CHART-VALUES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.chart-wrapper .chart-values {
  position: relative;
  display: flex;
  margin-bottom: 20px;
  font-weight: bold;
  font-size: 1.2rem;
}

.chart-wrapper .chart-values li {
  flex: 1;
  min-width: 80px;
  text-align: center;
}

.chart-wrapper .chart-values li:not(:last-child) {
  position: relative;
}

.chart-wrapper .chart-values li:not(:last-child)::before {
  content: '';
  position: absolute;
  right: 0;
  height: 510px;
  border-right: 1px solid var(--divider);
}


/* CHART-BARS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.chart-wrapper .chart-bars li {
  position: relative;
  color: var(--white);
  margin-bottom: 15px;
  font-size: 16px;
  border-radius: 20px;
  padding: 10px 20px;
  width: 0;
  opacity: 0;
  transition: all 0.65s linear 0.2s;
}

@media screen and (max-width: 600px) {
  .chart-wrapper .chart-bars li {
    padding: 10px;
  }
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.page-footer {
  font-size: 0.85rem;
  padding: 10px;
  text-align: right;
  color: var(--black);
}

.page-footer span {
  color: #e31b23;
}
    #form
    {
        margin: 10px;
        padding: 10px;
    }


</style>
    
        
    </head>
        
<body>
<form action="task.php" method="post" name="myform" id="form">
due_date
    <br>
<input type="date" name="due_date" required> <br><br>
    
start_date <br>
<input type="date" name="start_date" required> <br><br>
    
number working days<br> 
<input type="text" name="number_working_days"  required><br><br>
    actual_working_days<br> 
<input type="actual_working_days" name="actual_working_days" required><br><br>

    <input type="submit" name="btn" value="Add Task"><br><br><a href="subtask.php">Go Add Sub task</a>

</form>
    
    
    
    <div class="chart-wrapper">
  <ul class="chart-values">
    <li>sun</li>
    <li>mon</li>
    <li>tue</li>
    <li>wed</li>
    <li>thu</li>
    <li>fri</li>
    <li>sat</li>
  </ul>
  <ul class="chart-bars">
    <li data-duration="tue½-wed" data-color="#b03532">Task</li>
    <li data-duration="wed-sat" data-color="#33a8a5">Task</li>
    <li data-duration="sun-tue" data-color="#30997a">Task</li>
    <li data-duration="tue½-thu" data-color="#6a478f">Task</li>
    <li data-duration="mon-tue½" data-color="#da6f2b">Task</li>
    <li data-duration="wed-wed" data-color="#3d8bb1">Task</li>
    <li data-duration="thu-fri½" data-color="#e03f3f">Task</li>
    <li data-duration="mon½-wed½" data-color="#59a627">Task</li>
    <li data-duration="fri-sat" data-color="#4464a1">Task</li>
  </ul>
</div>
<footer class="page-footer">
  <small>Made with <span>❤</span> by <a href="#" target="_blank">Ahmad Gomma</a>
  </small>
</footer>
    
    </body>
    </html>


