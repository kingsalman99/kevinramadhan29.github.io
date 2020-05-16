<?php
include('../../header.php');
?>
</div><TITLE>TC-ID Tools - Orders</TITLE> 

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Buy Credits</h1>
</div>
<div class="content">
 
<div class="row">
<div class="col-xs-6">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bitcoin"></i>
List Plans via BitCoin</h3>
</div>
<div class="box-body box-body-nopadding">
<form action="../#" method="POST">
<table class="table table-nomargin table-hover">
<thead>
<tr>
<th width="30px" class="center">#</th>
 
<th class="center">Credits</th>
<th class="center">Choice</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">Minimum</td>
 
<td class="center">100&#162;</td>
<td class="center"><span style="color:black;" class="fa fa-check"></span></td>
</tr>
<tr>
<td class="center">Maximum</td>
 
<td class="center">5,000&#162;</td>
<td class="center"><span style="color:black;" class="fa fa-check"></span></td>
</tr>
</tbody>
</table>
<div class="row" style="margin-top: 10px;">
<div class="col-xs-12">
<div class="form-group">
<div>
<label for="choice" class="control-label">You want to buy:</label>
</div>
<div class="input-group">
<div class="input-append">
<input type="text" id="choice" name="choice" class="form-control" placeholder="1" style="width: 50px !important;">
<span class="input-group-addon">x100</span>
<div class="input-group-btn">
<button type="submit" class="btn btn-info">Buy</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
<form action="../" method="post">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<div>
<label for="code" class="control-label">Redeem Gift Code: </label>
</div>
<div class="input-group">
<div class="input-append">
<input type="text" name="code" id="code" placeholder="0A52-5D05-FA01-2FA8" class='form-control'/>
<input type="hidden" name="do" value="redeem"/>
<div class="input-group-btn">
<button class="btn btn-success" type="submit">Redeem</button>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
 
<div class="col-xs-6">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-dollar"></i>
List Plans via WebMoney</h3>
</div>
<div class="box-body box-body-nopadding">
<form action="#" method="POST">
<table class="table table-nomargin table-hover">
<thead>
<tr>
<th width="30px" class="center">#</th>
<th class="center">Price</th>
<th class="center">Credits</th>
<th class="center">Choice</th>
</tr>
</thead>
<tbody>
<tr>
<td class="center">1</td>
<td class="center">
Rp5000 </td>
<td class="center">100&#162;</td>
<td class="center"><input type="radio" name="choice" onclick="javascript:this.form.wmz_amount.value='1';"/></td>
</tr>
<tr>
<td class="center">2</td>
<td class="center">
Rp10000 </td>
<td class="center">250&#162;</td>
<td class="center"><input type="radio" name="choice" onclick="javascript:this.form.wmz_amount.value='2';"/></td>
</tr>
<tr>
<td class="center">3</td>
<td class="center">
Rp20000 </td>
<td class="center">500&#162;</td>
<td class="center"><input type="radio" name="choice" onclick="javascript:this.form.wmz_amount.value='5';"/></td>
</tr>
<tr>
<td class="center">4</td>
<td class="center">
Rp50000 </td>
<td class="center">Unlimited&#162;</td>
<td class="center"><input type="radio" name="choice" onclick="javascript:this.form.wmz_amount.value='10';"/></td>
</tr>
</tbody>
</table>
<div class="box-footer clearfix">
<input type="hidden" name="do" value="wmz"/>
<input type="hidden" name="wmz_amount" value=""/>
<button class="btn btn-info" type="submit">Buy Now</button>
</div>
</form>
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
<script type="text/javascript" src="http://ione.club/style/js/custom.js"></script>
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