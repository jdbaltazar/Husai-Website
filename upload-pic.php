<?php
include 'upload.php';
?>


<html>
<head>
<title>Upload Image To Folder In PHP Step By Step</title>

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