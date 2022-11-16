<?php
// Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum. Go to the editor
// Sample Input
echo "<h1> without function</h1>";
$a=4;
$b=5;
($a==$b)?  $tri=($a+$b)*3 :  $tri=$a+$b;
echo $tri;
echo "<h1> with function</h1>";


// with function
function sum($c,$d){
    return ($c==$d)?  ($c+$d)*3 : $c+$d;
}
echo sum(3,4);
echo "<br>";
echo sum(5,5);

echo "<h1> with if statement</h1>";
if ($a==$b){
    echo $s= ($a+$b)*3;

}else{
    echo $s= $a+$b;
}
/////////////////////////////////////////////////////////////////////


// Write a PHP program to get the absolute difference between n and 51. If n is greater than 51 return triple the absolute difference. Go to the editor
// Sample Input:


echo "<h1> absolute differnece</h1>";
function test($n){
    $x=51;
    if($n>$x){
        return ($n-$x)*3;
    }
    else{
        return $n-$x;
    }
}
echo test(53);
echo "<br>";
echo test(30);
echo "<br>";
echo test(51);


echo "<h2>number is even or odd<br>";
if(isset($_POST['submit'])){
    $n=$_POST['number'];
    if ($n%2==0){
        echo "even";
    }else{
        echo "odd";
    }
}

echo "<h1>linear search</h1>";

$array=[1,2,3,4,5,6,7,8,9,10];
$search=8;
$i=0;
$n=0;
while($i<10){
    if($array[$i]==$search){
        $n=1;
        break;
    }
    $i++;
}
if($n==1){
    echo "<h1>number is found</h1>";
    }
    else{
        echo "<h1>number not found</h1>";
    }
$low=0;
$high=9;
while($low<=$high){
    $mid =($low+$high)/2;
    if($array[$mid]==$search){
        echo "number found".$mid;
    }
    if($array[$mid]>$search){
       $high=$mid-1;

    }else{
        $low=$mid+1;
    }

}
if($array[$mid]!=$search){
    echo "number not found";
}

$array1=[4,5,1,2,7,10,8];
echo "<h1>without sorting</h2>";
echo "<pre>";
print_r($array1);
echo "</pre>";
for($i=0; $i<6; $i++){
    for($t=0; $t<6; $t++){
        if($array1[$t]>$array1[$t+1]){
            $temp=$array1[$t];
            $array1[$t]=$array1[$t+1];
            $array1[$t+1]=$temp;
        }
    }
}
echo "<br>";
echo "<h1>after sorting</h2>";
echo "<pre>";
print_r($array1);
echo "</pre>";
?>
<form method="post" >
    <input  class="field" type="text" name="number" required>
    <input  class="btn" type="submit" name="submit">

</form>