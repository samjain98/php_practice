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
    require('../model/category_db.php');
    
    $student_id = filter_input(INPUT_POST, 'student_id');
    $score = filter_input(INPUT_POST, 'score');
    $event_id = filter_input(INPUT_POST, 'event_id');

    if ($student_id == NULL || $event_id == NULL || $score == NULL)
    {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } 
    else {
        add_score($student_id, $event_id, $score);
        header("Location: ..");
    }
?>