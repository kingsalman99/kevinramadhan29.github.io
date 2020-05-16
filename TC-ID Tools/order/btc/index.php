<?php
session_start();
include('../header.php');
$orderid = 'BKBTC'.rand(10000000000,3000000000000);
$cre = $_POST['choice']*100;
$amount = $_POST['choice']*0.004476.' BTC';
$gets = file_get_contents('https://blockchain.info/id/api/receive?method=create&address=1B8KXFEdSWXq5Mo8wicayQyKMq8Niaec2&callback=https://tcid.tk');
$api = json_decode($gets, true);
$address = $api['input_address'];
if ($cre < 5) {
header('location: /order/buy/');
}
?>
<title>Pay With Bitcoin</title>
<div id="main">
<div id="navigation">
<ul class="mainNav" data-open-subnavs="multi">
<li>
<a href="/"><i class="icon-home icon-white"></i><span>Dashboard</span></a>
</li>
<li>
<a href="/acc">
<i class="icon-group icon-white"></i>
<span>Account Checker</span>
<?php
echo '<span class="label">'.$acc.'</span>'
?>
</a>
</li>
<li>
<a href="/card">
<i class="icon-credit-card icon-white"></i>
<span>Card Checker</span>
<?php
echo '<span class="label">'.$card.'</span>'
?>
</a>
</li>
<li>
<a href="/free">
<i class="icon-th-large icon-white"></i>
<span>Free Tools</span>
<?php
echo '<span class="label">'.$free.'</span>'
?>
</a>
</li>
<li>
<a href="/invites"><i class="icon-gift icon-white"></i><span>Invite System</span></a>
</li>
<?php
include('../../footer.php');
?>
<div id="content">
<div class="page-header">
<div class="pull-left">
<h4><i class="icon-reorder"></i> Payment via BitCoin</h4>
</div>
</div>
<div class="container-fluid" id="content-area"><div class="row-fluid">
<div class="span7" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-head">
<i class="icon-font"></i>
<span>Payment via BitCoin</span>
</div>
<div class="box-body">
<form action="check/" method="POST">
<div style="display:none"><input type="hidden" value="<?php echo $address; ?>" name="address" /></div>
<div style="display:none"><input type="hidden" value="<?php echo $orderid; ?>" name="id" /></div>
<h3 align="center">Thank you for ordering via BitCoin</h3>
<h5>Payment Details:</h5>
Order ID: <b><?php echo $orderid; ?></b><br/>

Credits: <b><?php echo $cre; ?></b><br/>
BTC Address: <b style="color:#ff0000;"><?php echo $address; ?></b><br/>
Amount in BTC: <b style="color:#ff0000;"><?php echo $amount; ?></b>
<h5>Please do the following steps to complete your order:</h5>
1. Send <b style="color:#ff0000;"><?php echo $amount; ?></b> to adddress: <b style="color:#ff0000;"><?php echo $address; ?></b><br/>
2. Then click button "Complete Order"<br/>
<i style="color: #0000ff;font-size:20px;">* To get credits instantly, you need to click on button 'Complete Order'.<br/>
* Give admin 'Payment Details' above if you don't receive credits after 'Complete Order' clicked.</i>
<br/>
<input type="hidden" name="do" value="success"/>
<button type="submit" class="button button-basic-blue" name="complete" id="submit1">Complete Order</button>
</form>
</div>
</div>
</div>
</div></div>
</div>
</div>
<div class="navi-functions">
<div class="btn-group btn-group-custom">
<a href="#" class="button button-square layout-not-fixed notify" rel="tooltip" title="Toggle fixed-nav" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav">
<i class="icon-unlock"></i>
</a>
<a href="#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="Toggle fixed-layout" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout">
<i class="icon-exchange"></i>
</a>
<a href="#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="Toggle navigation" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation">
<i class="icon-arrow-left"></i>
</a>
<a href="#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="Toggle notification" data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications">
<i class="icon-bullhorn"></i>
</a>
</div>
</div>

<div id="alert" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&#215;</button>
<h3 id="myModalLabel">Alert Message</h3>
</div>
<div class="modal-body">
<p>Checking done!</p>
</div>
<div class="modal-footer">
<button class="button button-basic-blue" data-dismiss="modal">OK</button>
</div>
</div>
<script type="text/rocketscript">
    $(document).ready(function(){
        getNews();
    });
	</script>
</body>
</html>