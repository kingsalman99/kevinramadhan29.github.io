<TITLE>Upgrade - User</TITLE> 
<?php
include('../header.php');
?>
<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Upgrade Account</h1>
</div>
<div class="content"> 

<?php
$email = $_GET['email'];
$msg = $_GET['msg'];
if ($email) {
echo '<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">×</button>
<b>Note: </b>Account Berhasil Di Upgrade, Email : '.$email.' </div>';
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
Upgrade Guide</h3>
</div>
<div class="box-body">
<form action="cKfK.php" method="POST">
Upgrade Account To "Paid User"<br><br>
-Upgrade User Memerlukan <b style="color: blue;">50&#162;</b><br>
-Keuntungannya Banyak :D<br>
<input type="hidden" name="do" value="buy"/>
<button type="submit" class="btn btn-info" name="submit" onclick="return confirm('Are you sure to upgrade account ?');">Klik Disini</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="navi-functions">
<div class="btn-group btn-group-custom">
<a href="/card#" class="button button-square layout-not-fixed notify" rel="tooltip" title="" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav" data-original-title="Toggle fixed-nav">
<i class="icon-unlock"></i>
</a>
<a href="/card#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout" data-original-title="Toggle fixed-layout">
<i class="icon-exchange"></i>
</a>
<a href="/card#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation" data-original-title="Toggle navigation">
<i class="icon-arrow-left"></i>
</a>
<a href="/card#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="" data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications" data-original-title="Toggle notification">
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