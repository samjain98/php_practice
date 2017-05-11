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
    $card_type = filter_input(INPUT_POST, 'card_type');
    
    if ($card_type == NULL)
    {
        $card_type = 'unknown';
    }
    
    echo $card_type;
?>

