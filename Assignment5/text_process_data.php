<?php
    
/* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * Assignment #5
 * Sameer Jain
 * 9/28/15
 */
 ?>
<?php
    $user_name = filter_input(INPUT_POST, 'user_name');
    $password = filter_input(INPUT_POST, 'password');
    $action = filter_input(INPUT_POST, 'action');
    
    echo $user_name."\n".$password."\n".$action;
?>

