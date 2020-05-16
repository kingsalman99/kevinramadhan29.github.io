<TITLE>Bin Checker - TC-ID Tools</TITLE> 
<?php
include('../header.php');
?>

</div><TITLE>CCN Gate 1</TITLE> 
 

<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> BIN Checker</h1>
</div>
<div id="content">
<div class="row">
<div class="col-xs-8" style="margin: 0px auto;float:none;">
<div class="container-fluid" id="content-area"><div class="row-fluid">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-credit-card"></i> BIN Checker</h3>
</div>
</div>
</div>
<div class="box-body box-body-nopadding">
<form action="tcid.tk/bin/" method="post" class="form-vertical">
<textarea name="bins" id="bins" class="form-control" rows="10" placeholder="4465390190980636 or 446539"></textarea>
<div class="box-footer clearfix center">
<button type="submit" class="btn btn-success" id="submit">Submit</button>
<button type="reset" class="btn btn-danger" id="reset">Reset</button>
</div>
</form>
</div>
</div> 
<?php
$bin = $_POST['bins'];
$bins = explode("\n", $bin);
if ($bin) {
echo '
<div class="row-fluid">
<div class="span8 offset2">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong>Hey!!!</strong> Click on Bank name to get all BINs of that bank
</div>
<div class="box">
<div class="box-head">
<i class="icon-table"></i>
<span><i class="fa fa-credit-card"></i> BIN Checker</span>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-hover table-bordered">
<thead>
<tr>
<th width="100px" class="center">BIN</th>
<th class="center">BIN Infomation</th>
</tr>
</thead>
<tbody>';
}
for ($i = 0; $i < count($bins); $i++) {
flush();
$bins[$i] = substr($bins[$i],0,6);
$hasil = file_get_contents('http://www.binlist.net/json/'.$bins[$i]);
$cek = json_decode($hasil, true);
echo'
<tr>
<td class="center"><input type="hidden" class="'.$cek['bank'].'" value="'.$bins[$i].'"/><b style="color: green;">'.$bins[$i].'</b></td>
<td><font color="#00249F"><b>'.$cek['brand'].'</b></font> - <font color="blue">'.$cek['card_type'].'</font> - '.$cek['card_category'].' - <a href="javascript:void(0);" class="popup" title="'.$cek['bank'].'">'.$cek['bank'].'</a> - '.$cek['country_name'].'</td>
</tr>
';
ob_end_flush();
}
echo '
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
';
?> 



<tr>
<td class="center"><input type="hidden" class="" value=""/><b style="color: green;"></b></td>
<td><font color="#00249F"><b></b></font> - <font color="blue"></font> -  - <a href="javascript:void(0);" class="popup" title=""></a> - </td>
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

<script type="text/javascript">
        $(document).ready(function () {
            $('.popup').click(function () {
                var text = $(this).text();
                var binbybank = $('#bins').val();
                if (binbybank.indexOf(text) == -1) {
                    var _class = text.replace(/[^a-z]/gi, '');
                    var bins = [];
                    $('.' + _class).each(function () {
                        bins.push($(this).val());
                    });
                    //text = binbybank+"==="+text+"===\n"+ bins.join("\n") + "\n";
                    $('#bins').val("===" + text + "===\n" + bins.join("\n"));
                }
                $(document).scrollTop(0);
                return false;
            });
        });
    </script>

<div id="result">
<div class="row-fluid">
<div class="span8 offset2">
<div class="box">
<div class="box-head">
<i class="icon-list-ul"></i>
<span>CC</span>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-hover table-bordered">
<thead>
<tr>
<th width="40px" class="center">Line</th>
<th width="80px" class="center">Status</th>
<th class="center">CC Number</th>
<th width="80px" class="center">Expire Month</th>
<th width="80px" class="center">Expire Year</th>
<th width="80px" class="center">CVV</th>
<th class="center">Comment</th>
</tr>
</thead>
<tbody id="cc">
</tbody>
</table>
</div>
</div>
</div>
</div>

<div class="navi-functions">
<div class="btn-group btn-group-custom">
<a href="tcid.tk#" class="button button-square layout-not-fixed notify" rel="tooltip" title="" data-notify-message="Fixed nav is now {{state}}" data-notify-title="Toggled fixed nav" data-original-title="Toggle fixed-nav">
<i class="icon-unlock"></i>
</a>
<a href="http://tcid.tk#" class="button button-square layout-not-fluid notify button-active" rel="tooltip" title="" data-notify-message="Fixed layout is now {{state}}" data-notify-title="Toggled fixed layout" data-original-title="Toggle fixed-layout">
<i class="icon-exchange"></i>
</a>
<a href="http://tcid.tk#" class="button button-square notify notify-inverse layout-no-nav" rel="tooltip" title="" data-notify-message="Navigation is now {{state}}" data-notify-title="Toggled navigation" data-original-title="Toggle navigation">
<i class="icon-arrow-left"></i>
</a>
<a href="http://tcid.tk#" class="button button-square button-active force-last notify-toggle toggle-active notify" rel="tooltip" title="" data-notify-message="Notifications turned {{state}}" data-notify-title="Toggled notifications" data-original-title="Toggle notification">
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
 

</body></html>