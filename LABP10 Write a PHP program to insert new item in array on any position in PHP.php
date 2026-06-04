<!-- Write a PHP program to insert new item in array on any position in PHP.  -->
<?php
$arr = array(1, 2, 3, 4, 5);
echo "\nArray before inserting new element: ";
foreach ($arr as $x)
    echo "$x ";
echo "\n";
$value =(int)readline("Enter the New Value to be inserted: ");
$pos =(int)readline("Enter the Position to be inserted: ");
array_splice($arr, $pos, 0, $value);
echo "\nArray after inserting new element: ";
foreach ($arr as $x) 
    echo "$x ";
?>
