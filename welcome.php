<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style type="text/css">
        body{ background-color:#FDBC00; font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body><p>&nbsp;</p>

<div class="dropdown">

<div align="right">
	<button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
	Welcome <?=$_SESSION["username"];?> &nbsp; &nbsp;<br><!-- <?=$_SERVER['REMOTE_ADDR'];?> &nbsp; &nbsp;<br> -->
	<span class="caret"></span></button>
	<ul class="dropdown-menu dropdown-menu-right">
		<li><a href="reset.php">reset password</a></li>
		<li><a href="logout.php">logout</a></li> &nbsp; &nbsp;
	</ul>
</div>
</div><br>
<div align="center">

<table class= "table table-striped">
<tbody>
<tr align = "center">
<td>
	<button type="button" name="new_folder" id="new_folder" class="btn btn-success" data-toggle="modal" data-target="#myModal">New Folder</button></td>
    <td><button type="button" name="upload" id="upload" class="btn btn-success" onclick="window.location.href='index3.php'">Upload</button></td>
	<td><button type="button" name="shared" id="shared" class="btn btn-success">Shared Files</button>
	</td>
	</tr>
	</tbody></table>
</div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
	
	<!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create Folder</h4>
        </div>
		<div class="form-group">
		<form method="post" action="newfolder.php"> 
		       <div class="modal-body">
			   
          <p>Title</p>
		  <input type="text" name="Create" class="form-control">
        </div>
        <div class="modal-footer">
          <button type="submit" name="Submit" class="btn btn-default" >Submit</button>
        </div>
		</form>
		</div>
      </div>
      
    </div>
  </div>
  
<?php
include "satu.php";
if(isset($_POST['thepage'])){
?>
<iframe src="<?=$_POST['thepage'].".php"?>" height="500px" width="100%" style="border:none;">></iframe>
<?php
}
?>
</body></html>