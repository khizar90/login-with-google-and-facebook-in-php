<?php
echo "<h1>class</h1>";

class calculation{
    public $a,$b,$c;
    function sum(){
        $this->c=$this->a+$this->b;
        return $this->c;
    }
    function sub(){
        $this->c=$this->a-$this->b;
        return $this->c;
    }
}
$c1= new calculation();
$c1->a=10;
$c1->b=20;
echo $c1->sum();
echo "<br>";
echo $c1->sub();
echo "<br>";

$c2=new calculation();
$c2->a=20;
$c2->b=3;
echo "sum of two values =    ".$c2->sum();
echo "<br>";
echo "sum of two values =    ".$c2->sub();

echo "<h1>class constructor</h1>";

/////////////////////////////////////////////////////////////////////////////////////////////////


class  conc{
    function __construct(){
        echo "<h2>My self constructor</h2>";
    }
}
$co=new conc();

///////////////////////////////////////////////////////////////////////////////////////////////////



class person{ 
    public $name="ahsan";
    public $age=15 ;
    function __construct($n,$a){ 
        $this->name= $n;
        $this->age= $a;
    }
    function show(){
        echo $this->name."    ".$this->age."<br>";
    }
}
$con=new person('elo',3);
$con1=new person("ahmad",20);
$con2=new person("khiza",30);
// $con->name='umer';
// $con->age=20;
$con->show();
$con1->show();
$con2->show();


////////////////////////////////////////////////////////////////////////////////////////////////////


echo "<h1>inheritence</h1>";

class empoloye{
    public $name,$post,$sallery;
    function __construct($n,$p,$s){
        $this->name= $n;
        $this->post= $p;
        $this->sallery= $s;
    }
    function info(){
        echo "<h1>emoploye profile</h1>";
        echo "<b>name of emolye    <b> ="."    ".$this->name."<br>";
        echo "<b>post of emolye     <b>="."    ".$this->post."<br>";
        echo "<b>sallery of emolye   <b> ="."    ".$this->sallery."<br>";
    }
}
class manager extends empoloye{
    public $ta=1000;
    public $allounces=500;
    public $totalsallery;
    function info(){
        $this->totalsallery= $this->sallery+$this->ta+$this->allounces;
        echo "<h1>manager profile</h1>";
        echo "<b>name of emolye    <b> ="."    ".$this->name."<br>";
        echo "<b>post of emolye     <b>="."    ".$this->post."<br>";
        echo "<b>sallery of emolye   <b> ="."    ".$this->totalsallery."<br>";
    }
}
$p1= new empoloye("ahsan","sweeper", 1400);
$p2= new manager("umer","sales man", 30000);
$p1->info();
$p2->info();

////////////////////////////////////////////////////////////////////////////////////////////


echo "<h1>over ridddinhg</h1>";
class base{
    public function new(){
        echo "<h1>this is base class</h2>";
    }
}
class derived extends base{
    public function new(){
        
    echo "<h1>this is derived class</h2>";
    }
}
$d=new derived();
$d->new();

/////////////////////////////////////////////////////////////////////////////////////////////


echo "<h1>abstract classs</h1>";
abstract class abs{
    protected $name;
    abstract protected function myfun($a,$b);
}
class abs2 extends abs{
    public function myfun($a,$b){
        echo $a+$b;
    }
}
$ab=new abs2();
$ab->myfun(2,3);

///////////////////////////////////////////////////////////////////////////////////////////////////

echo "<h1>interface</h1>";

interface A{
    function a1($n);
}
interface B{
    function a2($n);
    function a3();

}
class C implements A,B{
    public function a1($n){
        echo "this is function of A Class".$n."<br>";
    }
    public function a2($n){
        echo "this is function of B class".$n."<br>";
    }
    public function a3(){
        echo "this also function of B class<br>";
    }
}
$inter = new C();
$inter1 = new C();
$inter2 = new C();
$inter->a1(5);
$inter1->a2(10);
$inter2->a3();

$cd=new  C();


///////////////////////////////////////////////////////////////////////////////////////////////////////


echo "<h1> static </h1>";
class Ab{
    public static $name= "yahoo baba<br>";
    public static function show($n){
        self::$name=$n;
        echo self::$name."<br>";
    }
}
echo Ab::$name;
Ab::show('self ');
class Bb extends Ab{
   public function child(){
    echo parent::$name;
    echo parent::show('parrent show');
   }
}
$d1=new Bb();
$d1->child();


///////////////////////////////////////////////////////////////////////////
class H{
    public static $name= "yahoo baba<br>";
    public static function show($n){
        self::$name=$n;
        echo self::$name."<br>";
    }
    function __construct(){
        self::show("<br>cons self");
    }

}
$h1=new H();


//////////////////////////////////late static binding///////////////////////////

class late{
    protected static $late="this is parrent classs variable<br>";
    public function show(){
        echo static::$late;
    }
}
class lateexend extends late{
    protected static $late="this is child class late<br>";

}
$lat=new lateexend();
$lat->show();


//////////////////////////////trait function//////////////////////////////////////
echo "<h1>trait function</h1>"; 

trait test{
    public function myfun(){
        echo "this is trait function<br>";
    }
}

class T{
    use test;
}
class I{
    use test;
}
class J{
    use test;
}
$objh=new T();
$objh->myfun();
$objh=new J();
$objh->myfun();
$objh=new I();



////////////////////////////trait over rinding/////////////////////////////////////

trait over{
    public function hello(){
        echo "<b>this is trait function</b><br>";
    }
}
trait ovr{
    public function hello(){
        echo "<b>this is trait ovr function</b><br>";
    }
}
class Z{
    use over;
    public function hello(){
       
        echo "<b>this is parrent class function</b><br>";
    }
}
class X extends Z{
    use over,ovr{
        ovr:: hello insteadOf over;
    }
    // public function hello(){
       
    //     echo "<b>this is child class function</b><br>";
    // }
}

$over1=new X();
$over1->hello();



//////////////////////////////////method changing///////////////////////////////

echo "<h1>Method changing</h1>"; 
class M{
    public function first(){
        echo 'tthis is first function<br>';
        return $this;
    }
    public function seccond(){
        echo 'tthis is first function<br>';
        return $this;
    }
    public function third(){
        echo 'tthis is third function<br>';
        return $this;
    }
}
$td = new M();
$td->first();
$td->seccond();
$td->third();
echo "<h1>here is Method changing</h1>"; 

$td->first()->seccond()->third();



///////////////////////////////////clall static////////////////////////////////////////

echo "<h1>__callstatic</h1>"; 
class student{
    private static function hello(){
        echo "there is static function name hello";
    }
    public static function __callStatic($method,$args){
        if(method_exists(__class__, $method)){
            call_user_func_array([__class__,$method],$args);
        }else{
            echo "method does not exist".$method;
        }
    }
}
student::hell();
?>