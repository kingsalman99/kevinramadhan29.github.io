<?php
include('../header.php');
?>
<title>Order History</title>
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
</div> <div class="info-box" id="check-progress"> <p class="check-amount"> Progress: 0/0 </p> <div class="progress progress-striped"> <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> <span class="progress-text">0%</span> </div> </div> </div> </div> </div>
<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Transactions History</h1>
</div>
<div class="content">
<div class="row">
<div class="col-xs-8" style="margin: 0px auto;float:none; width: 859px;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-gift"></i>
Transactions History</h3>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-hover table-bordered">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th>Transaction ID</th>
<th width="80px">Payment Processor</th>
<th width="80px" class="center">Amount</th>
<th width="120px" class="center">Type</th>
<th width="120px" class="center">Date</th>
<th width="40px" class="center">Status</th>
</tr>
</thead>
<tbody>
<?php
session_start();
include('auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM `Order` WHERE email='$email'";
                    $exe = mysql_query($query);
                    $query2 = "SELECT * FROM user WHERE regby='$email'";
                    $exe2 = mysql_query($query2);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $btcid = $row['ID'];
                        $ordate = $row['date'];
                        $amount = $row['amount'];
                        $cre = $row['credits'];
                        echo '<tr>';
                        echo '<td class="center">'.$no.'</td>';
                        echo '<td>';
                        echo $btcid;
                        echo '</td>';
                        echo '<td>Bitcoin</td>';
                        echo '<td class="center">'.$amount.'</td>';
	                echo '<td class="center">'.$cre.'</td>';
	                echo '<td class="center">'.$ordate.'</td>';
	                echo '<td class="center"><span class="icon-ok"></span></td>';
	                echo '</tr>';
	             $no++;
                     }
?>
</tbody>
</table>
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