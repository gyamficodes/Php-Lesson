<?php 

$name = "JOHN is going to school h";
echo "$name";

//PHP data types
/*
String - text
integer - number
float-doule
array
null
Boolean

*/ 

//String
$words = "Hello Word";
$Page =  "This my page";
echo gettype($Page);  //  this help you to know the kind of datatype you using

//Integer
$age = 40;

//float number 
$floatNuber = 1.3;
echo gettype($floatNuber); 

//boolean 
$isLogin =  true;
echo gettype($isLogin);

//array
$student = array("john", "Yaw", "John", "Apraku");
echo  Var_dump($student);

for($i = 0; $i <10 ; $i++){
    echo $i;
};

//php Math
$min = min(20, 15 , 1 ,  70);
$max = max(20, 15 , 1 ,  70);
echo $min;
echo $max;

$sqt = sqrt(64);
echo $sqt; 

// $rand = rand();
// echo $rand;
//MD array

$student = array("name" => array('John',"kofi"), "age" => 20, "gender" => "male");
echo Var_dump($student);


//constant varriable
// define("name", "Gyamfi John");
define("Mylist" ,array("codes","jonny" , "come"));

echo var_dump(Mylist);
// echo name;


//if eslw
$age = 40;



// Object Oriented programming


class student {
   // data/properties
    public $name;

    function set_name($name){
    $this->name = $name;
    }

    function get_name(){
     return  $this->name ;
    }

     

}

$John = new student();
$John->set_name("John");
echo  $John->get_name();


// adding moere property and methods
class Behaviour {
    public $Human;
      public $Color;

      function  set_human($Human) {
        $this->Human = $Human;
      }

      function set_color($Color){
        $this->Color = $Color;
      }

         function get_human(){
               return $this->Human;
         }

         function get_color(){
            return $this->Color;
         }
}


echo "<br>";

$Kwabena = new Behaviour();
$Kwabena->set_human("Kwabena");
$Kwabena->set_color("Black");

echo $Kwabena->get_color();
echo  $Kwabena->get_human();


//instanceof  You can use the instanceof keyword to check if an object belongs to a specific class:

     $Kwabena = new Behaviour();
     var_dump($Kwabena instanceof Behaviour);

     //consturctor
     





?>

<h2>i love <?php  echo"$words"; ?> </h2>
<h2>i love <?php  echo"$Page"; ?> </h2>

