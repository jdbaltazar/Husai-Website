<?php
$ok = 0;
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

<body>
<?php
    //check if upload succesful then display it
    if($ok == 1) { 
?>
<img src="<?php echo $filename; ?>">
<?php 
    } 
?>
<form name="imgUpload" action="" method="post" enctype="multipart/form-data">
<input type="file" name="upload" id="upload" />
<input type="submit" name="xsubmit" value="Upload" onClick="return checkExt();" />
</form>
</body>
</html>