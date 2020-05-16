<TITLE>Tools - TC-ID Tools</TITLE> 
<?php
include('../header.php');
?>
</div>

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Tools</h1>
</div>
<div class="content">
 
<div style="margin: 0px auto;text-align:center;">
<ul class="pagination" style="margin-top: 0px;">
</ul>
</div>
<div class="row">
<div class="col-xs-11" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> Free Tools</h3>
</div>
<div class="box-body table-responsive no-padding">
<table class="table table-hover table-striped">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th width="30%">Name</th>
<th>Description</th>
<th width="80px" class="center">Live</th>
<th width="80px" class="center">Die</th>
<th width="40px" class="center">Status</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">1</td>
<td>
<a style="color: #08c;" href="/bin">BIN Checker</a>
</td>
<td>
Check BIN information </td>
<td class="center">-0 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
<td class="center">2</td>
<td>
<a style="color: #08c;" href="/extrap">Credit Card Extrap</a>
</td>
<td>
Extrap Your Credit Card </td>
<td class="center">-0 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center"><span style="color:green;" class="fa fa-check"></span></td>
</tr>
</tbody>
</table>
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