<?php
    
/* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * Assignment #5
 * Sameer Jain
 * 9/28/15
 */
 ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>checkboxes</title>
    </head>
    <body>
        <form action="checkbox_process_data.php" method="post">
            <input type ="checkbox" name ="top[]" value = "pep"> Pepperoni<br> 
            <input type ="checkbox" name ="top[]" value = "msh"> Mushrooms <br>
            <input type ="checkbox" name ="top[]" value = "olv"> Olives
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="enter"><br>
            </div>
        </form>
        

    </body>
</html>
