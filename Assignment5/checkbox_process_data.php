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
$toppings = filter_input(INPUT_POST, 'top',
        FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY);

if ($toppings !== NULL)
{
    foreach($toppings as $key => $value) 
    {
        echo $key. ' = ' . $value . '<br>';
    } 

}    
else
{
        echo 'No toppings selected';
}
    

