<!DOCTYPE html>
<html>
	<head>
		<title>Upload Multiple Images Using jquery and PHP</title>
		<!-------Including jQuery from Google ------>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<!------- Including CSS File ------>
		<link rel="stylesheet" type="text/css" href="style.css">

		 <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link href='//fonts.googleapis.com/css?family=Spirax' rel='stylesheet'>
		<style>
			h2 {
	    			font-family: 'Spirax';
				font-size: 40px;
			}
		</style>
	</head>
	<body>
		<h2 align="center">Vision Based Image Description</h2>
		<hr>
		<div align="center" id="maindiv"> 
			<div id="formdiv">
				<form enctype="multipart/form-data" action="" method="post">
					Upload Image for Captioning
					<br>
					<div id="filediv"><input name="file[]" type="file" id="file"/></div>
					<button type="button" id="add_more" class="btn btn-info">
						<span class="glyphicon glyphicon-plus"></span>
						Add More Files
					</button>				
					<!-- input type="submit" value="Upload File" name="submit" id="upload" class="btn btn-info" /> -->
					<button type="submit" id="upload" class="btn btn-info" name="submit">
						<span class="glyphicon glyphicon-upload"></span>
						Upload
					</button>		
				</form>
				<!------- Including PHP Script here ------>
				<?php include "upload.php"; ?>
			</div>
		</div>	
	</body>
</html>
