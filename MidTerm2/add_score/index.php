<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * final
 * Sameer Jain
 * 12/18/15
 */
    require('../model/database.php');
    require('../model/product_db.php');
    
    $action = filter_input (INPUT_POST, 'action');
    {
         if ($action == NULL)
        {
            $action = 'list_info';
        }
    }

    if ($action == 'list_info')
    {
        $scores = get_scores();
        include ('score_info.php');
    }
?>
