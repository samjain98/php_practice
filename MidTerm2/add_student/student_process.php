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

    
    $student_name = filter_input(INPUT_POST, 'student_name');
    $gender = filter_input(INPUT_POST, 'gender');
    $student_email = filter_input(INPUT_POST, 'student_email');
    $student_number = filter_input(INPUT_POST, 'student_number');
    $at_sign = strpos($student_email, "@");
    $dot_sign = strpos($student_email, ".");
    if ($student_name == NULL || $gender == NULL || !(preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $student_number))|| $dot_sign === false || $at_sign === false ) {
        $error = "Invalid data. Check all fields and try again.";
        include('../errors/error.php');
    } else {
        add_student($student_name, $gender, $student_email, $student_number);
        header("Location: ..");
    }
?>
