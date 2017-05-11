<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    $dsn = 'mysql:host=localhost;dbname=my_gradebook1';
    $username = 'mgs_user';
    $password = 'pa55word';
    $db = new PDO($dsn, $username, $password);
    global $db;
    $query = 'SELECT *
              FROM grade_event';
    $statement = $db->prepare($query);
    $statement->execute();
    $dates = $statement->fetchAll();
    $statement->closeCursor();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        foreach ($dates as $date)
        {
            $info = array();
            
            $info[$date[2]] = $date[1];
            
            echo "The following event " . $date[2] . " has a category " . $date[1] . "\n";
            
        }
        
        $date2 = array_splice($dates, 2);
        
        foreach ($date2 as $date)
        {
            echo $date[1];
        }
        
        $new_dates = shuffle($dates);
        
        
        ?>
    </body>
</html>
