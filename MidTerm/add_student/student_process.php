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
    
    $student_name = filter_input(INPUT_POST, 'student_name');
    $gender = filter_input(INPUT_POST, 'gender');
    
    if ($student_name == NULL || $gender == NULL) {
        $error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_student($student_name, $gender);
        header("Location: ..");
    }
?>
