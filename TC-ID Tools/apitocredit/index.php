<?php
include('../header.php');
?>
</div><TITLE>Api To Credit</TITLE> 

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Api To Credit</h1>
</div>
<div class="content">
<div class="container-fluid" id="content-area"><div class="row-fluid">
<div class="pagination" style="margin: 0px auto;text-align:center;">
</div>
<?php
$ic = $_GET['ic'];
$msg = $_GET['msg'];
if ($ic) {
echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">X</button>
<b>Note: </b>Pembelian Invite Code Sukses! Invite Code Kamu Adalah: '.$ic.' </div>';
}
if ($msg) {
echo '<div class="alert alert-failed">
<button type="button" class="close" data-dismiss="alert">X</button>
<b>Note: </b>'.$msg.' </div>';
}
?>
<div class="span7" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-credit-card"></i>
Api To Credit</h3>
</div>
<div class="box-body">
<form action="http://tcid.tk/apitocredit/cKfK.php" method="POST">
Please don't play bugs!' Only API Stripe.<p>
1 API Key Live = <font color=green>10&#162;</font><p>
If API Key die, your credit is reduced <font color=red>0&#162;</font><p>
WARNING !! <font color=red>Not Limit I Need API Key Live</font> <p>
<input type="hidden" name="do" value="buy">
<input type="text" name="api" placeholder="sk_live_pJQfnpOTRskmZDMJ9m5dMIBY" class='form-control'/><button type="submit" class="btn btn-info" name="submit">Send</button>
</form>
</div>
</div>
</div>
</div>
<div class="row-fluid">
<div class="span7" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-credit-card"></i>
Api Status !</h3>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-hover table-bordered">
<thead>
<tr>
<th width="5px" class="center">#</th>
<th width="120px">API</th>
<th width="150px" class="center">Create Time</th>
<th width="80px" class="center">Status</th>
</tr>
<?php
include('../account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM api WHERE author='$email'";
                    $exe = mysql_query($query);
                    $query2 = "SELECT * FROM api WHERE author='$email'";
                    $exe2 = mysql_query($query2);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $code = $row['api'];
                        $date = $row['date'];
                        $registered = $row['status'];
                        $registered = str_replace('0','<font color=red>Die, We will remove in 3 minutes</font>',$registered);
                        $registered = str_replace('1','<font color=green>Live</font>',$registered);
                        $registered = str_replace('2','<font color=green>Live</font>',$registered);
                        $registered = str_replace('3','<font color=red>Die, We will remove in 3 minutes</font>',$registered);
                        $usedby = $row['Regby'];
                        if ($registered) {
                        echo '<tr>';
	                echo '<td class="center">'.$no.'</td>';
	                echo '<td class="center">'.$code.'</td>';
	                echo '<td class="center">'.$date.'</td>';
	                echo '<td class="center">'.$registered.'</td>';
	                echo '</tr>';
                        } else {
                        $code = $code;
	                echo '<tr>';
	                echo '<td class="center">'.$no.'</td>';
	                echo '<td class="center">'.$code.'</td>';
	                echo '<td class="center">'.$date.'</td>';
	                echo '<td class="center"></td>';
	                echo '</tr>';
                        }
                    $no++;
                    }
?>
</div>
</div>
</div>
<div class="navi-functions">
<div class="btn-group btn-group-custom">
<a href="http://tcid.tk/card#" class="button button-square layout-not-fixed notify" rel="tooltip" title="" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav" data-original-title="Toggle fixed-nav">
<i class="icon-unlock"></i>
</a>
<a href="http://tcid.tk/card#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout" data-original-title="Toggle fixed-layout">
<i class="icon-exchange"></i>
</a>
<a href="http://tcid.tk/card#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation" data-original-title="Toggle navigation">
<i class="icon-arrow-left"></i>
</a>
<a href="http://tcid.tk/card#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="" data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications" data-original-title="Toggle notification">
<i class="icon-bullhorn"></i>
</a>
</div>
</div>
<div id="alert" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
<h3 id="myModalLabel">Alert Message</h3>
</div>
<div class="modal-body">
<p>Checking done!</p>
</div>
<div class="modal-footer">
<button class="button button-basic-blue" data-dismiss="modal">OK</button>
</div>
</div>
<script type="text/javascript">
    var cacheNews = '';
    function getNews(){
        $.ajax({
            url: SITE_URL + '/',
            dataType: 'json',
            type: 'POST',
            data: 'ajax=1&do=getnews',
            success:function(data){
                if(cacheNews!=data.news)
                    $('#news').html('<marquee>'+data.news+'</marquee>');
                cacheNews = data.news;
                setTimeout("getNews()", 60*1000);
            }
        });
    }
    $(document).ready(function(){
        getNews();
    });
	</script>
 

</body></html>