<?php require "dbconnection.php";?>
<?php
$selected = "";
$q = $_GET["q"];
$array = array('Matric_no' => $q);
$records = $collection->find($array);


foreach($records as $key => $records)
{
$recordMatric = $records["Matric_no"];
$recordName = $records["Name"];
$recordDepartment = $records["Department"];
$recordCollege = $records["College"];
$recordSex = $records["Sex"];
$recordSponsor = $records["Sponsor"];
$recordSponsorPhone = $records["Sponsor_phone"];
$recordBloodGroup = $records["Blood_group"];
$recordClinicno = $records["Clinic_no"];
$recordPassport = $records["Passport"];
$recordDate = $records["Date_issued"];

if($q === null)
{
	echo  "<div id='card-update'>".
		"<div class='id-front'>".
			
			"<div class='content'>".
			"<img class='image is-inline' src='http://localhost/id_app/images/FUNAAB.png'>".
			"<h4 class='title-adjustment is-inline' id='title'>"."Federal University"."<br>"."of Agriculture, Abeokuta"."<br>".
			"<span>"."<p class='has-text-white-bis is-inline text-size-17 has-background-link padding-right-1'>"."STUDENT ID CARD 2015/2016 SESSION"."</p>"."</span>"."</h4>".
			"<div class='spacing-1 margin-top-1'>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Name: "."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Matric No:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Dept:"."<span>"."&nbsp"."MTS"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."College:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sex:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sponsor:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sponsor number:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Blood group:"."<span>"."&nbsp"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Clinic no:"."<span>"."&nbsp"."</span>"."</p>".
			"</div>".
			"<div class='image-adjust has-background-black-bis'>".
			"<img class='image is-128x128' src='$recordPassport' alt='passport'>".
			"</div>". 
			
			"</div>".
		
		"</div>".
		"<div class='gap'>"."</div>".
		"<div class='id-back'>".
			"<div class='content'>".
			"<div class='gap-1'>".
				"<ul>".
					"<li class='text-size-16'>"."<b>"."I clarify that the bearer whose photograph appears overleaf is a bonafide student"."<br>"."of the institution"."<b>"."</li>".
					"<li class='text-size-16'>"."<b>"."The loss/recovery of this card should be reported to the office of the undersigned."."</b>"."</li>".
					"<li class='text-size-16'>"."<b>"."This card remains the property of"."<span class='has-text-white-bis'>"."FEDERAL UNIVERSITY OF AGRICULTURE, ABEOKUTA P.M.B. 2240, ABEOKUTA, NIGERIA."."</b>"."</span>"."</li>".
					"<li class='text-size-16'>"."<b>"."it is for identification only and must be produced on demand. it is not transferable<br> and must be surrendered on ceasing to be a student."."</b>"."</li>".
				"</ul>".
			"</div>".
				
			"<div class='is-inline'>".
				"<p class='spacing-1 has-text-black-bis is-inline text-size-17'>"."Student Affairs Officer"."<span class='spacing-3 has-text-black-bis is-size-6'>"."22-05-2019"."</span>"."</p>".
				"<p class='spacing-4 has-text-black-bis text-size-17'>"."Date Issued"."</p>".
			"</div>".
			"</div>".		
		"</div>".
		"</div>".
	"</div>".
	"</div>";
}
else
{
echo  "<div id='card-update'>".
		"<div class='id-front'>".
			
			"<div class='content'>".
			"<img class='image is-inline' src='http://localhost/id_app/images/FUNAAB.png'>".
			"<h4 class='title-adjustment is-inline' id='title'>"."Federal University"."<br>"."of Agriculture, Abeokuta"."<br>".
			"<span>"."<p class='has-text-white-bis is-inline text-size-17 has-background-link padding-right-1'>"."STUDENT ID CARD 2015/2016 SESSION"."</p>"."</span>"."</h4>".
			"<div class='spacing-1 margin-top-1'>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Name: "."<span>"."&nbsp".$recordName."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Matric No:"."<span>"."&nbsp".$recordMatric."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Dept:"."<span>"."&nbsp"."MTS"."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."College:"."<span>"."&nbsp".$recordCollege."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sex:"."<span>"."&nbsp".$recordSex."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sponsor:"."<span>"."&nbsp".$recordSponsor."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Sponsor number:"."<span>"."&nbsp".$recordSponsorPhone."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Blood group:"."<span>"."&nbsp".$recordBloodGroup."</span>"."</p>".
			"<p class='text-size-17 has-text-weight-bold has-text-black-bis'>"."Clinic no:"."<span>"."&nbsp".$recordClinicno."</span>"."</p>".
			"</div>".
			"<div class='image-adjust has-background-black-bis'>".
			"<img class='image is-128x128' src='$recordPassport' alt='passport'>".
			"</div>". 
			
			"</div>".
		
		"</div>".
		"<div class='gap'>"."</div>".
		"<div class='id-back'>".
			"<div class='content'>".
			"<div class='gap-1'>".
				"<ul>".
					"<li class='text-size-16'>"."<b>"."I clarify that the bearer whose photograph appears overleaf is a bonafide student"."<br>"."of the institution"."<b>"."</li>".
					"<li class='text-size-16'>"."<b>"."The loss/recovery of this card should be reported to the office of the undersigned."."</b>"."</li>".
					"<li class='text-size-16'>"."<b>"."This card remains the property of"."<span class='has-text-white-bis'>"."FEDERAL UNIVERSITY OF AGRICULTURE, ABEOKUTA P.M.B. 2240, ABEOKUTA, NIGERIA."."</b>"."</span>"."</li>".
					"<li class='text-size-16'>"."<b>"."it is for identification only and must be produced on demand. it is not transferable<br> and must be surrendered on ceasing to be a student."."</b>"."</li>".
				"</ul>".
			"</div>".
				
			"<div class='is-inline'>".
			"<br>".
				"<p class='spacing-1 has-text-black-bis is-inline text-size-17'>"."Student Affairs Officer"."<span class='spacing-3 has-text-black-bis is-size-6'>".$recordDate."</span>"."</p>".
				"<p class='spacing-4 has-text-black-bis text-size-17'>"."Date Issued"."</p>".
			"</div>".
			"</div>".		
		"</div>".
		"</div>".
	"</div>".
	"</div>";
}
}
?>