 
<?php
include('../header.php');
?>
</div><TITLE>Unipin Checker</TITLE>
<script type="text/javascript" src="../anjing.js"></script>

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Unipin Account Checker</h1>
</div>
<div class="content">
 
<div class="row">
<div class="col-xs-12">
<div class="alert alert-success">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<b>Note: </b>Check Login.</div>
<div class="box">
<div class="box-title">
<h3><i class="fa fa-credit-card"></i>
Unipin Account Checker</h3>
</div>
<div class="box-body box-body-nopadding">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<div>
</ul>
</nav>
</nav>
<div>
<label for="mailpass" class="control-label">Resource:</label>
<textarea name="mailpass" id="mailpass" class="form-control" rows="7" placeholder="email@domain.com|123123"></textarea>
<input name="delim" id="delim" style="text-align: center;display: none;width: 40px;margin-right: 5px;padding: 4px;" value="|" type="text" class="form-control">
<br>
<button type="button" class="btn btn-success" id="submit">Submit</button>
<button type="button" class="btn btn-danger" id="stop">Stop</button>&nbsp;
<div id="loading" style="display: none;">
</font>/<font id="last"></font><br/><img src="img/loading.gif"/></center></div>
<span id="checkStatus" style="color:limegreen"></span>
</div>
</div>
</div>
</div>
</div>
<tr>
</div>
<div id="result">
<div class="panel panel-default"><div class="panel-heading">
<i class="icon-list-ul"></i>
<span>LIVE </span><span class="label label-success" id="acc_live_count" style="color:white">0</span>
</div><div class="panel-body"><div id="acc_live"></div></div></div></div>
<div class="panel panel-default"><div class="panel-heading">
<i class="icon-list-ul"></i>
<span>DIE </span><span class="label label-danger" id="acc_die_count" style="color:white">0</span>
</div><div class="panel-body"><div id="acc_die"></div></div></div>
<div class="panel panel-default"><div class="panel-heading">
<i class="icon-list-ul"></i>
<span>WRONG </span><span class="label label-danger" id="wrong_count" style="color:white">0</span>
</div><div class="panel-body"><div id="wrong"></div></div></div></div></div>


    <meta name="description" content="Unipin Account Checker">
    <meta name="author" content="TC-ID">
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/check.js"></script>
	<script type="text/javascript">
		function selectText(containerid) {
		if (document.selection) {
			var range = document.body.createTextRange();
			range.moveToElementText(document.getElementById(containerid));
			range.select();
			} else if (window.getSelection()) {
				var range = document.createRange();
				range.selectNode(document.getElementById(containerid));
				window.getSelection().removeAllRanges();
				window.getSelection().addRange(range);
			}
		}
	</script>
</head>
<body>
<?php 
include'../bawah.php'; 
?>