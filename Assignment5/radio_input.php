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
        <title>radio buttons</title>
    </head>
    <body>
        <form action="radio_process_data.php" method="post">
            <input type ="radio" name ="card_type" value="visa" checked>Visa<br> 
            <input type ="radio" name ="card_type" value = "mastercard"> Mastercard <br>
            <input type ="radio" name ="card_type" value="discover"> Discover
            
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="enter"><br>
            </div>
        </form>
        

    </body>
</html>
