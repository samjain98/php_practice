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
    
    $event_date = filter_input(INPUT_POST, 'event_date');
    $category_type = filter_input(INPUT_POST, 'category_type');
    
    if ($event_date == NULL || $category_type == NULL) {
        $error = "Invalid product data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_event($event_date, $category_type);
        header("Location: ..");
    }
?>
