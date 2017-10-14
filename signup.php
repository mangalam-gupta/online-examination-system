<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Online Examination</title>
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
	<link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
	<link rel="stylesheet" href="css/main2.css">
	<link  rel="stylesheet" href="css/font.css">
	<link rel="shortcut icon" href="image/favicon.ico" type="image/ico" />
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
	<script>
			function validateContactForm(){
				var name=document.forms["form"]["name"].value;
				var letters = /^[A-Za-z]+$/;
				var college = document.forms["form"]["college"].value;
				var email = document.forms["form"]["email"].value;
				var phone = document.forms["form"]["phone"].value;
				var password = document.forms["form"]["password"].value;
				var cpassword = document.forms["form"]["cpassword"].value;
				
				if(name == null || name == "")
				{
					window.alert("Name must be filled out.");
					return false;
				}
				if(college == null || college == "")
				{
					window.alert("College must be filled out.");
					return false;
				}
				if(email == null || email == "")
				{
					window.alert("Email must be filled out.");
					return false;
				}
				if(email.indexOf("@",0)<0)
				{
					window.alert("Please Enter a valid E-mail address.");
					return false;
				}
				if(email.indexOf(".",0)<0)
				{
					window.alert("Please Enter a valid E-mail address.");
					return false;
				}
				if(phone == null || phone == "")
				{
					window.alert("Phone No. must be filled out.");
					return false;
				}
				if(password == null || password == "")
				{
					window.alert("Password must be filled out.");
					return false;
				}
				if(password.length<8 || password.length >20)
				{
					window.alert("Password length must be in between 8 to 20.")
					return false;
				}
				if(cpassword == null || cpassword == "")
				{
					window.alert("Phone No. must be filled out.");
					return false;
				}
				if(password != cpassword)
				{
					window.alert("Your password does not match!");
					return false;
				}
			}
		
		</script>
</head>
	<body>
			<div class="row header">
				<div class="col-lg-6">
					<span class="logo">Online Examination</span>
				</div>
				<div class="col-lg-2"></div>
					<div class="col-lg-4">
					<a href="index_online_examination.php" class="pull-right btn sub1 title3"><span class="glyphicon glyphicon-home" area-hidden="true"></span>&nbsp;Home</a>&nbsp;
					</div>
			</div>
			
			<div class="bg1">
				<div class="row">
					<div class="col-md-3">
					</div>
					<div class="col-md-5 panel">
						<form class="form-horizontol" name="form" action="sign.php?q=account.php" onsubmit="return validateContactForm();" method="POST">
							<fieldset>
							<h3 style="color:#050404; text-align:center"><b><u>Sign up</u></b></h3>
								<div class="form-group">
									<label class="col-md-12 control-label" for="name"></label>
									<div class="col-md-12">
										<input id="name" name="name" placeholder="Enter your Name" class="form-control input-md" type="text">
									</div>
								</div><br/><br/><br/>
								
								
								<div class="form-group">
									<label class="col-md-12 control-label" for="gender"></label>
									<div class="col-md-12">
										<select id="gender" name="gender" class="form-control input-md">
											<option value="Male">Select Gender</option>
											<option value="M">Male</option>
											<option value="F">Female</option>
										</select>
									</div>
								</div><br/><br/><br/>
								<div class="form-group">
									<label class="col-md-12 control-label" for="college"></label>
									<div class="col-md-12">
										<input id="college" name="college" placeholder="Enter your College" class="form-control input-md" type="text">
									</div>
								</div><br/><br/><br/>
								<div class="form-group">
									<label class="col-md-12 control-label" for="email"></label>
									<div class="col-md-12">
										<input id="email" name="email" placeholder="Enter your E-mail" class="form-control input-md" type="email">
									</div>
								</div><br/><br/><br/>
								<div class="form-group">
									<label class="col-md-12 control-label" for="phone"></label>
									<div class="col-md-12">
										<input id="phone" name="phone" placeholder="Enter your Phone no." class="form-control input-md" type="text">
									</div>
								</div><br/><br/><br/>
								<div class="form-group">
									<label class="col-md-12 control-label" for="password"></label>
									<div class="col-md-12">
										<input id="password" name="password" placeholder="Enter Password" class="form-control input-md" type="password">
									</div>
								</div><br/><br/><br/>
								<div class="form-group">
									<label class="col-md-12 control-label" for="cpassword"></label>
									<div class="col-md-12">
										<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
									</div>
								</div><br/><br/><br/>
									<?php if(@$_GET['q7'])
									{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
								<div class="form-group">
									<label class="col-md-12 control-label" for=""></label>
									<div class="col-md-12">
										<input class="sub" value="Sign up" class="btn btn-primary" type="submit" type="button">
									</div>
								</div>
							</fieldset>
						</form>
						
					</div>
				</div>
			</div>
			<div class="row footer">
	<h4 class="footer-header">All Links</h4>
		<hr />
		<div class="col-md-2 box">
		<a href="http://www.nitsikkim.ac.in" target="_blank">NIT SIKKIM</a>
		</div>
		<div class="col-md-2 box">
		<a href="#" data-toggle="modal" data-target="#login">Admin Login</a>
		</div>
		<div class="col-md-2 box">
		<a href="#" data-toggle="modal" data-target="#developers">Developer</a>
		</div>
		<div class="col-md-2 box">
		<a href="feedback_online_examination.php" target="_blank">Feedback</a>
		</div>
		<div class="col-md-2 box">
		<a href="contactus.php" target="_blank">Contact Us</a>
		</div>
		<div id="google_translate_element" class="col-md-2 "></div>
			<script type="text/javascript">
			function googleTranslateElementInit() {
			new google.translate.TranslateElement({pageLanguage: 'en', multilanguagePage: true}, 'google_translate_element');
			}
			</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		
		<br/>
		<br/>
		<br/>
		<br/>
		<p class="copy">Copyright &copy; 2017  <span class="glyphicon glyphicon-heart-empty" style="color:red"></span>angalam Gupta All rights reserved.  | <a href="#">Home</a> | <a href="#">Disclaimer</a> | <a href="#">Sitemap</a> </p>
	</div>
	
	<div class="modal fade title1" id="developers">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span area-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" style="font-famile:'typo'"><span style="color:#343638">Developer</span></h4>
				</div>
				<div class="modal-body">
					<p>
						<div class="row">
						<h4 style="color:#343638" align="center"><b><u>Technical Developer</u></b></h4>
							<div class="col-md-4">
							<a href="https://www.facebook.com/mangalam.gupta.1" target="_blank" title="Mangalam Gupta">
							<img src="image/my_pic_id_card.jpg" height=125 width=175 alt="Mangalam Gupta" class="img-rounded">
							</a>
							</div>
							<div class="col-md-8">
								<a href="https://www.facebook.com/mangalam.gupta.1" style="color:#202020; font-size: 18px" title="Mangalam on Facebook" target="_blank">Mangalam Gupta</a>
								<h4 style="color:#202020  ; font-size:16px" class="title1">+91-7550851438</h4>
								<h4>b150073ee@nitsikkim.ac.in</h4>
								<a href="http://www.nitsikkim.ac.in" target="_blank" style="color:#202020" title="NIT SIKKIM">
								<h4>National Institute of Technology, Sikkim</h4>
								</a>
							</div><br/><br/>
						</div>
					</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade title1" id="login">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span are-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<h4 class="modal-title"><span style="color:#343638">Admin Login</span></h4>
				</div>
				<div class="modal-body title1">
					<div class="row">
						<div class="col-md-2">
						</div>
						<div class="col-md-8">
							<form action="admin.php?q=index_online_examination.php" method="POST">
								<div class="form-group">
									<input id="uname" name="uname" type="email" placeholder="Admin UserID" class="form-control input-md">
								</div>
								<div class="form-group">
									<input id="password" name="password" type="password" placeholder="Password" class="form-control input-md">
								</div>
								<div class="form-group" align="center">
									<button type="submit" name="login" value="Login" class="btn btn-primary">Login</button>
								</div>
							</form>
						</div>
						<div class="col-md-2">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
	</body>
</html>