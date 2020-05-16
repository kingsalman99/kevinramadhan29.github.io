<?php
$confirm = $_GET['confirm'];
$confirm = mysql_real_escape_string($confirm);
$cekcode = mysql_num_rows(mysql_query("SELECT * FROM user WHERE respw='$confirm'"));;
$data = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE respw='$confirm'"));
$email = $data[email];
if ($confirm) {
if ($cekcode == 1) {
echo '';
} else{
header('location: https://tgtbf-checker.us.to/account/?msg=Invalid Confirm Code!');
}
} 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="apple-mobile-web-app-status-bar-style" content="black"/>
<meta name="google-site-verification" content="WrtKBbvMAd0w_SQ2ib1Nc5PrAlQmUtPGmaITMlNcvCw"/>
<meta name="robots" content="noindex"/>
<title>TGTBF - Reset</title>
 
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="http://tgtbf-checker.us.to/style/css/bootstrap.min.css">
<link rel="stylesheet" href="http://tgtbf-checker.us.to/style/css/font-awesome.min.css">
<link rel="stylesheet" href="http://tgtbf-checker.us.to/style/css/animate.min.css">
<link rel="stylesheet" href="http://tgtbf-checker.us.to/style/css/style.css">
<link rel="shortcut icon" href="http://tgtbf-checker.us.to/favicon.ico">
<script type="text/javascript">
		var SITE_URL = 'http://tgtbf-checker.us.to/';
	</script>
 
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://tgtbf-checker.us.tostyle/js/html5shiv.js"></script>
	<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/respond.min.js"></script>
	<![endif]-->
 
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/jquery-ui-1.10.4.min.js"></script>
 
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/bootstrap.min.js"></script>
 
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/pace.min.js"></script>
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/x.js"></script>

		<meta charset="utf-8">
		<title>DevOOPS v2</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v2.css" rel="stylesheet">
		<link href="plugins/chartist/chartist.min.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->
<link rel="shortcut icon" href="https://tgtbf-checker.us.to/favicon.ico"/>
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png"/>
</head>
<body class='login-body'>
<div class="login-wrap">
<h1><a href="https://tgtbf-checker.us.to">TGTBF</a></h1>
<h6>-- TGTBF Private Tools --</h6>
<div style="color: red;display:none;"></div>
<div class="login">
<form action="http://tgtbf-checker.us.to/account/forgot" method="POST">
<div class="email"><input enabled="false" type="text" name="email" placeholder="Email" class='input-block-level'/></div>
<div class="pw">
<input type="password" name="password" placeholder="Password" class='input-block-level'/>
</div>
<div class="pw">
<input type="password" name="password2" placeholder="Confirm Password" class='input-block-level'/>
</div>
<script type="text/rocketscript">
                    var RecaptchaOptions = { theme : 'white' };
                </script>
<button type="submit" value="Register" class='button button-basic-darkblue btn-block'>Reset Password</button>
</form>
</div>
<a href="https://tgtbf-checker.us.to/account/" class='pw-link'> <i class="icon-arrow-left"></i> Back to <span>Login</span></a>
</div>
</body>
</html>