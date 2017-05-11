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
        <title>dropdown</title>
    </head>
    <body>
        <form action="dropdown_process_data.php" method="post">
            <select name ="card_type">
                <option value ="visa"> Visa </option> 
                <option value ="mastercard">Mastercard</option>                
                <option value ="discover">Discover</option>
            </select>
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="enter"><br>
            </div>
        </form>
        

    </body>
</html>
