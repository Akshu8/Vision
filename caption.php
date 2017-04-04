<!DOCTYPE html>
<html>
	<head>
		<title>Upload Multiple Images Using jquery and PHP</title>
		<!--Including jQuery from Google ------>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="script.js"></script>
		<!-- Including CSS File ------>
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
      #image_upload {
        width: 200px;
        padding: 15px;
      }
		</style>
	</head>
	<body>
		<h2 align="center">Vision Based Image Description</h2>
		<hr>
		<div align="center" id="maindiv">
			<div id="formdiv">
        <div class="alert alert-success alert-dismissable">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>Success!</strong> Image Uploaded Successfully!.
        </div>
        <?php
          $dir = "uploads/";
          $files = scandir($dir);
          foreach($files as $file) {
            if(is_file($dir . $file)) {
              echo "<img src='$dir$file' id='image_upload'>";
          }
        }
        ?>
        <br>
        <a href="evaluate.php" class="btn btn-info">
          <span class="glyphicon glyphicon-upload"></span>
          Caption
        </a>
			</div>
		</div>
	</body>
</html>
