
<?php
//upload.php
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
  if($file_name)
  {
   $file_name = $file_array[0] . '-'. rand() . '.' . $file_extension;
  }        
  $location = $_POST["nombre_carpeta"] . '/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
      echo "subidas";
  }else
  {
  echo "No subidas";    
  }
 }
}

 

?>