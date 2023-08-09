<?php 
function filterFruits($array)
{
$fruitsDb=array("apple","banana","orange","pineapple","grapes","avacado","strawberry");

foreach($fruitsDb as $fruit){
foreach($array as $value)
{
if($fruit==$value)
{
$fruitArr[]=$value;
}
}


}
print_r($fruitArr);

}
$mixFruits=array("apple","cabbage","banana");
filterFruits($mixFruits);
?>