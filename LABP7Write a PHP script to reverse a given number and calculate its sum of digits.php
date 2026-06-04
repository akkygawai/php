<!-- Write a PHP script to reverse a given number and calculate its sum of digits. -->
<?php
$n = (int)readline("Enter a number:");
$rev=0;
$sum=0;
$num=$n;
while($n>0)
    {
        $d=$n%10;
        $rev=($rev*10)+$d;
        $sum=$sum+$d;
        $n=(int)($n/10);
    }
echo "\nReversed value of ",$num, " is: ",$rev;
echo "\nSum of Digits of ",$num, " is: ",$sum;
?>
