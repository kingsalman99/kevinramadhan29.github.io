<title>CCN GATE 2</title>
<?php
include('../header.php');
?>
</div><TITLE>CCN Gate 1</TITLE>
<script type="text/javascript" src="http://tgtbf-checker.us.to/anjing.js"></script>

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> CCN Gate 2</h1>
</div>
<div class="content">
 
<div class="row">
<div class="col-xs-12">
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<b>Note: </b>Support Visa, Amex and Master Card. Charge $1-$4. Randomize Charge For Anti Merchant Die.</div>
<div class="box">
<div class="box-title">
<h3><i class="fa fa-credit-card"></i>
CCN Gate Checker</h3>
</div>
<div class="box-body box-body-nopadding">
<div class="row">
<div class="col-xs-7">
<div class="form-group">
<label for="mailpass" class="control-label">Resource:</label>
<div>
<textarea name="mailpass" id="mailpass" class="form-control" rows="7" placeholder="5301272439898008|05|14|653"></textarea>
</div>
</div>
</div>
<div class="col-xs-2">
<div class="form-group">
<label>Check Options:</label>
<div>
Not Available
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12" style="margin: 5px auto;float:none;text-align: center;">
<form class="form-inline">
<div class="form-group">
<label>Delimiter:</label>
<input type="text" name="delim" class="form-control w20px" id="delim" value="|"/>
</div>
<div class="form-group">
<label>Time Out:</label>
<input type="text" name="timeout" class="form-control w20px" id="timeout" value="30"/>
</div>
</form>
</div>
</div>
<div class="row">
<div class="col-xs-12" style="margin-top: 10px;">
<div class="form-group">
<button type="button" class="btn btn-info" id="submit">Submit</button>
<button type="button" class="btn btn-danger" id="stop">Stop</button>
 &nbsp; <span id="checkStatus"> </span><br/>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="result">
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-list"></i>
LIVE</h3>&nbsp; <span class="label label-success acc-live" id="tvmit_live_count">0</span>
</div>
<div class="box-body" id="tvmit_live"></div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-list"></i>
DIE</h3>&nbsp; <span class="label label-danger acc-die" id="tvmit_die_count">0</span>
</div>
<div class="box-body" id="tvmit_die"></div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-list"></i>
Unknown/API Key</h3>&nbsp; <span class="label label-danger wrong-format" id="tvmit_wrong_count">0</span>
</div>
<div class="box-body" id="wrong"></div>
</div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    var POST_URL = 'http://tgtbf-checker.us.to/ccn1/cKfK.php';
    var SOCK_URL = 'http://ione.club/ccn/get_sock';
	function xyz(){
		if($('#nosock').is(':checked')){
			$('#nochange').attr({checked:false,disabled:true});
			document.cookie = 'nosock=true;expires=Wed, 11 Feb 2015 00:04:29 +0000;path=/';
		}else{
			document.cookie = 'nosock=true;expires=Tue, 10 Feb 2015 00:04:19 +0000;path=/';
			$('#nochange').attr({checked:false,disabled:false});
		}
	}
	$(document).ready(function(){
		xyz();
		$('#nosock').change(function(){
			xyz()
		})
	})
</script>
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/cc.js"></script>
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
<script type="text/javascript" src="http://tgtbf-checker.us.to/style/js/custom.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.remove-card').css('cursor','pointer').click(function(){
           $('.no-card').parent().fadeIn(100, function(){
                $(this).remove(); 
           }) 
        });
        $('.remove-bank').css('cursor','pointer').click(function(){
           $('.no-bank').parent().fadeIn(100, function(){
                $(this).remove(); 
           }) 
        });
    });
</script>
</div>
</div>
</div>

</body>
</html>