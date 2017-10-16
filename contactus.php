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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="js/jquery.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<style>
body{
	margin:0px;
	padding:0px;
}
.fa-github {
  background: black;
  color: white;
}
</style>
</head>
<body style="background-color:#999797">
	
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Online Examination</span>
			</div>
			<div class="control-group">
				<div class="controls">					
					<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in" area-hidden="true"></span>&nbsp;<span class="title1"><b>Login</b></span></a>
					<a href="signup.php" class="pull-right btn sub1"><span class="glyphicon glyphicon-plus-sign" area-hidden="true"></span>&nbsp;<span class="title1"><b>Signup</b></span></a>
				</div>
			</div>
	
	<div class="modal fade" id="loginModal">
		<div class="modal-dialog">
			<div class="modal-content title1">
				<div class="modal-header">
					<button class="close" type="button" data-dismiss="modal" area-label="Close"><span area-hidden="true">&times;</span></button>
					<h3 class="modal-title title1"><span style="color:black">Log In</span></h3>
				</div>
					<div class="modal-body">
					<form class="form-horizontal" method="POST" action="login.php?q=index_online_examination.php">
						<fieldset>
							<div class="form-group">
								<label class="col-md-2 control-label" for="email"></label>
									<div class="col-md-8">
										<input id="email" name="email" placeholder="Enter your E-mail" class="form-control input-md" type="email">
									</div>
							</div>
							<div class="form-group">
								<label class="col-md-2 control-label" for="password"></label>
									<div class="col-md-8">
										<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
									</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" >Login</button>
						</fieldset>
					</form>
						</div>
			</div>
		</div>
	</div>
			
		</div>
	</div>
		<div class="body">
		<h1 style="text-align:center; color:white">CONTACT</h1>
		<span style="font-size:28px">....................................................................................................................................................................................................................................................................................................................................................................................................................</span>
		<h2 style="text-align:center;color:white; font-size:36px">We'd&nbsp;<span class="glyphicon glyphicon-heart-empty"></span> to help!</h2>
		<h5 style="text-align:center; color:white;font-family:Vampire Calligraphy - TTF">#work_hard & prepare better with online examination</h5>
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		
		<div class="col-md-12">
		<br/>
		<br/>
		<br/>
		<br/>
			<form class="form-horizontal" name="form" method="POST" action="contact.php?q=contactus.php">
				<fieldset>
					<div class="form-group ">
						<label class="col-md-12 control-label" for="name"></label>
						<div class="col-md-12">
							<input class="form-control input-md" name="name" id="name" placeholder="Your name" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12 control-label" for="email"></label>
						<div class="col-md-12">
							<input class="form-control input-md" name="email" id="email" placeholder="Your email" type="email">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-12 control-label" for="message"></label>
						<div class="col-md-12">
							<textarea rows="7" cols="6" class="form-control" name="message" placeholder="Message"></textarea>
						</div>
					</div>
					<div class="form-group "align="center">
						<input type="submit" name="submit" value="Submit" class="btn btn-primary" />
					</div>
				</fieldset>
			</form>
			
		</div>
		</div>
		
		<div class="container">
		<div class="row">
		<div class="col-md-6">
		<div class="col-md-10">
			<br/>
			<br/>
			<br/>
			<br/>
			<span class="glyphicon glyphicon-user" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.facebook.com/mangalam.gupta.1" style="color:white"  target="_blank" title="Mangalam on facebook">Mangalam Gupta</a></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-home" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.nitsikkim.ac.in" target="_blank" style="color:white" title="NIT SIKKIM">NIT SIKKIM</a></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-earphone" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white">7550851438</span></span>
			<br/><br/><br/>
			<span class="glyphicon glyphicon-envelope" style="font-size:22px;color:black">&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:white">b150073ee@nitsikkim.ac.in</span></span>
			<hr>
			<div align="center">
				<a href="https://www.facebook.com/mangalam.gupta.1" class="fa fa-facebook" target="_blank" title="Mangalam on facebook"></a>
				<a href="https://twitter.com/mangalam_gupta" class="fa fa-twitter" target="_blank" title="Mangalam on twitter"></a>
				<a href="mailto:b150073ee@nitsikkim.ac.in" class="fa fa-google" target="_blank" title="mailto: b150073ee@nitsikkim.ac.in"></a>
				<a href="https://www.linkedin.com/in/mangalam-gupta-157514135" class="fa fa-linkedin" target="_blank" title="Mangalam on LinkedIn"></a>
				<a href="https://www.instagram.com/mangalam_gupta_" class="fa fa-instagram" target="_blank" title="Mangalam on Instagram"></a>
				<a href="https://github.com/mangalam-gupta" class="fa fa-github" target="_blank" title="Mangalam on github"></a>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			</div>
			<hr>
	

	<div class="container">
  
  <div class="row">
    <div class="col-md-12">
      <h2 style="text-align:center; color:white" >Find Me here..!!</h2>
      <br/>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3545.5009690574125!2d-88.35500351464576!3d27.297505882963446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e69b043d020435%3A0x6accf5242d3a7518!2sNational+Institute+Of+Technology+Sikkim!5e0!3m2!1sen!2sin!4v1507617984978" width="100%" height="350" frameborder="0" style="border:0" marginheight="0" marginwidth="0" frameborder="0"></iframe>
    </div>
	</div>
	</div>
    </br></br>
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
		<a href="contactus.php" target="_blank" class="disabled">Contact Us</a>
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