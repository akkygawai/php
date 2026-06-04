<!-- Write a PHP script to find maximum of three numbers.  -->
<?php
$a=(int)readline("Enter the value of a: ");
$b=(int)readline("Enter the value of b: ");
$c=(int)readline("Enter the value of c: ");
if($a>$b && $a>$c)
    echo $a, " is Maximum";
else if($b>$c)
            echo $b, " is Maximum";
        else
            echo $c, " is Maximum";
?>
