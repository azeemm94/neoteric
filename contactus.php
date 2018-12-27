<!DOCTYPE html>
<?php $pageno=6 ?>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Neoteric - Contact Us</title>
	<link rel="icon" href="img/logoicon.png" type="image/png">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!-- <link rel="stylesheet" href="css/bootstrap.css" type="text/css"> -->
	<!-- <link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css"> -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
	<link rel="stylesheet" href="css/neostyle.css" type="text/css">
</head>
<body><div id="wrapper">
    <?php include 'header.php' ?>
    
	<div id="content">

	<div class="container-fluid banner">
		<div class="container">
			<img src="img/bannercontact.png" />
		</div>
	</div>

	<div class="container contactus">
		<div class="row form">
			<div class="col-md-6 col-sm-12 col-xs-12 form">
				
				<?php

				date_default_timezone_set("Asia/Kolkata");
				$date=date("Y/m/d")."  ".date("h:i:sa");
				
				$firstname=$emailid=$coname=$mobile=$state=$city=$interest=$businesscategory=$otherspec=$message=$thank="";
				$flag['name']=true;
				$error=array("firstname"=>"","emailid"=>"","coname"=>"","mobile"=>"","state"=>"","city"=>"","interest"=>"","businesscategory"=>"","otherspec"=>"");
				if (!empty($_POST['submit-btn']))
				{
					//Check Error in First Name
					$firstname=$_POST['firstname'];
					if($_POST['firstname']=="")$error['firstname'].="Please enter your name";
					else
					{
						for($i=0;$i<strlen($firstname);$i++)
						{
							$c=$firstname[$i];
							if(($c>="a"&&$c<="z")||($c>="A"&&$c<="Z")||$c==" ");
							else
							{
								$flag['name']=false;
								break;
							}
						}
						if ($flag['name']==false)
						$error['firstname'] .="Only alphabets allowed in this field";
					}
					//Check Error in Email ID
					$emailid=$_POST['emailid'];
					if($_POST['emailid']=="")
					{
						$error['emailid'].="Please enter your E-mail ID";
					}
					elseif (filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL) === false) $error['emailid'] .="Please enter a valid email address";
					$coname=$_POST['coname'];
					//Check Error in Mobile 
					$mobile=$_POST['mobile'];
					$interest=$_POST['interest'];
					if($mobile=="") $error['mobile'].="Please enter your Contact No.";
					elseif(is_numeric($mobile)==false || strlen($mobile)<10) $error['mobile'].="Please enter a valid Contact No.";
					//Check Error in State
					$state=$_POST['state'];
					if($state=="") $error['state']= "Please enter your state";
					//Check Error in City
					$city=$_POST['city'];
					if($city=="")$error['city'].="Please enter your city";
					//Check Error in B Category
					if(!isset($_POST['bcategory']))
						$error['businesscategory'].="Please select your category of business";
					if(isset($_POST['bcategory'][3])&&$_POST['otherspec']=="")
						$error['otherspec'].="Please specify your business";
					$businesscat="";
					if(isset($_POST['bcategory'][0]))$businesscat="Retail";
					else if(isset($_POST['bcategory'][1]))$businesscat="Resale";
					else if(isset($_POST['bcategory'][2]))$businesscat="System Integrator";
					else if(isset($_POST['bcategory'][3]))$businesscat="Other";
					$otherbusiness=$_POST['otherspec'];
					// Check all errors are null
					if($error['firstname']==""&&$error['emailid']==""&&$error['mobile']==""&&$error['city']==""&&$error['state']==""&&$error['businesscategory']==""&&$error['otherspec']=="")
					{
						$subject = "New Message On Neoteric Website";
						$message="Hi, Below are the details that were recieved on the Neoteric Website:\nName: ".$firstname."\nEmail ID: ".$emailid."\nCompany Name: ".$coname."\nContact No.: ".$mobile."\nCity, State ".$city.", ".$state."\nProducts/Services interested in: ".$interest."\nBusiness Category: ".$businesscat."\nOther: ".$otherbusiness;
						mail('sales@neoteric.co.in', $subject, $message);
						  
						echo " new Thank you for showing interest in business with Neoteric. Your enquiry has been submitted.";
					}

				}
				?>

				<div class="phperror thank"><?php echo $thank; ?></div>
				<h1>Enquiry Form</h1>
				<span><span class="reqd">*</span> denotes required fields</span>
				<form name="contact-form" method="post" action="contactus.php">
					<div class="field">
						<label for="firstname">Name:<span class="reqd">*</span></label>
						<input class="inputfield" type="text" name="firstname" value="<?php echo $firstname;?>"/>
					</div>
					<div class="phperror"><?php echo $error['firstname']; ?></div>
					
					<div class="field">
						<label for="emailid">E-mail ID:<span class="reqd">*</span></label>
						<input class="inputfield" type="text" name="emailid" value="<?php echo $emailid;?>"/>
					</div>
					<div class="phperror"><?php echo $error['emailid']; ?></div>
					
					<div class="field">
						<label for="coname">Company Name:</label>
						<input class="inputfield" type="text" name="coname" value="<?php echo $coname;?>"/>
					</div>
					
					<div class="field">
						<label for="mobile">Contact No:<span class="reqd">*</span></label>
						<input class="inputfield" type="text" name="mobile" placeholder="10 digits" value="<?php echo $mobile;?>"/>
					</div>
					<div class="phperror"><?php echo $error['mobile']; ?></div>
					
					<div class="field">
						<label for="state">State:<span class="reqd">*</span></label>
						<select name="state" id="state">
							<option value="">-- Please Select --</option>
							<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
							<option value="Andhra Pradesh">Andhra Pradesh</option>
							<option value="Arunachal Pradesh">Arunachal Pradesh</option>
							<option value="Assam">Assam</option>
							<option value="Bihar">Bihar</option>
							<option value="Chhattisgarh">Chhattisgarh</option>
							<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
							<option value="Daman and Diu">Daman and Diu</option>
							<option value="Delhi">Delhi</option>
							<option value="Goa">Goa</option>
							<option value="Gujarat">Gujarat</option>
							<option value="Haryana">Haryana</option>
							<option value="Himachal Pradesh">Himachal Pradesh</option>
							<option value="Jammu and Kashmir">Jammu and Kashmir</option>
							<option value="Jharkhand">Jharkhand</option>
							<option value="Karnataka">Karnataka</option>
							<option value="Kerala">Kerala</option>
							<option value="Lakshadweep">Lakshadweep</option>
							<option value="Madhya Pradesh">Madhya Pradesh</option>
							<option value="Maharashtra">Maharashtra</option>
							<option value="Manipur">Manipur</option>
							<option value="Meghalaya">Meghalaya</option>
							<option value="Mizoram">Mizoram</option>
							<option value="Nagaland">Nagaland</option>
							<option value="Orissa">Orissa</option>
							<option value="Pondicherry">Pondicherry</option>
							<option value="Punjab">Punjab</option>
							<option value="Rajasthan">Rajasthan</option>
							<option value="Sikkim">Sikkim</option>
							<option value="Tamil Nadu">Tamil Nadu</option>
							<option value="Tripura">Tripura</option>
							<option value="Uttar Pradesh">Uttar Pradesh</option>
							<option value="Uttarakhand">Uttarakhand</option>
							<option value="West Bengal">West Bengal</option>
						</select>
					</div>
					<div class="phperror"><?php echo $error['state']; ?></div>

					<div class="field">
						<label for="city">City:<span class="reqd">*</span></label>
						<input class="inputfield" type="text" name="city" value="<?php echo $city;?>"/>
					</div>
					<div class="phperror"><?php echo $error['city']; ?></div>

					<div class="field">
						<label for="interest">Products/Services interested in:</label>
						<textarea id="servicesinterested" type="text" name="interest" value=""></textarea>
					</div>
					
					<div class="clearfix"></div>
					
					<div class="field">
						<label for="interest">Business Category:<span class="reqd">*</span>:</label>
						<ul class="check inputfield">
							<li><input class="bc" type="checkbox" name="bcategory[]" value="retail"/><p class="bcheck">Retail</p></li>
							<li><input class="bc" type="checkbox" name="bcategory[]" value="resale"/><p class="bcheck">Resale</p></li>
							<li><input class="bc" type="checkbox" name="bcategory[]" value="si"/><p class="bcheck">System Integrator</p></li>
							<li><input class="bc" type="checkbox" name="bcategory[]" value="other"/><p class="bcheck">Other</p></li>
						</ul>
					</div>
					<div class="clearfix"></div>
					<div class="phperror"><?php echo $error['businesscategory']; ?></div>

					

					<div class="field other toHide">
						<label for="otherspec">Other Business (Please Specify):<span class="reqd">*</span></label>
						<input class="inputfield" type="text" name="otherspec"/>
					</div>
					<div class="phperror"><?php echo $error['otherspec']; ?></div>

					<div class="clearfix"></div>

					<div class="field">
						<input  class="inputfield" type="submit" name="submit-btn">
					</div>

				</form>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 address">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 contactaddress">
							<h1>Contact Details</h1>
							<p class="addressline">
								<p class="headersmall">Corporate Office:</p>
								Matulya Centre,<br>
								Unit No. 201, 2nd Floor,<br>
								Senapati Bapat Marg,<br>
								Lower Parel (West)<br>
								Mumbai - 400 013. India.<br>
								<span class="bold">Hello:</span> 022-40859600 <br>
								Email: <a href="mailto:info@neoteric.co.in ?subject=Information%20Enquiry">info@neoteric.co.in</a><br>
							</p>
							<p class="addressline">
								<p class="headersmall">Technical Assistance:</p>
								Email: <a href="mailto:support.cts@neoteric.co.in ?subject=Technical%20Assistance%20Enquiry">support.cts@neoteric.co.in</a><br>
								Toll Free No.: 1800-102-6621<br>
								Direct Toll No.: 011-4848-1188
							</p>
						</div> <!-- end contact address -->

						<div class="col-md-6 col-sm-6 col-xs-12 map">
							<iframe id="neomap" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7544.962177726837!2d72.826324!3d18.9985111!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7ce8d491214a3%3A0x3e0b6031429237c7!2sNeoteric+Infomatique+Limited!5e0!3m2!1sen!2sin!4v1446117264401" width="600" height="450" frameborder="0" style="border:0" allowfullscreen ></iframe>
						</div><!-- map -->
				</div> <!-- end row -->
			</div> <!-- end address -->
		</div>	<!-- end row form -->
	</div> <!-- end container -->

	
	</div><!--end content-->
	<?php include 'footer.php' ?>
</div> <!-- end wrapper -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap.js"></script> -->
<script src="js/contactus.js"></script>
<script src="js/neo.js"></script>
</body>
</html>