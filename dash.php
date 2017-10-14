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
</script>
<style>
 .disabled{
	pointer-events : none;
	cursor : default;
}
</style>
</head>
<body style="background:#eee">
	<div class="header">
		<div class="row">
			<div class="col-lg-6">
				<span class="logo">Online Examination</span>
			</div>
			<?php
			include_once 'dbConnection_online_examination.php';
			session_start();
			$email = $_SESSION['email'];
			if(!(isset($_SESSION['email']))){
				header("location:index_online_examination.php");
			}
			else{
				$name = $_SESSION['name'];
				include_once 'dbConnection_online_examination.php';
				echo '<span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="account.php" class="log log1">'.$name.'</a>&nbsp;|&nbsp;<a href="logout.php?q=account.php" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Logout</button></a></span>';
			}
			?>
		</div>
	</div>
	<div class="bg">
		<div class="row">
	

	<nav class="navbar navbar-default title1">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" area-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a href="dash.php?q=0" class="navbar-brand"><b>Dashboard</b></a>
			</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li <?php if(@$_GET['q']==0) echo 'class="active"';?>><a href="dash.php?q=0"><span class="glyphicon glyphicon-home"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
						<li <?php if(@$_GET['q']==1) echo 'class="active"';?>><a href="dash.php?q=1"><span class="glyphicon glyphicon-user"></span>&nbsp;User</a></li>
						<li <?php if(@$_GET['q']==2) echo 'class="active"';?>><a href="dash.php?q=2"><span class="glyphicon glyphicon-stats"></span>&nbsp;Ranking</a></li>
						<li <?php if(@$_GET['q']==3) echo 'class="active"';?>><a href="dash.php?q=3"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Feedback</a></li>
						<li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo '"active"';?>">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" area-haspopup="true" area-expanded="false"><span class="glyphicon glyphicon-file"></span>&nbsp;Quiz<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="dash.php?q=4">Add Quiz</a></li>
								<li><a href="dash.php?q=5">Remove Quiz</a></li>
							</ul>
						</li>
					</ul>
				</div>
		</div>
	</nav>
	
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<?php if(@$_GET['q']==0){
					$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die("ERROR");
					echo '<div class="panel"><table class="table table-striped title1">
					<tr><td><b>Sr.No.</b></td><td><b>Topic</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time Limit</b></td><td></td></tr>';
					$c=1;
					while($row = mysqli_fetch_array($result)){
						$title = $row['title'];
						$total = $row['total'];
						$sahi = $row['sahi'];
						$time = $row['time'];
						$eid = $row['eid'];
						$q12 = mysqli_query($con,"SELECT score FROM history WHERE email = '$email' AND eid = '$eid'") or die("ERROR");
						$rowcount = mysqli_num_rows($q12);
						if($rowcount == 0){
							echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$total*$sahi.'</td><td>'.$time.'&nbsp;min</td>
							<td><b><a href="account.php?q=quizre&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px; background:#99cc32"><span class="glyphicon glyphicon-new-window" area-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></td></tr>';
						}
						else{
							echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" area-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
							<td><b><a href="account.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px; background:#5cb85c"><span class="glyphicon glyphicon-thumbs-up" area-hidden="true"></span>&nbsp;<span class="title1"><b>Done</b></span></a></b></td></tr>';
						}
					}
					$c=0;
					echo '</table></div>';
				}
				
				if(@$_GET['q']==2){
					$q = mysqli_query($con,"SELECT * FROM rank ORDER BY score DESC") or die("ERROR");
					echo '<div class="panel title">
					<table class="table table-striped title1">
					<tr><td><b>Rank</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Score</b></td></tr>';
					$c=0;
					while($row = mysqli_fetch_array($q)){
						$e = $row['email'];
						$s = $row['score'];
						$q12 = mysqli_query($con,"SELECT * FROM user WHERE email = '$e' ") or die("ERROR");
						while($row = mysqli_fetch_array($q12)){
							$name = $row['name'];
							$gender = $row['gender'];
							$college = $row['college'];
						}
						$c++;
						echo '<tr><td style="color:#99cc32"><b>'.$c.'</b></td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$s.'</td></tr>';
					}
					echo '</table></div>';
				}
				?>
				
				<?php
				if(@$_GET['q']==1){
					$result = mysqli_query($con,"SELECT * FROM user") or die("ERROR");
					echo '<div class="panel">
					<table class="table table-striped title1">
					<tr><td><b>Sr. No.</b></td><td><b>Name</b></td><td><b>Gender</b></td><td><b>College</b></td><td><b>Email</b></td><td><b>Phone No.</b></td><td></td></tr>';
					$c=1;
					while($row=mysqli_fetch_array($result)){
						$name = $row['name'];
						$phone = $row['phone'];
						$gender = $row['gender'];
						$college = $row['college'];
						$email = $row['email'];
						echo '<tr><td>'.$c++.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$college.'</td><td>'.$email.'</td><td>'.$phone.'</td>
						<td><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
					}
					$c=0;
					echo '</table></div>';
				}
				?>
				
				<?php
				if(@$_GET['q']==3){
					$result = mysqli_query($con,"SELECT * FROM `feedback` ORDER BY `feedback` . `date` DESC") or die("ERROR");
					echo '<div class="panel">
					<table class="table table-striped title1">
					<tr><td><b>Sr.NO.</b></td><td><b>Subject</b></td><td><b>Email</b></td><td><b>Date</b></td><td><b>Time</b></td><td><b>By</b></td><td></td><td></td></tr>';
					$c=1;
					while($row = mysqli_fetch_array($result)){
						$date = $row['date'];
						$date = date("d-m-Y",strtotime($date));
						$time= $row['time'];
						$subject = $row['subject'];
						$email = $row['email'];
						$name = $row['name'];
						$id = $row['id'];
						echo '<tr><td>'.$c++.'</td>';
						echo '<td><a title="Click to open feedback" href="dash.php?q=3&fid='.$id.'">'.$subject.'</a></td><td>'.$email.'</td><td>'.$date.'</td><td>'.$time.'</td><td>'.$name.'</td>
						<td><a title="Open Feedback" href="dash.php?q=3&fid='.$id.'"><b><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span></b></a></td>';
						echo '<td><a title="Delete Feedback" href="update.php?fdid='.$id.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td>

						</tr>';
					}
						echo '</table></div>';
				}
				?>
				<?php
				if(@$_GET['q']=='fid'){
					echo '<br />';
					$id =@$_GET['fid'];
					$result = mysqli_query($con,"SELECT * FROM `feedback` WHERE id = $id") or die("ERROR");
					while($row = mysqli_fetch_array($result)){
						$date = $row['date'];
						$date = date("d-m-Y",strtotime($date));
						$time= $row['time'];
						$subject = $row['subject'];
						$email = $row['email'];
						$name = $row['name'];
						echo '<div class="panel"<a title="Back to Archive" href="update.php?q1=2"><b><span class="glyphicon glyphicon-level-up" aria-hidden="true"></span></b></a><h2 style="text-align:center; margin-top:-15px;font-family: "Ubuntu", sans-serif;"><b>'.$subject.'</b></h1>';
						echo '<div class="mCustomScrollbar" data-mcs-theme="dark" style="margin-left:10px;margin-right:10px; max-height:450px; line-height:35px;padding:5px;"><span style="line-height:35px;padding:5px;">-&nbsp;<b>DATE:</b>&nbsp;'.$date.'</span>
						<span style="line-height:35px;padding:5px;">&nbsp;<b>Time:</b>&nbsp;'.$time.'</span><span style="line-height:35px;padding:5px;">&nbsp;<b>By:</b>&nbsp;'.$name.'</span><br />'.$feedback.'</div></div>';
					}
				}
				?>
				<?php
				if(@$_GET['q']==4 && !(@$_GET['step'])){
					echo '
					<div class="row">
					<span class="title1" style="margin-left:40%;font-size:30px;"><b>Enter Quiz Details</b></span><br/><br/>
					<div class="col-md-3"></div>
						<div class="col-md-6">
							<form class="form-horizontal title1" method="POST" action="update.php?q=addquiz" name="form">
								<fieldset>
									<div class="form-group">
										<label class="col-md-12 control-label" for="name"></label>
										<div class="col-md-12">
											<input id="name" name="name" placeholder="Enter Quiz title" class="form-control input-md" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="total"></label>
										<div class="col-md-12">
											<input id="total" name="total" placeholder="Enter total number of question" class="form-control input-md" type="number">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="right"></label>
										<div class="col-md-12">
											<input id="right" name="right" placeholder="Enter Marks on right answer" class="form-control input-md" min="0" type="number">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="wrong"></label>
										<div class="col-md-12">
											<input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer withour sign" class="form-control input-md" min="0" type="number">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="time"></label>
										<div class="col-md-12">
											<input id="time" name="time" placeholder="Enter time limit for the test in minutes" class="form-control input-md" min="1" type="number">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="tag"></label>
										<div class="col-md-12">
											<input id="tag" name="tag" placeholder="Enter #tag which is used for searching" class="form-control input-md" type="text">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for="desc"></label>
										<div class="col-md-12">
											<textarea rows="6" cols="8" name="desc" class="form-control" placeholder="Description here..."></textarea>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-12 control-label" for=""></label>
										<div class="col-md-12">
											<input type="submit" class="btn btn-primary" value="Submit" style="margin-left:45%" />
										</div>
									</div>
								</fieldset>
							</form>
						</div>';
				}
				?>
				<?php
				if(@$_GET['q']==4 && (@$_GET['step']==2)){
					echo '
					<div class="row">
						<span class="title1" style="margin-left:40%; font-size:30px" ><b>Question Details</b></span><br/><br/>
						<div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal" method="POST" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4">
					<fieldset>';
					for($i=1;$i<=@$_GET['n'];$i++){
						echo '<b>Question No.&nbsp;'.$i.'</b><br/>
						<div class="form-group">
							<label class="col-md-12 control-label" for="qns'.$i.'"></label>
								<div class="col-md-12">
									<textarea cols="5" rows="3" name="qns'.$i.'" class="form-control placeholder="Write Question number'.$i.'"here..."></textarea>
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="'.$i.'1"></label>  
								<div class="col-md-12">
									<input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
    
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="'.$i.'2"></label>  
								<div class="col-md-12">
									<input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
    
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="'.$i.'3"></label>  
								<div class="col-md-12">
									<input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
    
								</div>
						</div>
						<div class="form-group">
							<label class="col-md-12 control-label" for="'.$i.'4"></label>  
								<div class="col-md-12">
									<input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option c" class="form-control input-md" type="text">
    
								</div>
						</div>
						<br/>
						<b>Correct Answer:</b></br/>
						<select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" type="text">
							<option value="a">Select answer for the question '.$i.'</option>
							<option value="a">option a</option>
							<option value="b">option b</option>
							<option value="c">option c</option>
							<option value="d">option d</option></select><br/><br/>';
					}
						echo '<div class="form-group">
						<label class="col-md-12 control-label" for=""></label>
							<div class="col-md-12"> 
								<input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
							</div>
							</div>

						</fieldset>
						</form></div>';
				}
				?>
				<?php
					if(@$_GET['q']==5){
						$result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die("ERROR");
						echo '<div class="panel"><table class="table table-striped">
						<tr><td><b>Sr. No.</b></td><td><b>Topic</b></td><td><b>Total Question</b></td><td><b>Marks</b></td><td><b>Time limit</b></td><td></td></tr>';
						$c=1;
						while($row = mysqli_fetch_array($result)){
							$eid = $row['eid'];
							$time = $row['time'];
							$total = $row['total'];
							$sahi = $row['sahi'];
							$title = $row['title'];
							echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$total*$sahi.'</td><td>'.$time.'&nbsp;min</td>
							<td><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-trash" area-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></td></tr>';	
						}
						$c=0;
						echo '</table></div>'; 
					}
				?>
			</div>
		</div>
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
		<a href="#" data-toggle="modal" data-target="#login" class="disabled" >Admin Login</a>
		</div>
		<div class="col-md-2 box">
		<a href="#" data-toggle="modal" data-target="#developers">Developer</a>
		</div>
		<div class="col-md-2 box">
		<a href="feedback_online_examination.php" target="_blank" class="disabled">Feedback</a>
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