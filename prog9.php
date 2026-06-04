<!-- Write a PHP script to implement atleast seven string functions.  -->
<?php  
$str=readline("Enter a String to convert to Lowercase: ");  
echo "String with Lowercase: ", strtolower($str),"\n\n";  

$str=readline("Enter a String to convert to Uppercase: ");  
echo "String with Uppercase: ",strtoupper($str),"\n\n"; 

$str=readline("Enter a String to convert the First Letter to Uppercase: ");  
echo "String with First Letter Uppercase: ",ucfirst($str),"\n\n";  

$str=readline("Enter a String to convert the First Letter to Lowercase: ");  
echo "String with First Letter Lowercase: ",lcfirst($str),"\n\n";  

$str=readline("Enter a String to convert the First Letter of each Word to Uppercase: ");  
echo "String with First Letter of each Word to Uppercase: ",ucwords($str),"\n\n"; 

$str=readline("Enter a String to find the Length: ");  
echo "Length of the String: ",strlen($str),"\n\n"; 

$str=readline("Enter a String to Reverse: ");  
echo "Reversed String: ",strrev($str),"\n\n";
?>  
