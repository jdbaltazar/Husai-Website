<?php

$username = "root";
$password = "";
$host = "localhost";
$database = "trypic";

mysql_connect($host, $username, $password) or die("Can not connect to database: ".mysql_error());

mysql_select_db($database) or die("Can not select the database: ".mysql_error());

$id = 2;
// $id = $_GET['id'];

// if(!isset($id) || empty($id) || !is_int($id)){
//      die("Please select your image!".mysql_error());
// }else{

$query = mysql_query("SELECT * FROM test where id=3");
while($row = mysql_fetch_array($query)){
//$content = $row['image'];
	header('Content-type: image/jpg');
	echo $row['image'];
}


  //   echo $content;
// }

?>