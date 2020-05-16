<?php
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
</ul>
<div class="status button">
<div class="info-box">
<p>Domain : <strong>TCID.TK</strong></p>
<p>Contact Email : <strong>syechrulrasta@gmail.com</strong></p>
<p><li><a href="http://m.facebook.com/syechrulcjahjhael">Syechrul Imam</a></li></p>
</div>
<div id="check-progress" class="status button">
<div class="status-top">
<div class="left check-amount">
Progress: 0/0
</div>
</div>
<div class="status-bottom">
<div class="progress">
<div class="bar" style="width:0%">0%</div>
</div>
</div>
</div>
</div>