<?php
/* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * Assignment #1 assign1.2.php
 * Sameer Jain
 * 8/21/15
 */
    $first_name = $_GET['first_name'];
    $last_name = $_GET['last_name'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Name Test</title>
        
        <link rel="stylesheet" type = "text/css" href = "main.css">
        
    </head>
    <body>
        <h2>Welcome</h2>
        <p>First name: <?php echo $first_name; ?></p>
        <p>Last name: <?php echo $last_name; ?></p>
    </body>
</html>