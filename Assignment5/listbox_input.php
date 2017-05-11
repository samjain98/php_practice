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
        <title>listbox</title>
    </head>
    <body>
        <form action="listbox_process_data.php" method="post">
            <select name ="top[]" size ="3" multiple>
                <option value ="pep" selected>Pepperoni</option> 
                <option value ="msh" > Mushrooms </option>
                <option value ="oli" >Olives</option>
            </select>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="enter"><br>
            </div>
        </form>
        

    </body>
</html>
