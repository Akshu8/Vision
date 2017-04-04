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
        <h5> Please wait, while we caption your images </h5>
        <div class="progress">
          <div class="progress-bar progress-bar-striped active" role="progressbar"
          aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
          </div>
        </div>
        <?php
          //execute eval.lua
          $cmd = "/bin/sh /home/akanksha/neuraltalk2/execute_eval.sh";
          exec($cmd, $output, $return);
					print_r($output);
          if (!$return) {
            echo "Captioning Successfully Completed";
          } else {
            echo "ERROR!";
          }
        ?>
			</div>
		</div>
	</body>
</html>
