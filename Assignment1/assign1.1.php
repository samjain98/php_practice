<?php
/* 
 * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * Assignment #1 assign1.1.php
 * Sameer Jain
 * 8/21/15
 */

$list_price = $_GET['list_price'];

$discount_percent = .20;
$discount_amount = $list_price * $discount_percent;
$discount_price = $list_price - $discount_amount;

$discount_amount_formatted = "$".number_format($discount_amount);
$discount_price_formatted = "$".number_format($discount_price);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Name Test</title>
        
        <link rel="stylesheet" type = "text/css" href = "main.css">
        
    </head>
    <body>
        <h2>Welcome</h2>
        <p>Discount amount: <?php echo $discount_amount_formatted; ?></p>
        <p>Discount price: <?php echo $discount_price_formatted; ?></p>
    </body>
</html>