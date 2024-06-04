<?php 
$dir = "uploads/";
$file = $dir . basename($_FILES["fileimage"] ["name"]);
if(move_uploaded_file($_FILES["fileimage"] ["tmp_name"], $file)){
    echo "image uuploaded ";
}else{
    echo "image not uploaded";
};


?>