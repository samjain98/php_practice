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
    
    $event_date = filter_input(INPUT_POST, 'event_date');
    $category_type = filter_input(INPUT_POST, 'category_type');
    $status_message = filter_input(INPUT_POST, 'status_message');
    
    $now = date("Y-m-d");
    $assignment = str_replace('/', '-', $event_date);
    
    $diff = abs(strtotime($assignment) - strtotime($now));
    $sign = strtotime($assignment) - strtotime($now);
    
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    
    if ($sign < 0)
    {
        $years = abs($years);
        $months = abs($months);
        $days = abs($days);
        $output = "The assignment is $years years, $months months, $days days overdue.";
    }
    else
    {
        $output = "The assignment is due in $years years, $months months, $days days.";
    }

    if ($event_date == NULL || $category_type == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_event($event_date, $category_type, $output);
        header("Location: ..");
    }
?>
