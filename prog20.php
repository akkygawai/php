<?php  
$name = $_FILES['fileToUpload']['name'];  
$tmp_name = $_FILES['fileToUpload']['tmp_name'];   
  
if(move_uploaded_file($tmp_name, $name)) {  
    echo "File uploaded successfully!";  
} else{  
    echo "Sorry, file not uploaded, please try again!";  
}  
?>