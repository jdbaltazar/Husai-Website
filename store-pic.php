<?php
//Check if submit button exist and click
if(isset($_POST['xsubmit'])) {
  // get the original filename
  $image = $_FILES['upload']['name'];
 
  // image storing folder, make sure you indicate the right path
  $folder = "images/"; 
 
  // image checking if exist or the input field is not empty
  if($image) { 
    // creating a filename
    $filename = $folder . $image; 
 
    // uploading image file to specified folder
    $copied = copy($_FILES['upload']['tmp_name'], $filename); 
 
    // checking if upload succesfull
    if (!$copied) { 
 
      // creating variable for the purpose of checking: 
      // 0-unsuccessfull, 1-successfull
      $ok = 0; 
    } else {
      $ok = 1;
    }
  }
}
?>


<html>
<head>
<title>Upload Image To Folder In PHP Step By Step</title>
</head>

<body>
<form name="imgUpload" action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload" id="upload" />
<input type="submit" name="xsubmit" value="Upload" />
</form>
</body>
</html>