<?php
	if (isset($_POST['submit'])) {
		$j = 0;     // Variable for indexing uploaded image.
		$dir = "uploads/";     // Declaring Path for uploaded images.

		//delete older images before uploading new imageIsLoaded
		$files = scandir($dir);
		foreach($files as $file) {
			if(is_file($dir . $file)) {
					unlink($dir . $file);
			}
		}
		for ($i = 0; $i < count($_FILES['file']['name']); $i++) {
			// Loop to get individual element from the array
			$validextensions = array("jpeg", "jpg", "png");      // Extensions which are allowed.
			$ext = explode('.', basename($_FILES['file']['name'][$i]));   // Explode file name from dot(.)
			$file_extension = end($ext); // Store extensions in the variable.
			$target_path = $dir . md5(uniqid()) . "." . $ext[count($ext) - 1];
			$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
			if (($_FILES["file"]["size"][$i] < 1000000000000) && in_array($file_extension, $validextensions)) {
				if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path)) {
					$flag = true;
				} else {     //  If File Was Not Moved.
					echo '<br><div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  						<strong>Error!</strong> Please Try Again!.
					</div>';
				}
			} else {     //   If File Size And File Type Was Incorrect.
					echo '<br><div class="alert alert-danger alert-dismissable">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  						<strong>Error!</strong> Invalid File Type Or File Size!.
					</div>';
			}
		}
		if($flag) {
			header('Location: http://localhost/vision/caption.php');
		}
	}
?>
