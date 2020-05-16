<TITLE>Invites - TC-ID Tools</TITLE>  
<?php
include('../header.php');
?>
</div>

<div class="rightside">
<div class="page-head">
</div>
<div class="content">
<?php
$ic = $_GET['ic'];
$msg = $_GET['msg'];
if ($ic) {
echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Note: </b>Pembelian Invite Code Sukses! Invite Code Kamu Adalah: '.$ic.' </div>';
}
if ($msg) {
echo '<div class="alert alert-failed">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Note: </b>'.$msg.' </div>';
}
?>
 
<div class="row">
<div class="col-xs-8" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-book"></i>
Invite Guide</h3>
</div>
<div class="box-body">
<form action="/invites/buy" method="POST">
When a friend wanna create an account on this site, he needs an <b>Invite Code</b>.<br/>You will give him these codes for free or <b style="color: red;">&nbsp;for money</b>, whatever you want!<br/>If he use your code to register, he will be set to your referrals automatically.<br/></b><br/><br/>
Price for each invite code is <b style="color: blue;">100 &#162;</b>
<input type="hidden" name="do" value="buy"/>
<button type="submit" class="btn btn-info" name="submit" onclick="return confirm('Are you sure to buy code?');">Buy Now</button>
</form>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-8" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-gift"></i>
Invite System</h3>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-hover table-bordered">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th>Invite Codes</th>
<th width="80px" class="center">Create Time</th>
<th width="120px" class="center">Used By</th>
</tr>
<?php
include('../account/login/auth.php');
                    $email = $_SESSION['email'];
                    $query = "SELECT * FROM invitecode WHERE Author='$email'";
                    $exe = mysql_query($query);
                    $query2 = "SELECT * FROM user WHERE regby='$email'";
                    $exe2 = mysql_query($query2);
                    $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        $code = $row['Num'];
                        $date = $row['Date'];
                        $registered = $row['Registered'];
                        $usedby = $row['Regby'];
                        if ($registered == 0) {
                        $code = '<strike>'.$code.'</strike>';
                        echo '<tr>';
	                echo '<td class="center">'.$no.'</td>';
	                echo '<td class="center">'.$code.'</td>';
	                echo '<td class="center">'.$date.'</td>';
	                echo '<td class="center">'.$usedby.'</td>';
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
</div>
</div>
</div>
</div> 
 
<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title" id="myModalLabel"><i class="fa fa-edit"></i> Alert Message</h4>
</div>
<div class="modal-body">
Checking done!
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script type="text/javascript" src="/style/js/custom.js"></script>
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
 
</body>
</html>