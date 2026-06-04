<?php
$n=$_POST['Prime'];
$flag=0;
for($i=2;$i<=$n/2;$i++)
    { if($n % $i==0)
        {
            $flag=1;
            break;
        }
    }
if($flag==0)
    echo $n, " is Prime";
else
    echo $n, " is Not Prime";
?>
