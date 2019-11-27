<?php

include("connect.php");

session_start();

if(isset ($_POST['Submit'])){
	
	$Create = $_POST['Create'];
	echo $Create;
	
	$sql = "INSERT INTO folder ('folder_name') VALUES ('$Create')";
	
	$result = mysqli_query($link,$sql);

	if($result){
		
		header("Location: welcome.php");
		
	}
	else
	{
		echo" error"; 
		
	}
}


?>