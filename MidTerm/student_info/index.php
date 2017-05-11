<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * midterm
 * Sameer Jain
 * 10/10/15
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
        $all_students = get_all_students();
        include ('all_student_info.php');
    }
?>