<?php
$type=$level=$exp=$gender=$firstname=$midname=$lastname=$dob=$email=$prefloc=$mobile=$currentloc=$pos=$dep=$interviewed=$position=$otherspec="";
						$error=array("type"=>"","level"=>"","exp"=>"","name"=>"","dob"=>"","gender"=>"","email"=>"","currentloc"=>"","prefloc"=>"","pos"=>"","dep"=>"","interviewed"=>"","position"=>"","cv"=>"","tandc"=>"","mobile"=>"");
				 		$flag=array("mobile"=>"true","name"=>"true");
				 		if (!empty($_REQUEST['submit-btn-careers'])){
							
				 			/*TYPE*/
				 			if(!isset( $_REQUEST['apptype']))
				 				$error['type']= "Please select applicant type";
				 			/*EXPERIENCE*/
				 			else{
				 				$exp=$_REQUEST['expyrs'];
				 			if($_REQUEST['apptype']=='exppro'&&$_REQUEST['expyrs']=="")
				 				$error['exp']="Please enter experience";

				 			/*ENTRY LEVEL*/
				 				$level=$_REQUEST['entrylv'];
				 			if($_REQUEST['apptype']=='entryl' && !isset( $_REQUEST['entrylv']) )
				 				$error['level']="Please select your entry level";
				 			}
				 			/*NAME*/
				 			$firstname=$_REQUEST['firstname'];
				 			$midname=$_REQUEST['middlename'];
				 			$lastname=$_REQUEST['lastname'];
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
							if(!isset( $_REQUEST['gender']))
				 				$error['gender']= "Please select your gender";
							/*DATE OF BIRTH*/
							$dob=$_REQUEST['datepicker'];
							if($dob==null||$dob=="")
								$error['dob']="Please select your date of birth"; 
							/*EMAIL*/
							$email=$_REQUEST['emailid'];
							if($email=="")
								$error['email']="Please enter your email ID";
							elseif (filter_var($_REQUEST['emailid'], FILTER_VALIDATE_EMAIL) === false) 
								$error['email']="Please enter a valid email address";

							/*CONTACT NO*/
							$mobile=$_REQUEST['mobile'];
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
							$currentloc=$_REQUEST['currentloc'];
							if($currentloc=="")
								$error['currentloc']="Please enter your current location";
							/*PREFERRED LOCATION*/
							$prefloc=$_REQUEST['prefloc'];
							if($prefloc=="")
								$error['prefloc']="Please enter your preferred location";
							/*POSITION*/
							$pos=$_REQUEST['pos'];
							if($pos=="")
								$error['pos']="Please enter the position you are applying for";
							/*DEPARTMENT*/
							$dep=$_REQUEST['dep'];
							if($dep=="")
								$error['dep']="Please select your department";
							/*INTERVIEWED?*/
							if(!isset( $_REQUEST['int']))
								$error['interviewed']="Please select an option";
							elseif ($_REQUEST['int']=='yes' && $_REQUEST['position']=="") 
								$error['position']="Please enter the position which you applied for";
							
							/*CHECKBOX*/
							if(!isset($_REQUEST['tnc']))
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
								$filePath = "/Applications/XAMPP/xamppfiles/htdocs/public_html/neo/tempCV/";
								$finalFilePath= $filePath.$fileName;
								move_uploaded_file($fileTmpName, $finalFilePath);
								
								
								
							}
							// Check all errors are null
							if($error['type']==""&&$error['level']==""&&$error['name']==""&&$error['dob']==""&&$error['gender']==""&&$error['email']==""&&$error['currentloc']==""&&$error['prefloc']==""&&$error['pos']==""&&$error['dep']==""&&$error['interviewed']==""&&$error['position']==""&&$error['cv']==""&&$error['tandc']==""&&$error['mobile']==""&&$error['exp']=="")
							{
								
								// When we unzipped PHPMailer, it unzipped to
								// public_html/PHPMailer_5.2.0
								//require_once dirname(__FILE__) . '/PHPMailerAutoload.php';
								require("/Applications/XAMPP/xamppfiles/htdocs/public_html/lib/PHPMailer/PHPMailerAutoload.php");
								
								$mail = new PHPMailer();

								// set mailer to use SMTP
								$mail->IsSMTP();

								// As this email.php script lives on the same server as our email server
								// we are setting the HOST to localhost
								$mail->Host = "localhost";  // specify main and backup server

								$mail->SMTPAuth = true;     // turn on SMTP authentication

								// When sending email using PHPMailer, you need to send from a valid email address
								// In this case, we setup a test email account with the following credentials:
								// email: send_from_PHPMailer@bradm.inmotiontesting.com
								// pass: password
								$mail->Username = "aps5842@rit.edu";  // SMTP username
								$mail->Password = "Dirt8pheg"; // SMTP password

								// $email is the user's email address the specified
								// on our contact us page. We set this variable at
								// the top of this page with:
								// $email = $_REQUEST['email'] ;
								$mail->From = $email;

								// below we want to set the email address we will be sending our email to.
								$mail->AddAddress("careers@neoteric.co.in");

								// set word wrap to 150 characters
								$mail->WordWrap = 150;
								// set email format to HTML
								$mail->IsHTML(true);

								$mail->Subject = "New Applicant On Neoteric Website";

								// $message is the user's message they typed in
								// on our contact us page. We set this variable at
								// the top of this page with:
								// $message = $_REQUEST['message'] ;
								$message="Hi, Below are the details that were recieved on the Neoteric Website:\nType Of Applicant: ".$type."\nLevel: ".$level."\nExperience: ".$exp."\nName: ".$name."\nDate of Birth: ".$dob."\nGender: ".$gender."\nEmail ".$email."\nCurrent Location: ".$currentloc."\nPreferred Location: ".$prefloc."\nPosition: ".$pos."\nDepartment: ".$dep."\nInterviewed: ".$interviewed."\nPosition of Interview: ".$position."\nMobile: ".$mobile;
								$mail->Body    = $message;
								$mail->AltBody = $message;
								
								// Add Attachment 
								$mail->AddAttachment($finalFilePath);

								if(!$mail->Send())
								{
								   echo "Mailer Error: " . $mail->ErrorInfo;
									unlink($finalFilePath);
								   exit;
								}

								echo "Message has been sent";
								echo "Thank you for applying at Neoteric. Your application has been submitted.";
								unlink($finalFilePath);

							}
				 		} /*END IF POST*/
						?>