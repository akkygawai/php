<!-- Write a PHP script to generate a Fibonacci series using Recursive function -->
<?php
$num = (int)readline("Enter the max term for Fibonacci series:");
echo "Fibonacci series is: \n";
for ($i = 0; $i < $num; $i++)
    echo Fibo($i),"\n";

function Fibo($num)
    {
    if($num == 0)
        return 0;
    else if( $num == 1)
        return 1;
    else
        return (Fibo($num-1) + Fibo($num-2));
    }
