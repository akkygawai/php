<!-- . Write a PHP script to compute addition of two matrices as a form input. -->
<?php 
echo "<form method='get'>
<input type='submit' name='submit' value='MATRIX ADDITION'>
</form>";
if(isset($_GET['submit']))   
{
   $a=array(
            array(1,2,3),
            array(1,2,3),
            array(1,2,3)
         );
   $b=array(
            array(1,2,3),
            array(1,2,3),
            array(1,2,3)
         );
   print "\n Matrix 1: <br>";
   for($i=0;$i<3;$i++)
     {
      for($j=0;$j<3;$j++)
      {
         echo $a[$i][$j],"  ";
      }
      echo "<br>";
      }
   echo "\n Matrix 2: <br>";
   for($i=0;$i<3;$i++)
     {
      for($j=0;$j<3;$j++)
      {
         echo $b[$i][$j],"  ";
      }
      echo "<br>";
      }   
   $sum=array();
   echo "\n Sum of Matrices: <br>";
   for($i=0;$i<3;$i++)
     {
      for($j=0;$j<3;$j++)
      {
         echo $a[$i][$j]+$b[$i][$j],"  ";
      }
      echo "<br>";
     }   
}
?>
