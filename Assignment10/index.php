<html>
    <!--
    * Sameer Jain
 * sameejain@my.smccd.edu
 * CIS 380
 * OL
 * assignment 11
 * Sameer Jain
 * 11/17/15
    -->
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //PART ONE, PAGE 385
            function add_3_by_val($value)
            {
                $value += 3;
                echo '<p>Number: ' . $value . '</p>';
            }
            
            $number = 5;
            add_3_by_val($number);
            echo '<p>Number: ' . $number . '</p>';
            
            
            function add_3_by_ref(&$value)
            {
                $value += 3;
                echo '<p>Number: ' . $value . '</p>';
            }
            
            $number = 5;
            add_3_by_ref($number);
            echo '<p>Number: ' . $number . '</p>';
            
            function wrap_in_tag(&$text, $tag)
            {
                $before = '<' . $tag . '>';
                $after = '</' . $tag . '>';
                $text = $before . $text . $after;
            }
            
            $message = 'Value out of range.';
            wrap_in_tag($message, 'p');
            echo $message;
            
            function array_analyze($array, &$sum, &$prod, &$avg)
            {
                $sum = array_sum($array);
                $prod = array_product($array);
                $avg = $sum/ count($array);
            }
            
            $list = array(1, 4, 9, 16);
            array_analyze($list, $s, $p, $a);
            echo '<p>Sum: ' . $s . '<br />Product: ' . $p . '<br />Average ' . $a . '</p>';
            
            //PART TWO, PAGE 387
            
            $a = 10;
            function show_a()
            {
                echo $a;
            }
            
            show_a();
            
            
            $b = 10;
            function show_b()
            {
                global $b;
                echo $b;
            }
            
            show_b();
            
            $c = 10;
            function show_c()
            {
                $c = $GLOBALS['c'];
                echo $c;
            }
            
            show_c();
            
            function show_d()
            {
                $d = 10;
                echo $d;
            }
            
            echo $d;
        ?>
        
    </body>
</html>
