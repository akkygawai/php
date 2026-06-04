<!-- Write a PHP script to check whether given number is palindrome or not.  -->
<?php
$n = (int)readline("Enter a number:");
$rev=0;
$sum=0;
$num=$n;
while($n>0)
    {
        $d=$n%10;
        $rev=($rev*10)+$d;
        $n=(int)($n/10);
    }
if ($rev==$num)
    echo "The number ",$num," is a Palindrome";
else
    echo "The number ",$num," is Not a Palindrome";
?>
