<?php require "dbconnection.php"; ?>
<?php
$q = $_GET["q"];
$array = array('Matric_no' => $q);
$records = $collection->find($array);

foreach($records as $key => $records)
{
$recordName = $records["Name"];
$recordDepartment = $records["Department"];
$recordCollege = $records["College"];
$recordSex = $records["Sex"];
$recordSponsor = $records["Sponsor"];
$recordSponsorPhone = $records["Sponsor_phone"];
$recordBloodGroup = $records["Blood_group"];
$recordClinicno = $records["Clinic_no"];
$recordPassport = $records["Passport"];

echo 

"<div class='field'>".
"<label class='label'>"."Passport"."</label>".
"<div class='file is-info has-name is-boxed'>".
"<label class='file-label'>".
   "<input class='file-input' type='file' name='passport'>".
   "<span class='file-cta'>".
   "<span class='file-icon'>".
	   "<i class='fas fa-cloud-upload-alt'>"."</i>".
   "</span>".
   "<span class='file-label'>".
	   "Upload passport".
   "</span>".
   "</span>".
   "<span class='file-name'>"
   ."<input class='input' id='uploadFile' type='text' name='passportText'  disabled>".
   "</span>".
"</label>".
"</div>".
"</div>".

"<div>".
"<div class='field'>".
    "<label class='label'>"."Name."."</label>".
    "<div class='control'>".
        "<input class='input' type='text' placeholder='e.g Adebayo Samuel Abiodun' name='name' value='$recordName'>".
    "</div>".
"</div>".

"<div class='field'>".
    "<label class='label'>"."Department"."</label>".
    "<div class='control'>".
       "<input class='input' type='text' placeholder='e.g Biology' name='department' value='$recordDepartment'>".
    "</div>".
"</div>".

"<div class='field'>".
    "<label class='label'>"."College"."</label>".
    "<div class='control'>".
       "<input class='input' type='text' placeholder='e.g COLNAS' name='college'value='$recordCollege'>".
    "</div>".
"</div>";
if($recordSex == "Male"){
 echo "<div class='field'>".
    "<label class='label'>"."Sex"."</label>".
    "<div class='control'>".
        "<div class='select'>".
            "<select name='sex'>".
                "<option>"."Choose"."</option>".
                "<option selected>"."Male"."</option>".
                "<option >"."Female"."</option>".
            "</select>".
        "</div>".
    "</div>".
"</div>";
}
else
{
echo  "<div class='field'>".
    "<label class='label'>"."Sex"."</label>".
    "<div class='control'>".
        "<div class='select'>".
            "<select name='sex'>".
                "<option>"."Choose"."</option>".
                "<option>"."Male"."</option>".
                "<option selected>"."Female"."</option>".
            "</select>".
        "</div>".
    "</div>".
"</div>";
}

echo  "<div class='field'>".
    "<label class='label'>"."Sponsor"."</label>".
    "<div class='control'>".
       "<input class='input' type='text' placeholder='e.g Mr & Mrs Adebayo' name='sponsor' value='$recordSponsor'>".
    "</div>".
"</div>".

"<div class='field'>".
    "<label class='label'>"."Sponsor phone no"."</label>".
    "<div class='control'>".
       "<input class='input' type='text' placeholder='e.g 08031234567' name='sponsor-phone' value='$recordSponsorPhone'>".
    "</div>".
"</div>";

switch($recordBloodGroup){
		 case "A-": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option selected>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;
	     case "A+": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option selected>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
			    break;
		 case "B-": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option selected>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;
		 case "B+": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option selected>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;
		 case "AB+": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option selected>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;
		case "AB-": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option selected>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;
	     case "O-": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option selected>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
				break;				
         case "O+": echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option selected>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";	
				break;
		default:  echo "<div class='field'>".
				"<label class='label'>"."Blood group"."</label>".
				"<div class='control'>".
				"<div class='select'>".
				"<select name='bloodgroup' value='$recordBloodGroup'>".
					"<option selected>"."Choose"."</option>".
					"<option>"."A-"."</option>".
					"<option>"."A+"."</option>".
					"<option>"."B-"."</option>".
					"<option>"."B+"."</option>".
					"<option>"."AB+"."</option>".
					"<option>"."AB-"."</option>".
					"<option>"."O-"."</option>".
					"<option>"."O+"."</option>".
				"</select>".
				"</div>".
				"</div>".
				"</div>";
}
echo "<div class='field'>".
    "<label class='label'>"."Clinic no"."</label>".
    "<div class='control'>".
       "<input class='input' type='text' placeholder='e.g ST123456' name='clinicno' value='$recordClinicno'>".
   "</div>".
"</div>".
"</div>".
"</div>"."<br>";
}

?>