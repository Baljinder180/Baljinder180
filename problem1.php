<?php

$array1=array(1,3,6,2,4);
$array2=array(2,0,4,1,2);
$array3=array();

for($i=0;$i<5;$i++)
{
$add[$i]=$array1[$i]+$array2[$i];

}
foreach($add as $val) {
    
    foreach($array3 as $uniqueVal) { 

        if($val == $uniqueVal) {
         continue 2;
        }
    }
    $array3[] = $val;
}
print_r($array3);
 
?>