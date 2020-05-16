<?php
include('header.php');
?>
</div>
</header><title>Dashboard</title>
</div>
<div class="rightside">
<div class="page-head">
<h1><i class="fa fa-flag"></i> Dashboard</h1>
</div>
<div class="content">
 <div class="row">
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
?>
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
?>

<?php
include('account/login/auth.php');
$members = mysql_query("SELECT * FROM user");
$members = mysql_num_rows($members);
$reseller = mysql_query("SELECT * FROM user WHERE Status='Reseller'");
$reseller = mysql_num_rows($reseller);
$free = mysql_query("SELECT * FROM user WHERE Status ='Free User'");
$free = mysql_num_rows($free);
$paid = mysql_query("SELECT * FROM user WHERE Status ='Paid User'");
$paid = mysql_num_rows($paid);
$api = mysql_query("SELECT * FROM api WHERE status =1 OR status=2");
$api = mysql_num_rows($api);
?>
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
                    </div>
<div class="row">
<div class="col-xs-12">
<div class="box">
<div class="box-title">
<h3><i class="fa fa-bullhorn"></i>
Latest News</h3>
</div>
<div class="box-body box-body-nopadding">
<table class="table table-nomargin table-bordered">
<thead>
<tr>
<th width="40px" class="center">#</th>
<th>Content</th>
<th width="120px" class="center">Date (GMT)</th>
</tr>
</thead>
<tbody><tr style="background-color:#3C99E7;color:white;">
<td class="center">1</td><td>WellCome To TC-ID Tools Checker ! !</td>
<td class="center">18/08/2016 11:31 PM</td>
</tr>
<td class="center">2</td><td>Tanks For Visit My Checker !</td>
<td class="center">18/08/2016 5:28 PM</td></tr>
<tr>

<tr>
</tbody>
</table>
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
 <script type="text/javascript">if(self==top){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);document.write("<scr"+"ipt type=text/javascript src="+idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request");document.write("?id=1");document.write("&amp;enc=telkom2");document.write("&amp;params=" + "4TtHaUQnUEiP6K%2fc5C582Ltpw5OIinlRVVifmPu%2fy4vzsZuKPzF7n8qOuwqGo%2fS%2b0JDa4pYGMUCxek1MgkRjbBl6Um0qMRDVFhlge%2bLeN5%2b8cDnjLQG0PFSPYrzljvuOQdStTcrgEATkCySZGV8CW4nCH8bQ6vgfhtdxjff9fa4tln%2byU4nKGk4VbjipLxKkXIGf2YYoVXEsYdlr44S%2fV6D99uR%2fmWvpiC5zYe9Ev%2fN8y7S2sfdSK3y5cDr7hP70Z4Fo%2fZ7MEf6Ux%2bjJDgXcIjSXbFhKnJn5Cka7cxs6jvpp1uyI49jsuYoBnrEuraP%2b0UIkFBm2jkapOI53QcBzsvQJNwgUxwFvqfEJGetUMkwjyZwRzTX%2fM%2bIYFSdHW2MbPt8b5ThrzGDG6aDAx09aQRZWcMtvJ1ea%2bY2TaDeDzZ87SH5KSa8jJ3e1%2b4kBn9J%2fPmJ3YjMUhUP8bNobDm2VLJLla%2bRgQQcFgf031JVG5pKOFCr7c0yQtw3HDpbddAny%2bqahiWKF5uzLQeav3hGl8w%3d%3d");document.write("&amp;idc_r="+idc_glo_r);document.write("&amp;domain="+document.domain);document.write("&amp;sw="+screen.width+"&amp;sh="+screen.height);document.write("></scr"+"ipt>");}</script><noscript>activate javascript</noscript></body>
<script type="text/javascript">
		(function($) {
		"use strict";
			// number count
			$('.timer').countTo();
			
			//TagsInput
			$("[data-toggle='tags']").tagsinput({ 
				tagClass: function(item) { 
					return 'label label-primary';
				} 
			});
			
			// chat scroll
			$('#chat-box').slimScroll({
				height: '250px'
			}); 
			
			//iCheck
			$("input[type='checkbox'], input[type='radio']").iCheck({
				checkboxClass: 'icheckbox_minimal',
				radioClass: 'iradio_minimal'
			});
	
			// ToDo
			$('#checkbox').on('ifChecked', function(event){
				$('.check').addClass('through')
			});
			$('#checkbox').on('ifUnchecked', function(event){
				$('.check').removeClass('through')
			});
			
			// gritter
			setTimeout(function() {
                $.gritter.add({
                    title: 'You have one new task for today',
                    text: 'Go and check <a href="mailbox.html" class="text-warning">tasks</a> to see what you should do.<br/> Check the date and today\'s tasks.'
                });
            }, 2000);
			
			// flot
						var v1 = [[1,50],[2,53],[3,40],[4,55],[5,47],[6,39],[7,44],[8,55],[9,43],[10,61],[11,52],[12,57],[13,64],[14,54],[15,49],[16,55],[17,53],[18,57],[19,68],[20,71],[21,84],[22,72],[23,88],[24,74],[25,87],[26,83],[27,76],[28,86],[29,93],[30,95]];
						var v2= [[1,13],[2,18],[3,14],[4,25],[5,23],[6,17],[7,20],[8,26],[9,24],[10,27],[11,32],[12,37],[13,32],[14,28],[15,25],[16,21],[17,25],[18,33],[19,30],[20,27],[21,35],[22,28],[23,29],[24,28],[25,34],[26,27],[27,40],[28,29],[29,33],[30,45]];
						var C= ["#7fb9d1","#e65353"];
						var plot = $.plot("#placeholder", [
							{ data: v1, label: "Total Visitors",lines:{fillColor: "#f8fcfd"}},
							{ data: v2, label: "Unique Visitors",lines:{fillColor: "#fdf8f8"}}
						], {
							series: {
								lines: {
									show: true,
									fill: true
								},
								points: {
									show: true
								},
								shadowSize: 0
							},
							grid: {
								hoverable: true,
								clickable: true,
								aboveData: true,
								borderWidth: 0
							},
							legend:{
								noColumns: 0,
								margin: [0,-23],
								labelBoxBorderColor: null
							},
							colors: C,
							tooltip: true
						});

						function showTooltip(x, y, contents) {
							$("<div id='flot_tip'>" + contents + "</div>").css({
								top: y - 20,
								left: x + 5,
							}).appendTo("body").fadeIn(200);
						}

						var previousPoint = null;
						$("#placeholder").bind("plothover", function (event, pos, item) {
						if (item) {
							if (previousPoint != item.dataIndex) {
								previousPoint = item.dataIndex;
								$("#flot_tip").remove();
								var x = item.datapoint[0].toFixed(0),
								y = item.datapoint[1].toFixed(0);
								showTooltip(item.pageX, item.pageY,
										 y + " " + item.series.label + " on the " + x + "th");
								}
								} else {
									$("#flot_tip").remove();
									previousPoint = null;            
								}
							});

			// jvectormap
			$('#map').vectorMap({
				map: 'europe_merc_en',
				zoomMin: '3',
				backgroundColor: "#fff",
				focusOn: { x: 0.5, y: 0.7, scale: 3 },
				markers: [
					{latLng: [42.5, 1.51], name: 'Andorra'},
					{latLng: [43.73, 7.41], name: 'Monaco'},
					{latLng: [47.14, 9.52], name: 'Liechtenstein'},
					{latLng: [41.90, 12.45], name: 'Vatican City'},
					{latLng: [43.93, 12.46], name: 'San Marino'},
					{latLng: [35.88, 14.5], name: 'Malta'}
				    ],
				    markerStyle: {
				      initial: {
				        fill: '#fa4547',
				        stroke: '#fa4547',
					    "stroke-width": 6,
					    "stroke-opacity": 0.3,
    				      }
				    },	
				regionStyle: {
					initial: {
						fill: '#e4e4e4',
						"fill-opacity": 1,
						stroke: 'none',
						"stroke-width": 0,
						"stroke-opacity": 1
					}
				}
			});
		})(jQuery);
		</script> 
</body>
</html>