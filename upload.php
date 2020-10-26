<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$temp_file =$_FILES["fileToUpload"]["tmp_name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

echo "target_file: " . $target_file;
echo "imageFileType: " . $imageFileType;
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    echo "not null";
}
else {
    echo "null";
}

echo "temp_file: " . $temp_file;

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($temp_file, $target_file)) {
      
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>