<?php
Session_Start();
if(isset($_SESSION["User_Name"])){
    echo $_SESSION["User_Name"]; 
   }else{
    echo "user logout";
   }

?>