<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="css/bulma.min.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/solid.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/all.js"></script>


</head>

<body> 
		
<?php require "header.php"?>
<?php require "dbconnection.php"?>
<?php require "updateRecords.php"?>
<!-----------------content------------------------>
<div class="section is-fluid has-background-white-ter background">

<div class="container">

<div class="columns">

	<div class="column is-3 has-background-white-bis box">
	<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		<div class="field">
			 <label class="label">Matric no</label>
			 <div class="control">
				 <div class="select">
			         <select name="matricno" onchange="autoFillMatricno(this.value)">
					 <option></option>
						 <?php
						 $records = $collection->find();
						 foreach($records as $key => $records)
						 {
						 	echo"<option>".$records["Matric_no"]."</option>";
						 }
						 ?>
			         </select>
			     </div>
			 </div>
		 </div>
		 
		<div id="update-field">
		 <div class="field">
			 <label class="label">Passport</label>
			 <div class="file is-info has-name is-boxed">
			 <label class="file-label">
				<input class="file-input" type="file" name="passport">
				<span class="file-cta">
				<span class="file-icon">
					<i class="fas fa-cloud-upload-alt"></i>
				</span>
				<span class="file-label">
					Upload passport
				</span>
				</span><span class="file-name">
				<input class='input' id='uploadFile' type='text' name='passportText' disabled>
				</span>
			 </label>
			 </div>
		 </div>
		
		 
		 <div class="field">
			 <label class="label">Name</label>
			 <div class="control">
				 <input class="input" type="text" placeholder="e.g Adebayo Samuel Abiodun" name="name">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Department</label>
			 <div class="control">
				<input class="input" type="text" placeholder="e.g Biology" name="department">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">College</label>
			 <div class="control">
				<input class="input" type="text" placeholder="e.g COLNAS" name="college">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Sex</label>
			 <div class="control">
				 <div class="select">
			         <select name="sex">
						 <option>Choose</option>
				         <option>Male</option>
				         <option>Female</option>
			         </select>
			     </div>
		     </div>
	     </div>
		 
		 <div class="field">
			 <label class="label">Sponsor</label>
			 <div class="control">
				<input class="input" type="text" placeholder="e.g Mr & Mrs Adebayo" name="sponsor">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Sponsor phone no</label>
			 <div class="control">
				<input class="input" type="text" placeholder="e.g 08031234567" name="sponsor-phone">
			 </div>
		 </div>
		 
		<div class="field">
			 <label class="label">Blood group</label>
			 <div class="control">
				 <div class="select">
			         <select name="bloodgroup">
						 <option>Choose</option>
				         <option>A-</option>
				         <option>A+</option>
						 <option>B-</option>
				         <option>B+</option>
						 <option>AB+</option>
				         <option>AB-</option>
						 <option>O-</option>
				         <option>O+</option>
			         </select>
			     </div>
			 </div>
		 </div>
		 
		<div class="field">
			 <label class="label">Clinic no</label>
			 <div class="control">
				<input class="input" type="text" placeholder="e.g ST123456" name="clinicno">
			</div>
		 </div>
		 </div><br>

		<div class="field is-grouped">
			 <div class="control">
				<button class="button is-link is-light" type="reset">Clear</button>
			 </div>
			 <div class="control">
				<button class="button is-link" type="submit" name="update">Update</button>
			 </div>
			 <div class="control">
				<button class="button is-link" type="submit" name="delete">Delete</button>
			 </div>
		 </div>
	</form>
	</div>

	
	
	<div class="column is-offset-1 has-background-white-bis box">
		<div class="table-container is-scrollable">
		 <table class="table is-hoverable is-fullwidth is-narrow is-striped is-size-7">
		 <thead>
			 <tr>
				 <th>Name</th>
				 <th>Matric no</th>
				 <th>Department</th>
				 <th>College</th>
				 <th>Sex</th>
				 <th>Sponsor</th>
				 <th>Sponsor phone no</th>
				 <th>Blood group</th>
				 <th>Clinic number</th>
				 <th>Date issued</th>
			 </tr>
	      </thead>
		  <tbody>
		  <?php
				$records = $collection->find();
				foreach($records as $key => $records)
				{
				  echo 
				  "<tr>"
				  ."<td>".$records["Name"]."</td>"
				  ."<td>".$records["Matric_no"]."</td>"
				  ."<td>".$records["Department"]."</td>"
				  ."<td>".$records["College"]."</td>"
				  ."<td>".$records["Sex"]."</td>"
				  ."<td>".$records["Sponsor"]."</td>"
				  ."<td>".$records["Sponsor_phone"]."</td>"
				  ."<td>".$records["Blood_group"]."</td>"
				  ."<td>".$records["Clinic_no"]."</td>"
				  ."<td>".$records["Date_issued"]."</td>"
				  ."</tr>";  
				}
				
			?>
		  </tbody>
		  <tfoot>
			 <tr>

				 <th>Name</th>
				 <th>Matric no</th>
				 <th>Department</th>
				 <th>College</th>
				 <th>Sex</th>
				 <th>Sponsor</th>
				 <th>Sponsor phone no</th>
				 <th>Blood group</th>
				 <th>Clinic number</th>
				 <th>Date issued</th>
			 </tr>
		  </tfoot>
		</table>
		</div> 
	</div>
</div>
</div>
</div>
</div>
</div>
</div>

			
<script>
		
		$(document).ready(function() {

  // Check for click events on the navbar burger icon
 		 $(".has-dropdown").click(function() {

      // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
      //$(".navbar-burger").toggleClass("is-active");
    	 $(".has-dropdown").toggleClass("is-hoverable");

 		 });
	});
	</script>
	<script>
	function autoFillMatricno(str)
	{
		if(str == "")
		{
			return;
		}
		let xhttp = new XMLHttpRequest(); 
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status == 200)
			{
				document.getElementById("update-field").innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "update_autofill.php?q="+str, true);
		xhttp.send();
	}
	</script>
	<script>
    $(document).ready(function(){
        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
			// document.getElementById("uploadFile").value = "";
			document.getElementById("uploadFile").value = fileName;

            // alert('The file "' + fileName +  '" has been selected.');
        });
    });
</script>
<!-- <script>
  function setfilename(val)
  {
    var fileName = val.substr(val.lastIndexOf("\\")+1, val.length);
    document.getElementById("uploadFile").value = fileName;
  }
</script> -->
</body>
</html>