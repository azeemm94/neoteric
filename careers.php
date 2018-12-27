<!DOCTYPE html>
<?php $pageno=5 ?>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Neoteric - Careers</title>
	<link rel="icon" href="img/logoicon.png" type="image/png">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<!-- 	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap-theme.css" type="text/css"> -->
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" type="text/css">
	<link rel="stylesheet" href="css/jquery-ui.css">
	<link rel="stylesheet" href="css/neostyle.css" type="text/css">

</head>
<body>
<div id="wrapper">
   <?php include 'header.php' ?>

	<div id="content">

	<div class="container-fluid banner">
		<div class="container">
			<img src="img/bannercareer.png" />
		</div>
	</div>

		<div class="container careerinfo">
			<div class="row">
				<div class="col-md-7">
					<p>
						There are no jobs at Neoteric, only journeys. We love what we do, learn new things while we&#39;re at it, laugh hard when we mess things up and sweat buckets as we build and innovate.
					</p>
					<p>
						We are always looking to welcome more like-minded people to our ever-growing family. Please get in touch if you spot something of interest.
						Our high-performance culture respects and recognises your talent and potential to deliver. Grade point and years of work experience are just a number that do not impress us as much as does your enthusiasm to create!
						<br>In case you don&#39;t find a relevant opportunity below, feel free to email us.
					</p>
					<p>
						The role each member plays in the Company's development is reflected in this success. Neoteric offers its employees the opportunity to contribute, in their own way, to tomorrow's achievements.
					</p>
					<p>
						All share the same human values, along with a firm belief that trust and respect are the essential enablers for confidently tackling the challenges ahead and pushing our limits.
					</p>
					<p>
						<b>The Relationship Between Neoteric and Its members</b><br>
						Every neoterician knows - history, facts about where Neoteric comes from and where it's going as a brand. This is one of the things that unifies our team members as a brand
					</p>
					<p>
						<b>What makes each Neoterician a Brand Ambassador?</b><br>
						Neoteric has been successful in imbibing feeling proud to be a part of the overall organization, even when the business environment had become extremely challenging. <br>
						Rewards & Recognition, Strong communication of happenings withing organisation, transperent & open culture,  leadership within an organization lives and breathes brand
					</p>
					<p>
						<b>Testimonials from Ex-Neotericians</b><br>
						"Neoteric is the company that I have worked for that actually follows their stated values. The way I have been treated shows that Neoteric believes that 'Employees Are Our Greatest Strength.'"<br>
						"Best part about working for Neoteric is its people and the values-based culture. Its guiding values would always ensure individuals career growth while growing as a company"<br>
						"I have worked for Neoteric for 10 years and have grown so much personally and professionally."
					</p>	
				</div>	
				<div class="col-md-5">
					<!--
						<p>
						<a href="#" id="jobq">Do you want to work at 'A Great Place'??</a>
						</p>
					 -->
					<p>
						<h3>Do you want to work at 'A Great Place'??</h3>
						<h4>Please send an email to <a href="mailto:careers@neoteric.co.in"><img src="img/careers.png"></a><br>Please Include:</h4>
						<h5>Contact Details</h5>
						<h5>Cover Letter</h5>
						<h5>Resume/ CV</h5>  
					</p>
			
						<form name="contact-form" method="post" id="jobform" action="email.php" enctype="multipart/form-data">

						<h1>Job Openings</h1>
						<p>
							Please be careful while filling the profile information. The information provided here will be considered throughout the application process. 
							<br><br><span class="reqd">*</span> <span class="bold">All fields are required.</span>
						</p>
						<?php
						$type=$level=$exp=$gender=$firstname=$midname=$lastname=$dob=$email=$prefloc=$mobile=$currentloc=$pos=$dep=$int=$otherspec="";
						$error=array("type"=>"","level"=>"","exp"=>"","name"=>"","dob"=>"","gender"=>"","email"=>"","currentloc"=>"","prefloc"=>"","pos"=>"","dep"=>"","interviewed"=>"","position"=>"","cv"=>"","tandc"=>"","mobile"=>"");
				 		$flag=array("mobile"=>"true","name"=>"true");
				 		if (!empty($_POST['submit-btn-careers'])){
							
							
							

				 			/*TYPE*/
				 			if(!isset( $_POST['apptype']))
				 				$error['type']= "Please select applicant type";
				 			/*EXPERIENCE*/
				 			else{
				 				$exp=$_POST['expyrs'];
				 			if($_POST['apptype']=='exppro'&&$_POST['expyrs']=="")
				 				$error['exp']="Please enter experience";

				 			/*ENTRY LEVEL*/
				 				$level=$_POST['entrylv'];
				 			if($_POST['apptype']=='entryl' && !isset( $_POST['entrylv']) )
				 				$error['level']="Please select your entry level";
				 			}
				 			/*NAME*/
				 			$firstname=$_POST['firstname'];
				 			$midname=$_POST['middlename'];
				 			$lastname=$_POST['lastname'];
				 			$name=$firstname." ".$midname." ".$lastname;
				 			if($firstname==""||$lastname=="")
				 				$error['name']="Please enter your full name.";
				 			else{
									for($i=0;$i<strlen($name);$i++)
									{
										$c=$name[$i];
										if(($c>="a"&&$c<="z")||($c>="A"&&$c<="Z")||$c==" ");
										else
										{
											$flag['name']=false;
											break;
										}
									}
									if ($flag['name']==false)
									$error['name'] .="Only alphabets allowed in this field";
								}
							/*GENDER*/
							if(!isset( $_POST['gender']))
				 				$error['gender']= "Please select your gender";
							/*DATE OF BIRTH*/
							$dob=$_POST['datepicker'];
							if($dob==null||$dob=="")
								$error['dob']="Please select your date of birth"; 
							/*EMAIL*/
							$email=$_POST['emailid'];
							if($email=="")
								$error['email']="Please enter your email ID";
							elseif (filter_var($_POST['emailid'], FILTER_VALIDATE_EMAIL) === false) 
								$error['email']="Please enter a valid email address";

							/*CONTACT NO*/
							$mobile=$_POST['mobile'];
							if($mobile=="")
								$error['mobile']="Please enter your mobile number";
							else{
									if(strlen($mobile)!=10)
										$error['mobile']="Mobile number must be 10 digits only";
									else
									{
										for($i=0;$i<strlen($mobile);$i++)
										{
											$c=$mobile[$i];
											if(is_numeric($c));
											else
											{
												$flag['mobile']=false;
												break;
											}
										}
										if ($flag['mobile']==false)
										$error['mobile'] ="Please enter a valid mobile number";
									}
								}
							/*CURRENT LOCATION*/
							$currentloc=$_POST['currentloc'];
							if($currentloc=="")
								$error['currentloc']="Please enter your current location";
							/*PREFERRED LOCATION*/
							$prefloc=$_POST['prefloc'];
							if($prefloc=="")
								$error['prefloc']="Please enter your preferred location";
							/*POSITION*/
							$pos=$_POST['pos'];
							if($pos=="")
								$error['pos']="Please enter the position you are applying for";
							/*DEPARTMENT*/
							$dep=$_POST['dep'];
							if($dep=="")
								$error['dep']="Please select your department";
							/*INTERVIEWED?*/
							if(!isset( $_POST['int']))
								$error['interviewed']="Please select an option";
							elseif ($_POST['int']=='yes' && $_POST['position']=="") 
								$error['position']="Please enter the position which you applied for";
							
							/*CHECKBOX*/
							if(!isset($_POST['tnc']))
							{
								$error['tandc']="Please agree to the terms and conditions";								
							}
							
							/*UPLOAD CV*/
							if (!isset($_FILES["filecv"]))
								$error['cv']="Please upload CV";
							else
							{
								// Check File Uploaded
								
								$allowedExts = array("doc", "docx", "pdf");
								$temp = explode(".", $_FILES["filecv"]["name"]);
								$extension = end($temp);
								if (!in_array($extension, $allowedExts))
								{
									$error['cv']= "Only doc, docx and pdf files allowed";
								}
								$fileName=$_FILES["filecv"]["name"];
								$fileSize=$_FILES["filecv"]["size"]/1024;
								$fileType=$_FILES["filecv"]["type"];
								$fileTmpName=$_FILES["filecv"]["tmp_name"]; 
								$filePath = "/Users/Aaditya/Desktop/tempCV/";
								$moveToLocation= $filePath.$fileName;
								move_uploaded_file($fileTmpName, $moveToLocation);
								
								
								
							}
							// Check all errors are null
							if($error['type']==""&&$error['level']==""&&$error['name']==""&&$error['dob']==""&&$error['gender']==""&&$error['email']==""&&$error['currentloc']==""&&$error['prefloc']==""&&$error['pos']==""&&$error['dep']==""&&$error['interviewed']==""&&$error['position']==""&&$error['cv']==""&&$error['tandc']==""&&$error['mobile']==""&&$error['exp']=="")
							{
								$my_file = $_FILES["filecv"];
								$my_path = $filePath;
								$my_name = "Aaditya Shah";
								$my_mail = "aps5842@rit.edu";
								$my_replyto = "adityashah.06@gmail.com";
								$subject = "New Applicant On Neoteric Website";
						$message="Hi, Below are the details that were recieved on the Neoteric Website:\nType Of Applicant: ".$type."\nLevel: ".$level."\nExperience: ".$exp."\nName: ".$name."\nDate of Birth: ".$dob."\nGender: ".$gender."\nEmail ".$email."\nCurrent Location: ".$currentloc."\nPreferred Location: ".$prefloc."\nPosition: ".$pos."\nDepartment: ".$dep."\nInterviewed: ".$interviewed."\nPosition of Interview: ".$position."\nMobile: ".$mobile;
								mail_attachment($my_file, $my_path, "aaditya.shah@oneleap.in", $my_mail, $my_name, $my_replyto, $subject, $message);
						//mail('nandit.dayal@neoteric.co.in', $subject, $message);
						unlink($moveToLocation);
						echo "Thank you for applying at Neoteric. Your application has been submitted.";
								
						
							}
							else
							{
								echo "There are errors in your application. Please rectify them.";
							}

							
				 		} /*END IF POST*/
						?>
							<div class="field">
								<div class="row">
									<div class="col-md-6"><label for="apptype">Type of Applicant:</label></div>
									<div class="col-md-6">
										<label for="entryl">Entry Level:</label>
										<input type="radio" name="apptype" value="entryl"/>
										<label for="exppro">Experienced Professional:</label>
										<input type="radio" name="apptype" value="exppro"/>
									</div>
								</div>
							</div>
							<div class="phperror"><?php echo $error['type']; ?></div>

							<div class="field toHide1" id="apptype-entryl">
								<div class="row">
									<div class="col-md-6">
										<label for="entrylv">Please Choose:</label>
									</div>
									<div class="col-md-6">
										<label for="directa">Direct Applicant:</label>
										<input type="radio" name="entrylv" value="directa"/>
										<label for="campusr">Campus Recruitment:</label>
										<input type="radio" name="entrylv" value="campusr"/>
									</div>
								</div>
							<div class="phperror"><?php echo $error['level']; ?></div>
							</div>

							<div class="field toHide1" id="apptype-exppro">
								<label for="expyrs">Please enter Experience: </label>
								<input class="inputfield" type="text" name="expyrs"/>
								<br>(No. of years)
							<div class="phperror"><?php echo $error['exp']; ?></div>
							</div>
							
							<div class="field">
								<div class="row">
									<div class="col-md-6"><label>Name:</label></div>
									<div class="col-md-6 names">
										<div class="row">
										<div class="col-md-4"><input class="namefield" type="text" name="firstname" placeholder="First" value="<?php echo $firstname ?>"/></div>
										<div class="col-md-4"><input class="namefield" type="text" name="middlename" placeholder="Middle" value="<?php echo $midname ?>"/></div>
										<div class="col-md-4"><input class="namefield" type="text" name="lastname" placeholder="Last" value="<?php echo $lastname ?>"/></div>
										</div>
									</div>
								</div>
							</div>
							<div class="phperror"><?php echo $error['name']; ?></div>

							<div class="field">
								<div class="row">
									<div class="col-md-6"><label for="gender">Gender:</label></div>
									<div class="col-md-6">
										<label for="male">Male:</label>
										<input type="radio" name="gender" value="male"/>
										<label for="female">Female:</label>
										<input type="radio" name="gender" value="female"/>
									</div>
								</div>
							</div>
							<div class="phperror"><?php echo $error['gender']; ?></div>

							<div class="field">
				            	<label for="datepicker">Date of Birth:</label>
								<input class="inputfield" type="text" id="datepicker" name="datepicker" value="<?php echo $dob ?>"/>
							</div>
							<div class="phperror"><?php echo $error['dob']; ?></div>
							
							<div class="field">
								<label for="emailid">Email ID:</label>
								<input class="inputfield" type="text" name="emailid"  value="<?php echo $email ?>"/>
							</div>
							<div class="phperror"><?php echo $error['email']; ?></div>
							
							<div class="field">
								<label for="mobile">Contact No (Mobile):</label>
								<input class="inputfield" type="text" name="mobile"  value="<?php echo $mobile ?>"/>
							</div>
							<div class="phperror"><?php echo $error['mobile']; ?></div>
							
							<div class="field">
								<label for="currentloc">Current Location:</label>
								<input class="inputfield" type="text" name="currentloc"  value="<?php echo $currentloc ?>"/>
							</div>
							<div class="phperror"><?php echo $error['currentloc']; ?></div>
							
							<div class="field">
								<label for="prefloc">Preferred Location:</label>
								<input class="inputfield" type="text" name="prefloc" value="<?php echo $prefloc ?>"/>
							</div>
							<div class="phperror"><?php echo $error['prefloc']; ?></div>
							
							<div class="field">
								<label for="pos">Position:</label>
								<input class="inputfield" type="text" name="pos" value="<?php echo $pos ?>"/>
							</div>
							<div class="phperror"><?php echo $error['pos']; ?></div>
							
							<div class="field">
								<label for="dep">Department:</label>
								<select class="inputfield" name="dep">
									<option value=""><--Please Select--></option>
									<option>Accounts</option>
									<option>Administration</option>
									<option>BMT</option>
									<option>BSG</option>
									<option>Business Support</option>
									<option>CMT</option>
									<option>Corporate</option>
									<option>CTS Service</option>
									<option>Finance</option>
									<option>Human Resource</option>
									<option>Imports</option>
									<option>Operations</option>
									<option>Sales</option>
									<option>Taxation</option>
									<option>Technical</option>
								</select>
							</div>
							<div class="phperror"><?php echo $error['dep']; ?></div>
							
							<div class="field">
								<div class="row">
									<div class="col-md-6"><label for="int">Have you been interviewed by Neoteric before?:</label></div>
									<div class="col-md-6">
										<label><input id="rdb1" type="radio" name="int" value="yes" />Yes:</label>
										<label><input id="rdb2" type="radio" name="int" value="no" />No:</label>
									</div>
								</div>
							</div>
							<div class="phperror"><?php echo $error['interviewed']; ?></div>
							
							<div class="field toHide2" id="position-yes">
								<label for="position">Please state Position:</label>
								<input class="inputfield" type="text" name="position"/>
							<div class="phperror"><?php echo $error['position']; ?></div>
							</div>

							<div class="field">
					            <label for="filecv">Upload your CV:</label>
				    			<input class="inputfield" type="file" id="filecv" name="filecv">
				    			<br>(.doc, .docx, .pdf only)
			    			</div>
			    			<div class="phperror"><?php echo $error['cv']; ?></div>

			    			<div class="field">
			    				<input type="checkbox" name="tnc" value="tnc"/>
			    				<span id="terms">I certify that the information furnished above is factually correct and subject to verification by Neoteric (including Reference Check & Background Verification). I accept that an appointment given to me on this basis can be revoked and/or terminated without any notice at any time in future if any information has been false, misleading or deliberately omitted/suppressed. I also certify that I am at present in sound mental and physical condition to undertake employment with Neoteric.</span>
							</div>
							<div class="phperror"><?php echo $error['tandc']; ?></div>

							<div class="field">
								<input  class="inputfield" type="submit" name="submit-btn-careers">
							</div>
							<div class="clearfix"></div>

						</form>

						<iframe width="560" height="315" src="https://www.youtube.com/embed/V2Q2vzkQiq4" frameborder="0" allowfullscreen></iframe>
						<iframe width="560" height="315" src="https://www.youtube.com/embed/QI1AnJFhu1c" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>	
	<div class="clearfix"></div>
	</div><!--end content-->
	<?php include 'footer.php' ?>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- <script src="js/bootstrap.js"></script> -->
<script src="js/jquery-ui.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/careers.js"></script>
<script src="js/neo.js"></script>
</body>
</html>