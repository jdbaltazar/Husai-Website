<?php
$ok = 0;
//Check if submit button exist and click
if(isset($_POST['xsubmit'])) {
  // get the original filename
  $image = $_FILES['upload']['name'];
 
  // image storing folder, make sure you indicate the right path
  $folder = "../upload/"; 
 
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
<!-- 
<html>
<head>
<script type="text/javascript">
  function checkExt(){
    var filename = document.getElementById('upload').value;
    var filelength = parseInt(filename.length) - 3;
    var fileext = filename.substring(filelength,filelength + 3);
  
    // Check file extenstion
    if (fileext.toLowerCase() != "gif" && fileext.toLowerCase() != "jpg" && fileext.toLowerCase() != "png") {
      alert ("You can only upload png or gif or jpg images.");
      return false;
    } else {
      return true;
    }
}
</script>
</head>
</html>-->