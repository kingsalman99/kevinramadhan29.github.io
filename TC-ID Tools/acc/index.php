<title>Account Checker - TC-ID Tools</title>
<?php
include('../header.php');
?>
</div>

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Account Checker</h1>
</div>
<div class="content">
<div style="margin: 0px auto;text-align:center;">
<div class="row">
<div class="col-xs-11" style="margin: 0px auto;float:none;">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-table"></i> Account Checker</h3>
</div>
<div class="box-body table-responsive no-padding">
<table class="table table-hover table-striped">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th width="25%">Name</th>
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
<a style="color: #08c;" href="/tokopedia">Tokopedia Checker</a>
</td>
<td>Check Login, Saldo.</td>
<td class="center">-0 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center">
<span style="color:green;" class="fa fa-check"></span></td>
</tr>
</td>
</tr>
<tr>
<td class="center">2</td>
<td>
<a style="color: #08c;" href="/amazonvalid">Amazon Valid Checker</a>
</td>
<td>Check email that registered on amazon.</td>
<td class="center">-0 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center">
<span style="color:green;" class="fa fa-check"></span></td>
</tr>
</td>
<td class="center">3</td>
<td>
<a style="color: #08c;" href="/unipin">Unipin Account Checker</a>
</td>
<td>Check Login.</td>
<td class="center">-0 &#162;</td>
<td class="center">-0 &#162;</td>
<td class="center">
<span style="color:green;" class="fa fa-check"></span></td>
</tr>
</td>
</tr>
</tr>
</td>
</tr>
</td>
</tr>
<tr>
</td>
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
<script type="text/javascript" src="../style/js/custom.js"></script>
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