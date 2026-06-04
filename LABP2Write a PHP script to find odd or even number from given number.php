<!-- Write a PHP script to find odd or even number from given number.  -->
<?php
$no = (int)readline("Enter an Integer:");
if ($no % 2 == 0) 
    {
        echo "The number ",$no," is Even";
    }
else
    {
        echo "The number ",$no," is Odd";
    }
?>
