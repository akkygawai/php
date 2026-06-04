<!-- Write a PHP script to find the factorial of a number.  -->
<?php
$n = (int)readline("Enter a number to find Factorial:");
$f=1;
for ($i=1;$i<=$n;$i++)
    $f=$f*$i;
echo "Factorial of ",$n, " is: ",$f;
?>
