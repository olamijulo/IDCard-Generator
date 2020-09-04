<?php
	require "dbconnection.php";
	require "functions.php";
	if(isset($_POST["update"]))
	{
		if(empty($_FILES["passport"]["name"]))
		{
			fileUpload();
			$target_dir = "http://localhost/id_app/images/passport/";
			$target_file = $target_dir . basename($_FILES["passport"]["name"]);
			$collection->updateOne(
			array('Matric_no' => $_POST["matricno"]),array(
			'$set' => array('Name' => $_POST["name"],
					  'Department' => $_POST["department"],
					  'College' => $_POST["college"],
			          'Sex' => $_POST["sex"],
			          'Sponsor' => $_POST["sponsor"],
			          'Sponsor_phone' => $_POST["sponsor-phone"],
			          'Blood_group' => $_POST["bloodgroup"],
					  'Clinic_no' => $_POST["clinicno"])));
		}
		else
		{
			fileUpload();
			$target_dir = "http://localhost/id_app/images/passport/";
			$target_file = $target_dir . basename($_FILES["passport"]["name"]);
			$collection->updateOne(
			array('Matric_no' => $_POST["matricno"]),array(
			'$set' => array('Name' => $_POST["name"],
					  'Department' => $_POST["department"],
					  'College' => $_POST["college"],
			          'Sex' => $_POST["sex"],
			          'Sponsor' => $_POST["sponsor"],
			          'Sponsor_phone' => $_POST["sponsor-phone"],
			          'Blood_group' => $_POST["bloodgroup"],
			          'Clinic_no' => $_POST["clinicno"],
					  'Passport' => $target_file)));
		}
	}
	elseif(isset($_POST["delete"])) {
		$collection->deleteOne(array('Matric_no'=> $_POST['matricno']));
	}
?>