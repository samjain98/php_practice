<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * Assignment #3
 * Sameer Jain
 * 9/15/15
 */
    $dsn = 'mysql:host=localhost;dbname=my_guitar_shop1';
    $username = 'mgs_user';
    $password = 'pa55word';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>