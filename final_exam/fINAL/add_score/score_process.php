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
    
    $student_id = filter_input(INPUT_POST, 'student_id');
    $score = filter_input(INPUT_POST, 'score');
    $event_id = filter_input(INPUT_POST, 'event_id');
    $students = get_students();
    $events = get_grades();
    $event_counter = 0;
    $student_counter = 0;
    
    
    foreach ($events as $event):
        if(in_array($event_id, $event))
        {
            $event_counter++;
        }
    endforeach;
    
    foreach ($students as $student):
        if(in_array($student_id, $student))
        {
            $student_counter++;
        }
    endforeach;
        
    if ($student_id == NULL || $event_id == NULL || $score == NULL || $student_counter == 0 || $event_counter == 0)
    {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } 
    else {
        add_score($student_id, $event_id, $score);
        header("Location: ..");
    }
?>