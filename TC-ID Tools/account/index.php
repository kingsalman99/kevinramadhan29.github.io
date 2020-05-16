<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,noarchive,nofollow">
<title>Login - TC-ID Tools</title>
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/style/css/bootstrap.min.css">
<link rel="stylesheet" href="/style/css/font-awesome.min.css">
<link rel="stylesheet" href="/style/css/animate.min.css">
<link rel="stylesheet" href="/style/css/style.css">
<link rel="shortcut icon" href="http://blockchain.info.tm/favicon.ico">
<script type="text/javascript">
		var SITE_URL = 'localhost';
	</script>
 
<!--[if lt IE 9]>
	<script type="text/javascript" src="/style/js/html5shiv.js"></script>
	<script type="text/javascript" src="/style/js/respond.min.js"></script>
	<![endif]-->
 
<script type="text/javascript" src="/style/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/style/js/jquery-ui-1.10.4.min.js"></script>
 
<script type="text/javascript" src="/style/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="/style/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/style/js/pace.min.js"></script>
<script type="text/javascript" src="/style/js/x.js"></script>
</head>
<body class="login fixed">
<div class="wrapper animated flipInY">
<div class="logo"><a href="#"><i class="fa fa-bolt"></i></i> <span>TC-ID Tools</span></a></div>
<div class="box">
<div class="header clearfix">
<div class="pull-left"><i class="fa fa-sign-in"></i> Log In
</div>
</div>
<?php
$error = $_GET['error'];
$invalid = $_GET['invalid'];
$success = $_GET['success'];
$bad = $_GET['bad'];
$msg = $_GET['msg'];
$ban = $_GET['banned'];
if ($error) {
echo '<div class="alert alert-danger no-radius no-margin padding-sm"><i class="fa fa-exclamation-circle"></i>
Unable to login!</div>';
} else if ($invalid) {
echo '<div class="alert alert-danger no-radius no-margin padding-sm"><i class="fa fa-exclamation-circle"></i>
Invalid Invite Code. </div>';
} else if ($success == 1) {
echo '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
You are registered. You can login now! </div>';
} else if ($success == 2) {
echo '<div class="alert alert-success">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Your reset password send to your email. </div>';
} else if ($bad) {
echo '<div class="alert alert-error">
<a href="#" class="close" data-dismiss="alert">&times;</a>
Email not registered. </div>';
} else if ($msg) {
echo '<div class="alert alert-failed">';
echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
echo $msg.' </div>';
} else if ($ban) {
echo '<div class="alert alert-error">';
echo '<a href="#" class="close" data-dismiss="alert">&times;</a>';
echo 'Sorry, You account is tempoary banned. Come back soon!</div>';
}
?>
<form id="loginform" method="post" action="/account/login/index.php">
<div style="color: red;display:none;"></div>
<div class="box-body padding-md">
<div class="form-group">
<input type="text" name="email" class="form-control" placeholder="Email"/>
</div>
<div class="form-group">
<input type="password" name="password" class="form-control" placeholder="Password"/>
</div>
<div class="form-group">
<input type="checkbox" id="remember" name="remember"/> <small>Remember me</small>
</div>
<div class="box-footer">
<button type="submit" class="btn btn-success btn-block">Sign in</button>
</div>
</div>
</form>
</div>
<div class="box-extra clearfix">
<a href="/account/forgot" class="pull-left btn btn-xs">Forgot Password</a>
<a href="/account/register" class="pull-right btn  btn-xs">Register an account</a>
</div>
				</ul></footer>
<script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRhhZMSP0g%2beAAUQmyI2Fm5rZG9pKBUp1eHekKze410hAtdNSk8DlxeO5icN2Bnpp9Ud2le6EbCqAGyqO%2fVsEk71iznUbEpKglnm63SMfs9sWjecicabqzRBG8aWsjL%2fkAlT1tt%2f5OWomjMPSxpsngluLAB0Yvm%2f23jlTwU3lX4WvYoo4%2feLwWhSd1IDHFQGdL8b2sJELGdnnAww6CupS%2fHfoNk9CIzkkpOi95wlPwJZPoniryDiwJ9FfYfLzNGjH%2bDTHcDJMPh9AQ6%2fo%2fpPJ7u%2f4CylMY0fLX9gNWOzQzxQMyJ%2bqFDKP6PORFC3bYPDOVaUpUfvVOheNMOarkRo24tTk18O4xJm13WOlc6MyMZ%2bnyv2VoV3lWOHQKpFby97q3oYx4IHgeCKABF0o1B4J3nsj4eBsm%2bX5yGERya55a6bZy3AwH%2bZmCfN8DoG1ctiBwSFMIHFuzdC5rxM%2bHCFSdQ%2bi1EWxPqTKKQnTSbhMW84zyk%2fNsw%2fWAug5crcTerMpx");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript></body>
</html>