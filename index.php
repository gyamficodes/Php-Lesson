<?php
Session_Start();

$code = "Gyamfi John is  learning  PHP LESSON";
$_SESSION["User_Name"] = $code;


//php file upload



//file handling
$myText = readfile('./readme.txt');
echo $myText;

//The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened
// $myfile = fopen("webdictionary.txt", "r") ;
// echo fread($myfile,filesize("webdictionary.txt"));
// fclose($myfile);

//file delete
$filename = "upload/hotel2.jpg";

if(unlink($filename)){
    echo ("file delete");
}else{
    echo "file has not delete";
}

//php file content
$content =  "<h1>This is php content you need to  know </h1>";

if(file_put_contents('./about.html', $content, )){
  echo 'file written';
}
//php file get file content
$file = file_get_contents('./about.html');
echo   $file;


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

$cars = array("BMW", "Taxi", "LEXUS");
echo var_dump($cars);


//Access Indexed Arrays
//To access an array item you can refer to the index number.
echo  $cars[0];

//change the value
echo $cars[1] = "Food";

//Loop Through an Indexed Array
//To loop through and print all the values of an indexed array, you could use a foreach loop, like this:
  $card = array("Volvo", "BMW", "Toyota");
foreach ($card as $x) {
  echo "$x <br>";
}


//Access Associative Arrays
//To access an array item you can refer to the key name.

$workers= array("name" => array('John',"kofi"), "age" => 20, "gender" => "male");
echo Var_dump($student);

echo $workers["name"][0];
echo $workers["age"];


$course = array("arts" => "Econs", "science" => "Biology" , "visual" => "texals");
echo var_dump($course);

echo $course["arts"];


//Add Multiple Array Items
//To add multiple items to an existing array, use the array_push() function.
$fruits = array('apple', "pineapple", 'pawpaw');
array_push($fruits, "Coconut");



/**
 * Remove Array Item
To remove an existing item from an array, you can use the array_splice() function.
With the array_splice() function you specify the index (where to start) and how many items you want to delete.
 */
// $fruitsB = array('apple', "pineapple", 'pawpaw');
// array_slice($fruits, 'apple');







//constant varriable
// define("name", "Gyamfi John");
define("Mylist" ,array("codes","jonny" , "come"));

echo var_dump(Mylist);
// echo name;


//if eslw
$Childage  = 10;
$Adultage = 40;


$child = "Baby sister";
$adult = "Big sister";

if($Adultage >= 20){
  echo $adult;  
}

if($Childage == 10){
  echo $child;  
}

//switch statement
$Grade = "";

switch($Grade){
  case "A":
    echo "Execellent";
    break;
  case "B":
    echo "Good";
    break;
    case "C":
      echo "Fair";
      break;
      case "D":
        echo "Pass";
        break;
        case "E":
          echo "Fail";
          break;
          default:
          echo "You did not take part of the exam";
  }

  //Loops = this use to execute the same block of code again and again, as a certain condition is true;
  
  //for loop
  for($i = 0; $i < 10; $i++){
    echo $i;
  }
   

  $Food = array("Banku", "Rice", "Waakye", "Jollof");

  for($item = 0; $item < count($Food); $item++) {
      echo $Food[$item] . "<br>"; // Add a HTML line break for better readability on the web
  }
 
  //While loop == it execute when a certain condition is true;
  $i = 0;
  while($i < 10){
    echo $i;
    $i++;
  }

  $e = 0;
  $FoodStaff = array("Banku", "Rice", "Waakye", "Jollof");
  while($e < count($FoodStaff)){
    echo $FoodStaff[$e];
    $e++;
  }

  // do wihle loop



$t = 0;

do{
  echo $t;
  $t++;
}while($t < 10);


$Foods = array("Banku", "Rice", "Waakye", "Jollof");

do{
  echo $Foods[$ele];
$ele++;
}while($ele < count($Foods));

// The foreach loop - Loops through a block of code for each element in an array or each property in an object.

// The foreach Loop on Arrays
// The most common use of the foreach loop, is to loop through the items of an array.

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}

$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($members as $x => $y){
  echo $x. " is ". $y. " years old. <br>";
}


//PHP Functions
//The real power of PHP comes from its functions.
//PHP has more than 1000 built-in functions, and in addition you can create your own custom functions.

function myMesssages(){
  echo "Helle this is my first function in Php";
}

myMesssages();



//PHP Function Arguments
//Information can be passed to functions through arguments. An argument is just like a variable.
//Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.

function addNum($a, $b){
  echo $a + $b;
}
addNum(10, 20);

function handdleaName($name){
  echo $name;
}

handdleaName("John");

function setName($c, $d){
   echo $c . " ". $d;
}

define("c", "Gyamfi");
define("d", "Gyamfi");

setName(c,d);


// php default value 
function addprice($rice = 10, $banku = 20){
  return $rice + $banku;
}

echo 20 + addprice(10,4);


/**
 * PHP Default Argument Value
The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
 */

function setHeight($minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // THis will use the default agument 50.


// PHP Functions - Returning values
// To let a function return a value, use the return statement:

function handdleFullName($FirstName, $SecondName){
  $FullName = $FirstName . $SecondName;
  return $FullName;
}

echo handdleFullName("Gyamfi", "John");

// Passing Arguments by Reference
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.z
// When a function argument is passed by reference, changes to the argument also change the variable that was passed in. To turn a function argument into a reference, the & operator is used:

function myAge(&$age){
   $age += 22;
}
$thisyear = 1;
myAge($thisyear);


/**
 * PHP is a Loosely Typed Language
In the examples above, notice that we did not have to tell PHP which data type the variable is.
PHP automatically associates a data type to the variable, depending on its value. Since the data types are not set in a strict sense, you can do things like adding a string to an integer without causing an error.
In PHP 7, type declarations were added. This gives us an option to specify the expected data type when declaring a function, and by adding the strict declaration, it will throw a "Fatal Error" if the data type mismatches.
In the following example we try to send both a number and a string to the function without using strict:
Example
 */
// function addNumbers(int $a, int $b) {
//   return $a + $b;
// }
// echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10

//You can specify a different return type, than the argument types, but make sure the return is the correct type:

  /**
   * <?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
  return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
   */


   //php date and time date($format, $timestamp);
   //format = required for . specifies  the timestamp/ Default it the curre






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


interface Zoo {
  public function behaviour();
}

Class Goat implements Zoo{
  public function behaviour(){
    echo "Goats are very smart and wise";
  }
}

class Lion implements Zoo {
  public function behaviour(){
    echo "Lions are wired animals and they eat fresh only";
  }
}



$MaleGoat = New Goat();
$lion = new Lion();
// $lion->behaviour();
// $MaleGoat->behaviour();
$zoos = array($MaleGoat,$lion);

foreach($zoos as $Zoo){

  echo $Zoo->behaviour();
}





/**
 * PHP - What are Traits?
PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.
Traits are used to declare methods that can be used in multiple classes. Traits can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).
Traits are declared with the trait keyword:
 */

trait hotels{
  public function someNews(){
    echo "this is some news about hotel";
  }
}

class TapHotel{
  use hotels;
}

$tabhotels = new TapHotel();
$tabhotels->someNews();

//HP - Using Multiple Traits
//Let's look at another example:

trait Adom{
  public function AdomNews(){
    echo "this is some news about Adom";
  }
}
trait Joyprime{
  public function JoyprimeNews(){
    echo "this is some news about JoyPrime";
  }
}


class Media{
  use Adom;
  use Joyprime;
}


$media = new Media();
$media->AdomNews();
$media->JoyprimeNews();



/**
 * PHP - Static Methods
Static methods can be called directly - without creating an instance of the class first.
Static methods are declared with the static keyword:
 */



 class Players {
  public static function HelloWord(){
    echo "Vini Jrn and Jude for balon dior";
  }
 }

 Players::HelloWord();


 class greeting {
  public static function greet(){
    echo "Good morning!";
  }
 }

 greeting::greet();



/**
 * PHP - Static Properties
Static properties can be called directly - without creating an instance of a class.
Static properties are declared with the static keyword:
 */


class ClassName {
  public static $Box = "Microtik";
}
 echo ClassName::$Box;

 class Pray{
  public static $thanks = "Thank God For life";
public function ShowPrayer(){
 echo self::$thanks;
}


 }

 $pray = new  Pray();
$pray->ShowPrayer();


/**
 * A class can have both static and non-static properties. A static property can be accessed from a method in the same class using the self keyword and double colon (::):
 */


 class P2 {
  public static $Boxes = "Microtik Boxes";

  public function MyBoxes(){
    echo self::$Boxes;
  }
 }


 $p2 = new P2();
 $p2->MyBoxes();


//  To call a static property from a child class, use the parent keyword inside the child class:

class Voltic {
  public static $V1 = "Voltic Boottle";
}


class Ven extends Voltic{
    public function maieVer(){
      return  parent::$V1;
    }
}
$Verna1 = new Ven();
echo $Verna1->maieVer();




//Implement the Iterator interface and use it as an iterable:
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}





//PHP Global Variables - Superglobals HEAD

//Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
$x = 75;
  
function myfunction() {
  echo $GLOBALS['x'];
}
myfunction();

//php date and time date($format, $timestamp);


//Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
$x = 75;
  
function myfunct() {
  echo $GLOBALS['x'];
}
myfunct();

//php date and time date($format, $timestamp);
//format = required for . specifies  the timestamp/ Default it the curre

echo "todays date is".date("l d-m-y");
// echo date("m");
// echo date("y");
// echo date("l");

/**
 * PHP Tip - Automatic Copyright Year
Use the date() function to automatically update the copyright year on your website:
 */
// &copy; 2010-<?php echo date("Y");

// Get a Time
echo "The time is " . date("h:i:sa");

date_default_timezone_set("Africa/Kumasi");
echo "The time is " . date("h:i:sa");

/**
 * Create a Date With mktime()
The optional timestamp parameter in the date() function specifies a timestamp. If omitted, the current date and time will be used (as in the examples above).

The PHP mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.

Syntax
mktime(hour, minute, second, month, day, year)
 */



 $d=mktime(11, 14, 54, 8, 12, 2014);
 echo "Created date is " . date("Y-m-d h:i:sa", $d);


 //php file sesseion 
//  A session is a way to store information (in variables) to be used across multiple pages.
// Unlike a cookie, the information is not stored on the users computer.


interface  languages{
   public  function learnLang();
}


class  html implements languages{
       function  learnLang(){
           echo "I am learning html oo";
       }
}
  
$HT = new html();
$HT->learnLang();



//php form submision
//checking for forms

if(isset($_POST["login"])){
  echo var_dump($_POST, "You Have Login Succesfully");
}

if(isset($_POST["register"])){
  echo var_dump($_POST, "You Have Register Succesfully");
}


// how to use form data in php  and extracting infformation from form datta

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<h2>i love <?php  echo"$words";?> </h2>
<h2>i love <?php  echo"$Page"; ?> </h2>
<h1><?php $blue->intro(); ?></h1>
<h1><?php $wireleesMouse->News(); ?></h1>
<h1><?php $BigIron->inTroInon();  ?></h1>
<h1><?php $byBy->byBy();  ?></h1>
<h2><?php echo $toyota->SMM(); ?></h2>

<!-- form  upload image -->
<form action="upload.php" method="post" enctype="multipart/form-data">
<h1> Select file to upload</h1>
<input type="file" name="fileimage" >
<input type="submit" value="upload the file">
</form>


<!-- form handdling -->
<!-- form submit -->
<!-- login -->
<!-- <form action="" method="POST">
  <label for="name">Name:</label>
  <input type="text" name="name" placeholder="name">
  <button type="submit" name="login">Submit</button>
</form> -->

<br>
<!-- Register -->
<!-- <form action="" method="POST">
  <label for="name">Register:</label>
  <input type="text" name="first_name" placeholder="name">
  <button type="submit" name="register">Submit</button>
</form> -->


<!-- how to use form data in php  and extracting infformation from form datta  -->
<form action="" method="POST">
  <label for="name">Name:</label>
  <input type="text" name="name" placeholder="name">
  <br>
  <label for="name">email:</label>
  <input type="email" name="email" placeholder="email">
  <br>
  <label for="name">password:</label>
  <input type="password" name="password" placeholder="email">
  <br>
  <button type="submit" name="login">Submit</button>


<!-- how to validate a form -->
<!-- how to use form data in php  -->
 <!-- validating my name -->



 

</form>
</body>
</html>




