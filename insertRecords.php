<?php
    require "dbconnection.php";
    require "functions.php";
	// ----- insert records --------
	if(isset($_POST["submit"]))
	{
		fileUpload();
		$target_dir = "http://localhost/id_app/images/passport/";
		$target_file = $target_dir . basename($_FILES["passport"]["name"]);
		
		$insert = array(
						 'Name' => $_POST["name"],
						 'Matric_no' => $_POST["matricno"],
						 'Department' => $_POST["department"],
						 'College' => $_POST["college"],
						 'Sex' => $_POST["sex"],
						 'Sponsor' => $_POST["sponsor"],
						 'Sponsor_phone' => $_POST["sponsor-phone"],
						 'Blood_group' => $_POST["bloodgroup"],
						 'Clinic_no' => $_POST["clinicno"],
						 'Passport' => $target_file,
						 'Date_issued' => date('d-m-Y')
						);
		$collection->insertOne($insert);
	}
    ?>