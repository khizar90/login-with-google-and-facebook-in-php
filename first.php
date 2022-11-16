<?php
echo "hello everyone","baba";
echo "<h1>this is the  heading one </h1>";
echo "<b><i>this is bold tag</i></b><br>";
echo 21.45;
print "hello <br>";

echo 1223;

$name = "<b>this is variable</b><br>";

echo $name;

echo "<h1>".$name ."</h1>";
echo "this is das". $name;




$a = 34;
$b = 35;
echo $a+$b;
var_dump($a); 
$bool = true;
var_dump($bool."<br>");

$ar = array("css"=>10,"html", "hy");
echo $ar["css"]."<br>";
var_dump($ar);


define("nummm",500,false);
echo nummm ."<br>";





$w=2;
$d = 3;
$c = $w-$d;
$m = $w+$d;
$g = $w*$d;
$d = $w/$d;

echo $c."<br>";
echo $m."<br>";
echo $g."<br>";
echo $d;
$w++;
echo $w."<br>";



echo "<h1>hello </h1> ";

$d = 3;
$c = 4;
if($d>$c){
    echo "d is greater<br>";
}
else{
    echo "c is greater<br>";
}

if($d==$c ||$d<$c ){
    echo "d is greater or may be equal<br>";
}
if($d==$c and $d>$c ){
    echo "d is greater or may be equal<br>";
}
if($d==$c xor $d<$c ){
    echo "c is greater or may be equal<br>";

}


$persentage= 200;
if($persentage>=80 && $persentage<100){
    echo "you are on merit";
}
elseif($persentage>=60 && $persentage<60){
    echo "you are on 1st devision";
}
elseif($persentage>=33 && $persentage<60){
    echo "you are 2nd  devision";
}
elseif($persentage<33){
    echo "you are fail";
}
else
    echo "enter valid persantage<br>";











$day =510;
switch($day){
    case 1:
        echo "today is monday";
        break;
    case 2:
        echo "today is tuesday";
        break;
    case 3:
        echo "today is wednesday";
        break;
    case 4:
        echo "today is thursday";
        break;
    case 5:
        echo "today is friday";
            break;
    case 6:
        echo "today is saturday";
        break;
    case 7:
         echo "today is sunday";
        break;
    default:
        echo "enter valid day<br>";
        break;
        
}


$con=56;
($con<=20)? $xz="trues<br>": $xz="false<br>";
echo $xz;


$ad ="hello";
$cd = $ad . "world<br>";
echo $cd;


for($i=0; $i<=5; $i++){
    echo "for loop is running <br>";
}

$i=0;
while($i <=5){
    echo "while loop is running<br>";
    $i++;
}

$t=1;
echo "<ul>";
do{
    echo "<li>do while loop is running</li><br>";
    $t++;
}while($t<=5);
echo "</ul>";


for($a=1;  $a<=100; $a=$a+10 ){
    for($b=$a; $b< $a+10; $b++){
        echo $b ." ";
    }
    echo "<br>";
}



for ($k=0; $k<=5; $k++){
    if($k == 3){
        continue;
    }
    if($k==4){
        break;
    }
    echo $k."<br>";
}


for ($k=0; $k<=5; $k++){
    if($k == 3){
        goto abc;
    }
   
    echo $k."<br>";
}

abc:
echo "this is lable<br>";

function myname(){
    echo "<h1> this is function </h1><br>";
}

myname();




function argu($x,$y){
    echo $x."<br>";
    echo $y."<br>";
    echo $x+$y."<br>";

}
argu(4,5);



function ret( $n,$d){
    $v=$n+$d."<br>";
    return $v;
}
echo ret(10,5);





function ref(&$str){
    $str="hello";
}
$t="hy here is refrence vraibale";
ref($t);
echo $t;


function dispaly($number){
    if($number<=5){
        echo $number."<br>";
        dispaly($number+1);
    }
   
}
dispaly(1);

function factorial($n){
    if($n==0){
        return 1;
    }
    else{
        return ($n* factorial($n-1));
    }
}
echo factorial(10)."<br>";





$arr= [10,20,30,30,32,78,90];
echo $arr[5]."<br>";
echo "<pre>";
print_r($arr);
echo "<pre>";


$arra=["bill"=>10,"miss"=>20,"tro"=>30,"joe"=>40,];
echo $arra["bill"];


echo "<h1> the 2nd day</h1> ";


$array = [10,4,5,6,6];

echo "<h1>this is for each loop concept</h1>";
foreach($array as $value){
    echo $value."<br>";
}
echo "<h1>this is for each loop concept as assosiative array</h1>";
$array = ["first"=>10,"seccond"=>4,"third"=>5,"forth"=>6,"fifth"=>6];
echo "<ul>";
foreach( $array as $key=> $value){
    echo $key."=".$value."<br>";
}
echo"</ul>";

echo "<h1>this is multidimension array array</h1>";
$employe=[
    [1,"khizar","mannager", 50000],
    [2,"ahmad","salesman", 40000],
    [3,"usman","computer operator", 30000],
    [4,"arham","worker", 25000],
    [5,"asad","sweeper", 10000],
    [6,"adil","office boy", 15000],
];
echo $employe[0][0]."   ";
echo $employe[0][1]."   ";
echo $employe[0][2]."   ";
echo $employe[0][3]."   ";
echo "<pre>";
print_r($employe);
echo "</pre>";
echo "<table border=2px>";
for($i=0; $i<6; $i++){
    echo "</tr>";
    for($m=0; $m<4 ; $m++){
        echo "<td>".$employe[$i][$m]."</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<table border=2px>
<tr>
<th>employe id</th>
<th>name</th>
<th>post</th>
<th>sallery</th>



</tr>";
foreach($employe as $row){

    echo "<tr>";
    foreach($row as $col){
        echo "<td>".$col."</td>";
    }
    echo "</tr>";
}

echo "</table>";

for($star=1; $star<6; $star++){
    for($star2=0; $star2<$star; $star2++){
        echo $star;

    }
    echo "<br>";
}

echo "<h1>this is an list arrray</h2>";
$array=[
    [1,2],
    [2,3]
];
foreach($array as list($a,$b)){
    echo $a.$b."<br>";

}
echo count($employe,1);
echo sizeof($employe);
echo "<br>";

$find= ['khizar','ahamd'];
echo  array_search("khizar",$find);
echo "<br>";

 if(in_array("khizar",$find)){
    echo "find successfuly";

 }else{
    echo "cannot find";
 }
?>

