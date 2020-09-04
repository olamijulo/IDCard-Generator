<?php	
	function fileUpload()
	{
		$target_dir = $_SERVER["DOCUMENT_ROOT"]."/id_app/images/passport/";
		$target_file = $target_dir . basename($_FILES["passport"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
		if(isset($_POST["submit"]))
		{
/*			$check = getimagesize($_FILES["passport"]["tmp_name"]);
			if($check == true)
			{
				$uploadOk = 1;
			}
			else
			{
				$uploadOk = 0;
			}*/
		

		if(file_exists($target_file))
		{
			$uploadOk = 0;
		}

		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
		{
				$uploadOk = 0;
		}
		
		if($uploadOk == 0)
		{
			$uploadOk = 0;
		}
		else{
			move_uploaded_file($_FILES["passport"]["tmp_name"], $target_file);
		}
		}
	}
	
?> 