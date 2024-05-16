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



class Book {
  public $subject;
  public $course;

    function set_subject($subject){
     $this->subject = $subject;
   }

   function set_course($course){
    $this->course = $course;
   }

      function get_subject(){
      return $this->subject;
     }

       function get_course(){
      return  $this->course;
      }

}

$science = new Book();
$science->set_course("Science Student");
$science->set_subject("Biology");
echo $science->get_subject();
echo $science->get_course();


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
     /**
      * A constructor allows you to initialize an object's properties upon creation of the object.
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
Notice that the construct function starts with two underscores (__)!
      */

      class Water {
        public $name;
      
        public function __construct($name){
          $this->name = $name;
        }
         public function get_Name(){
          return $this->name;
         }
      
      }
      
      $Verna = new Water("Verna");
      echo $Verna->get_Name();


      class laptop{
        public $name;

        public function __construct($name){
          $this->name = $name;
        }

        public function get_name($name){
          $this->name;
        }

      }

      $laptop = new laptop("Lenovo");
      echo $laptop->name;

class Phones {
  public $name;
  public $Color;

  function  __construct($name, $Color){
    $this->name = $name;
    $this->Color = $Color;
  }

  function get_name(){
    return $this->name;
  }

  function get_color(){
    return $this->Color;
  }

}

$Nokia = new Phones("Nokia", "Red");

echo $Nokia->get_name();
echo $Nokia->get_color();


// Access Modifies.

//       class table {
//   public $name;
//   public $color;
//   public $weight;

//   function set_name($n) {  // a public function (default)
//     $this->name = $n;
//   }
//   protected function set_color($n) { // a protected function
//     $this->color = $n;
//   }
//   private function set_weight($n) { // a private function
//     $this->weight = $n;
//   }
// }

// $mango = new table();
// $mango->set_name('Mango'); // OK
// $mango->set_color('Yellow'); // ERROR
// $mango->set_weight('300'); // ERROR



//Inheritance in OOP = When a class derives from another class.
class Colors {
  public $name;
  public $numb;

public  function  __construct($name, $numb){
    $this->name = $name;
    $this->numb = $numb;
}

public function ShowPen(){
  echo "the name of the color is {$this->name} and the  number is {$this->numb}";
}

}


class Red extends Colors{
  public  function  myMesssage(){
    // echo "what is the name of the color";
    $this->ShowPen(0);
  }
}

$ColorRed = new Red("Red", "20");
$ColorRed->ShowPen();



class Pen {
  public $type;
  public $complex;

 public function __construct($type, $complex){
        $this->type = $type;
        $this->complex = $complex;
     }

     public   function intro(){
      echo "the name of the pen is {$this->type} and the color is {$this->complex}";
     }
}


class  penType extends Pen {
  function message(){
    echo "please can I know the pen name and the color?";
  }
}

$blue = new penType("Big pen", "Blue Pen");
$blue->message();
// $blue->intro();





//In the example beloew we see that all works fine! It is because we call the protected method (intro()) from inside the derived class.
class Mouse {
  public $name;
  public $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }


  protected function  anouce(){
    echo "the name of the mouse is {$this->name} and the color is {$this->color}";
  }

}

class  MouseType extends Mouse{
 public function News(){
    echo "please can I know the mouse name and the color?";
    $this->anouce();
  }
}


$wireleesMouse = new MouseType("Wireless Mouse", "Black");
// $wireleesMouse->News();



/**
 *PHP - Overriding Inherited Methods
Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit): 
 */

class  Machine {
   public  $name;
   public $color;


   public function __construct($name, $color){
     $this->name = $name;
     $this->color = $color;
   }

     public function introMachine(){
       echo "the name of the machine is {$this->name} and the color is {$this->color}";
     }
}


class Iron extends Machine {
  public $weight;

  public function __construct($name, $color, $weight){
    $this->name = $name;
    $this->color = $color;
    $this->weight = $weight;
  }

  public function inTroInon(){
    echo "the name of the machine is {$this->name} and the color is {$this->color} and the weight is {$this->weight}";
  }
}
$BigIron = new Iron("BigIron", "red", 70);
// $BigIron->inTroInon();


class KeyBoard {
  public $name;
  public $color;

  public function __construct($name, $color){
    $this->name = $name;
    $this->color = $color;
  }


  protected function keyType(){
    return "the name of the keyBoard is {$this->name} and the color is {$this->color}";
  }

}

class Wirelless extends KeyBoard {
    public function Tell(){
      echo $this->keyType();
    }
}

$Dell = new Wirelless("Dell Keyboard", "Black");
$Dell->Tell();


//The final keyword can be used to prevent class inheritance or to prevent method overriding.
// final class Fruit {
//   // some code
// }

// // will result in error
// class Strawberry extends Fruit {
//   // some code
// }



//PHP OOP - Class Constants
class constant {
  const MY_MESSAGE = "Hello this is constant varriable  and can not be change";
}
echo constant::MY_MESSAGE;



class anotherOne{
  const MY_MESSAGE = "Hello this is constant varriable  and can not be change";
  const MY_COME = "Hello this is constant ";
  public function byBy(){
    echo self::MY_MESSAGE;
  }

  public function Come(){
    echo self::MY_COME;
  }
}

$byBy = new anotherOne();
$Come = new anotherOne();
$byBy->byBy();
$Come->Come();



/**PHP - What are Abstract Classes and Methods?
Abstract classes and methods are when the parent class has a named method, but need its child class(es) to fill out the tasks.
An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code.
An abstract class or method is defined with the abstract keyword: */

//Parent class ;

abstract class Car {
  public $name;

  public function __construct($name){
    $this->name = $name;

  }

  abstract public function SMM() : string;
 
  }

//Child class

class Toyota extends Car {
  public function SMM() : string {
  return "the car name is  $this->name";
  }
}

$toyota = new toyota("Toyota");
// echo $toyota->SMM();


 //Interface

 /**PHP - What are Interfaces?
Interfaces allow you to specify what methods a class should implement.
Interfaces make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "polymorphism".
Interfaces are declared with the interface keyword: */

interface Rap {
  public function Raping();
}


class Sarkodie implements Rap{
  public function Raping(){
      echo "Sarkodie is a rapper in Ghana";
  }
}

$Sarkor = new Sarkodie();
$Sarkor->Raping();
























?>

<h2>i love <?php  echo"$words"; ?> </h2>
<h2>i love <?php  echo"$Page"; ?> </h2>
<h1><?php $blue->intro(); ?></h1>
<h1><?php $wireleesMouse->News(); ?></h1>
<h1><?php $BigIron->inTroInon();  ?></h1>
<h1><?php $byBy->byBy();  ?></h1>
<h2><?php echo $toyota->SMM(); ?></h2>