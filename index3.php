<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>

<form method="post" enctype="multipart/form-data">
	<label>Title</label>
	<input type ="text" name="title">
	<label>File Upload</label>
	<input type="File" name="file">
	<input type="submit" name="submit">

</form>

</body>
</html>

<?php

$DB_SERVER = "localhost";
$DB_USERNAME= "root";
$DB_PASSWORD ="";
$DB_NAME ="test";

$conn = mysql_connect('localhost', 'root', '', 'test');

if(isset($_POST["submit"]))
{
	
	$title = $_POST["title"];
	
	$pname = rand(1000,1000)."-".$_FILES["file"]["name"];
	
	$tname = $_FILES["files"]["tmp_name"];
	
	$uploads_dir = '/images';
	
	move_uploaded_file($tname, uploads_dir.'/'.$pname);
	
	$sql = "INSERT into dbupload(title,image) VALUES('$title','$pname')";
	
	if(mysqli_query($conn,$sql))
	{
		echo "Successfully upload";
		
	}
	else
	{
		echo "Error";
	}
}
?>