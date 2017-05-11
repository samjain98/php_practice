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
            $valid_date = checkdate(substr($date[0], 5, 2),substr($date[0], 8, 2), substr($date[0], 0, 4));
            if($valid_date)
            {
                echo "Assignment " . $date[2] . " date is valid.\n";
            }
            
            $now = new DateTime();
            
            if ($date[0] < $now)
            {
                echo "Assignment " . $date[2] . " is expired.\n";
            }
            else
            {
                echo "Assignment " . $date[2] . " is not expired.\n";
            }
            
            $assignment = new DateTime();
            $assignment->setDate(substr($date[0], 0, 4), substr($date[0], 5, 2), substr($date[0], 8, 2) );
            $assignment->modify("+1 day");
            
            echo $assignment->format("Y/m/d") . " ";
        }   
        ?>
    </body>
</html>
