<?php
    /* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * assignment 7
 * Sameer Jain
 * 10/20/15
 */
    $name = 'Sameer';
    
    $fullName = "Sameer\nJain\n";
    
    echo $fullName;
    
    $numberOfLetters = strlen($name);
    
    $firstLetter = substr($name, 0, 1);
    
    $old = "\n\nI like to eat apples. I like to read books.";
    
    
    
    $new = str_replace("I ", "You ", $old);
    
    echo "old phrase is \" $old \" \n new phrase is \"$new\"\n";
    
    $phrase1 = "Apple";
    $phrase2 = "Banana";
    
    $result = strcmp($phrase1, $phrase2);
    
    echo "\tcomparison of $phrase1 and $phrase2 is $result";
    
    $gpa = 3.7;
    
    $satScore = 2000;
    
    $squareRoot = sqrt($satScore);
    
    echo "sqrt of sat score is $squareRoot";
    
    $number = "52";
    
    $realNumber = (int)$number;
    
    echo $realNumber;
?>
