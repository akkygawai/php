<!-- Write a PHP script to swap two numbers.  -->
<?php
$a = (int)readline("Enter the first number:");
$b = (int)readline("Enter the second number:");
echo "\nBefore Swapping: \n A=",$a," B=",$b;
$t=$a;
$a=$b;
$b=$t;
echo "\n\nAfter Swapping: \n A=",$a," B=",$b;
?>
