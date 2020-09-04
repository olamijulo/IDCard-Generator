<!DOCTYPE html>
<html>
<head>
	<meta name = "viewport" content = "width = device-width, initial-scale = 1">
	<link rel="stylesheet" href="css/bulma.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fontawesome.css">
	<link rel="stylesheet" href="css/solid.css">
	<script type="text/javascript" src="js/navbar.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/printThis.js"></script>

</head>

<body> 
		
<?php require "header.php"?>
<?php require "dbconnection.php"?>
<?php require "functions.php"?>
<!-------- content -------->
<div class="section is-fluid has-background-white-ter background">

<div class="container background">

<div class="columns">

	<div class="column is-3 has-background-white-bis box">
	<form action="" method="post">
	
		<div class="field">
			 <label class="label">Matric no</label>
			 <div class="control">
				 <div class="control">
			         <input name="matricno" class="input" list="matricno" onchange="autoFillMatricno(this.value);autoFillCardDetails(this.value)">
					 <datalist id="matricno">
					 <option>
						<?php
						 $records = $collection->find();
						 foreach($records as $key => $records)
						 {
						 	echo"<option>".$records["Matric_no"]."</option>";
						 }
						 ?>
					 </option>
					 </datalist>
			     </div>
			 </div>
		 </div>
	<div id="update-field">	 
	<fieldset disabled>
		 <div class="field">
			 <label class="label">Name</label>
			 <div class="control">
				<input name="name" class="input" type="text" placeholder="e.g Adebayo Samuel Abiodun">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Department</label>
			 <div class="control">
				<input name="department" class="input" type="text" placeholder="e.g Biology">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">College</label>
			 <div class="control">
				<input name="college" class="input" type="text" placeholder="e.g COLNAS">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Sex</label>
			 <div class="control">
				 <input name="sex" class="input" type="text" placeholder="e.g Male">
		     </div>
	     </div>
		 
		 <div class="field">
			 <label class="label">Sponsor</label>
			 <div class="control">
				<input name="sponsor" class="input" type="text" placeholder="e.g Mr & Mrs Adebayo">
			 </div>
		 </div>
		 
		 <div class="field">
			 <label class="label">Sponsor phone no</label>
			 <div class="control">
				<input name="phoneno" class="input" type="text" placeholder="e.g 08031234567">
			 </div>
		 </div>
		 
		<div class="field">
			 <label class="label">Blood group</label>
			 <div class="control">
				 <input name="bloodgroup" class="input" type="text" placeholder="e.g A+">
			 </div>
		 </div>
		 
		<div class="field">
			 <label class="label">Clinic no</label>
			 <div class="control">
				<input name="clinicno" class="input" type="text" placeholder="e.g ST123456">
			</div>
		 </div>
		 </fieldset>
	</div>
	</form>
	</div>
	
<div class="column is-offset-1 has-background-white- box">
	
	<div class="container is-fluid left-spacing">
	<div class="buttons">
		<button id="print" class="button is-link">
			<span class="icon is-medium">
				<i class="fas fa-print"></i>
			</span>
			<span>Print</span>
		</button>
		</div>
		<div id="card-update">
		<div class="id-front">
			
			<div class="content">
			<img class="image is-inline" src="http://localhost/id_app/images/FUNAAB.png">
			<h4 class="title-adjustment is-inline" id="title">Federal University<br>of Agriculture, Abeokuta<br>
			<span><p class="has-text-white-bis is-inline text-size-17 has-background-link padding-right-1">STUDENT ID CARD 2015/2016 SESSION</p></span></h4>
			<div class="spacing-1 margin-top-1">
			<p class="text-size-17 has-text-weight-bold has-text-black-bis" >Name: <span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis">Matric No:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis">Dept:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis">College:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis ">Sex:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis ">Sponsor:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis ">Sponsor number:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis ">Blood group:<span>&nbsp </span></p>
			<p class="text-size-17 has-text-weight-bold has-text-black-bis ">Clinic no:<span>&nbsp </span></p>
			</div>
			<div class="image-adjust has-background-black-bis">
			<img class="image is-128x128 " src="http://localhost/id_app/images/passport-overlay.png">
			</div> 
			
			</div>
		
		</div>
		<div class="gap"></div>
		<div class="id-back">
			<div class="content">
			<div class="gap-1">
				<ul>
					<li class="text-size-16"><b>I clarify that the bearer whose photograph appears overleaf is a bonafide student<br> of the institution<b></li>
					<li class="text-size-16"><b>The loss/recovery of this card should be reported to the office of the undersigned.</b></li>
					<li class="text-size-16"><b>This card remains the property of <span class="has-text-white-bis">FEDERAL UNIVERSITY OF AGRICULTURE, ABEOKUTA P.M.B. 2240, ABEOKUTA, NIGERIA.</b></span></li>
					<li class="text-size-16"><b>it is for identification only and must be produced on demand. it is not transferable<br> and must be surrendered on ceasing to be a student.</b></li>
				</ul>
			</div>
				
			<div class="is-inline">
			<br>
				<p class="spacing-1 has-text-black-bis is-inline text-size-17">Student Affairs Officer<span class="spacing-3 has-text-black-bis is-size-6">22-08-2013</span></p>
				<p class="spacing-4 has-text-black-bis  text-size-17">Date Issued</p>
			</div>
			</div>		
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
      $(".has-dropdown").toggleClass("is-hoverable");

  });
});
  $("#print").click(function(){
	$(".id-back,.id-front").printThis({ 
	debug: false,               // show the iframe for debugging
    importCSS: true,            // import parent page css
    printContainer: true,       // print outer container/$.selector
    loadCSS: ["http://localhost/id_app/css/bulma.min.css","http://localhost/id_app/css/style.css"],// path to additional css file - use an array [] for multiple
	removeInlineSelector: false
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
		xhttp.open("GET", "print_autofill.php?q="+str, true);
		xhttp.send();
	}
	
	function autoFillCardDetails(str)
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
				document.getElementById("card-update").innerHTML = this.responseText;
			}
		};
		xhttp.open("GET", "card_details.php?q="+str, true);
		xhttp.send();
	}
</script>
</body>
</html>