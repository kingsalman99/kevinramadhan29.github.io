<?php
error_reporting(0); 
ob_start();
session_start();
if (!empty($_SESSION['email'])) {
echo '';
} 
else {
header('location:account/'); 
}
include('account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $level = $row['level'];      
                        $banned = $row['banned'];              
                    }
if ($banned == 1) {
session_destroy(); 
header('location:account/?banned=1');
}
//if ($level < 4) {
//session_destroy();
//flush();
//sleep(20);
//header('location:index.php');
//ob_end_flush();
//}
?>
<?php
error_reporting(0); 
include('account/login/auth.php');
$reg = mysql_query("SELECT * FROM iki WHERE 1");
$fdb = mysql_fetch_assoc($reg);
$acc = $fdb['acc'];
$card = $fdb['card'];
$free = $fdb['free'];
$link = "http://tc-id.tk";
?>
<?php
error_reporting(0); 
include('account/login/auth.php');
$members = mysql_query("SELECT * FROM user");
$members = mysql_num_rows($members);
$reseller = mysql_query("SELECT * FROM user WHERE Status='Reseller'");
$reseller = mysql_num_rows($reseller);
$paid = mysql_query("SELECT * FROM user WHERE Status ='Paid User'");
$paid = mysql_num_rows($paid);
$api = mysql_query("SELECT * FROM api WHERE status =1 OR status=2");
$api = mysql_num_rows($api);
if ($api > 30) {
$stapi = '<font color=green>Very Normal</font>';
}
if ($api < 30) {
$stapi = '<font color=blue><b>Normal</b></font>';
}
if ($api < 10) {
$stapi = '<font color=red><b>Need More Api!</b></font>';
}
?>
<?php
$status = str_replace('Admin','<font color=red><b>Admin</b></font>',$status);
$status = str_replace('Reseller','<font color=purple><b>Reseller</b></font>',$status);
$status = str_replace('Paid User','<font color=blue><b>Paid User</b></font>',$status);
$status = str_replace('Free User','<font color=green><b>Free User</b></font>',$status);
?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex,noarchive,nofollow">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="/style/css/bootstrap.min.css">
<link rel="stylesheet" href="/style/css/font-awesome.min.css">
<link rel="stylesheet" href="/style/css/animate.min.css">
<link rel="stylesheet" href="/style/css/style.css">
<link rel="shortcut icon"/favicon.ico">
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
<body oncontextmenu='return false;'>
<body class="fixed">
<header> 
<a href="/" class="logo"><i class="fa fa-bolt"></i> <span>TC-ID Tools</span></a>
<nav class="navbar navbar-static-top">
<a href="#" class="navbar-btn sidebar-toggle">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<div class="navbar-header">
<div id="news" class="navbar-form">
<marquee>17/08/2016: 
<b>Selamat Datang Di TC-ID Tools</b> </marquee></div>
</div>
</table>
</div>
<div class="navbar-right">
<ul class="nav navbar-nav">
<li class="dropdown dropdown-notifications">
<a href="/apitocredit">
<i class="fa fa-credit-card"></i> Credits (¢)<span class="label label-danger">Free 25 credit</span>
</span>
</a>
</li>
<li>
<a href="/order/buy">
<i class="fa fa-credit-card"></i> Funds ($)
<?php

include('account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $credits = $row['credits'];                    
                    echo '<span class="label label-danger user-credits">'.$credits.'</span></span>';
                    }
?>
</a>
</li>
<li>
<a href="/order">
<i class="fa fa-truck"></i> Transactions
<?php
include('account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $orders = $row['orders'];                      
                    echo '<span class="label label-success">'.$orders.'</span></span>';
                    }
?>
</a>
</li>
<li class="dropdown widget-user">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="/style/img/avatar.jpg" class="pull-left" alt="image"/>
<span> <i class="fa fa-caret-down"></i></span>
</a>
<ul class="dropdown-menu">
<li>
<?php
session_start();
$email = $_SESSION['email'];
echo '<a href="#"><i class="fa fa-envelope"></i>'.$email.'</a>';
?>
</li>
<li>
<?php
$date = date("d/m/20y");
echo '<a href="#"><i class="fa fa-calendar-o"></i>Last Login: '.$date.'</a>';
?>
</li>
<li>
<a href="/upgrade"><i class="fa fa-user"></i>Upgrade To Paid User</a>
</li>
<li>
<a href="/account/profile"><i class="fa fa-user"></i>Change Password</a>
</li>
<li>
<a href="/invites"><i class="fa fa-gift"></i>Invite System</a>
</li>
<li class="footer">
<a href="/account/logout"><i class="fa fa-power-off"></i>Logout</a>
</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>
<script src="https://repository.chatwee.com/scripts/b129332f7f7833a6f880f60244f85fc2.js" type="text/javascript" charset="UTF-8"></script>
<div class="wrapper">
<div class="leftside">
<div class="sidebar">
<div class="user-box">
<div class="avatar">
<img src="/style/img/avatar.jpg" alt=""/>
</div>
<div class="details">
<p>
<a href="#">TC-ID Tools</a></p>
<?php
include('account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM user WHERE email='$email'";
                    $exe = mysql_query($query);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $orders = $row['orders'];     
                        $status = $row['status'];                    
                    echo '<span class="position">'.$status.'</span>';
                    }
?>
</a>
</div>
<div class="button">
<a href="/account/logout"><i class="fa fa-power-off"></i></a>
</div>
</div>
<ul class="sidebar-menu">
<li class="title">TC-ID Tools Navigation</li>
<li class="active">
<a href="/"><i class="fa fa-home"></i><span>Dashboard</span></a>
</li>
<li>
<a href="/acc">
<i class="fa fa-group"></i>
<span>Account Checker</span>
<small class="label label-default pull-right">3</small>
</a>
</li>
<li>
<a href="/card">
<i class="fa fa-credit-card"></i>
<span>Card Checker</span>
<small class="label label-default pull-right">1</small>
</a>
</li>
<li>
<a href="/free">
<i class="fa fa-th-large"></i>
<span>Tools</span>
<small class="label label-default pull-right">2</small>
</a>
</li>
<li>
</li>
</ul>
</ul>
<div class="info-box">
<p>Domain : <strong>TCID.TK</strong></p>
<p>Contact Email : <strong>syechrulrasta@gmail.com</strong></p>
<p><li><a href="http://m.facebook.com/syechrulcjahjhael">Syechrul Imam</a></li></p>
</div>
</div>
</div>
</div>
</div>