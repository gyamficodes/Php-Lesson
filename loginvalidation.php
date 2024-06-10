<?php // php validation

function text_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$nameing = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr = $websiteErr = "";
if($_SERVER["REQUEST_METHOD"] = "POST"){
  $nameing = text_input($_POST["nameing"]);
  $email = text_input($_POST["email"]);
  $gender = text_input($_POST["gender"]);
  $comment = text_input($_POST["comment"]);
  $website = text_input($_POST["website"]);
}


// validation
if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(empty($_POST["nameing"])){
    $nameErr = "Name is required";
  }else{
    echo   $nameing = test_input($_POST["nameing"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nameing)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  if(empty($_POST["email"])){
    $emailErr = "Email is required";
  }else{
  echo  $email = text_input($_POST["email"]);
  }

  if(empty($_POST["gender"])){
    $genderErr = "Gender is required";
  }else{
    echo    $gender = text_input($_POST["gender"]);
  }

  if(empty($_POST["website"])){
     $websiteErr = "";
  }else{
    echo  $website = text_input($_POST["website"]);
  }
  if(empty($_POST["comment"])){
    $comment = "";
  }else{
    echo  $comment = text_input($_POST["comment"]);
  }

}
 ?>