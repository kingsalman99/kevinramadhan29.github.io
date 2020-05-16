var _0xf6ad = ["title", "remove", "prototype", "indexOf", "splice", "disabled", "attr", "#mailpass", "Progress: ", "/", "text", ".check-amount", "floor", "%", "width", "css", ".progress .bar", "% [", "] ", "html", "#acc_live_count", "", "#acc_die_count", "#wrong_count", "<img src=/img/clear.gif />", "#checkStatus", "#submit", "#stop", "Done", "abort", "\x0A", "split", "val", "join", "length", "check.php", "json", "POST", "<img src=/img/loading.gif />", "ajax=1&do=check&cclist=", "msg", "<br />", "append", "#wrong", "Minimal 10 Balance to check", "Something went badly wrong!", "#badsock", "#acc_die", "#acc_live", "error", "ajax", "match", "push", "replace", "charAt", "click", "#fail", "trim", "No Cards found!", "show", "#result", "#check-progress", "ready"];
var _0x8c0f = [_0xf6ad[0], _0xf6ad[1], _0xf6ad[2], _0xf6ad[3], _0xf6ad[4], _0xf6ad[5], _0xf6ad[6], _0xf6ad[7], _0xf6ad[8], _0xf6ad[9], _0xf6ad[10], _0xf6ad[11], _0xf6ad[12], _0xf6ad[13], _0xf6ad[14], _0xf6ad[15], _0xf6ad[16], _0xf6ad[17], _0xf6ad[18], _0xf6ad[19], _0xf6ad[20], _0xf6ad[21], _0xf6ad[22], _0xf6ad[23], _0xf6ad[24], _0xf6ad[25], _0xf6ad[26], _0xf6ad[27], _0xf6ad[28], _0xf6ad[29], _0xf6ad[30], _0xf6ad[31], _0xf6ad[32], _0xf6ad[33], _0xf6ad[34], _0xf6ad[35], _0xf6ad[36], _0xf6ad[37], _0xf6ad[38], _0xf6ad[39], _0xf6ad[40], _0xf6ad[41], _0xf6ad[42], _0xf6ad[43], _0xf6ad[44], _0xf6ad[45], _0xf6ad[46], _0xf6ad[47], _0xf6ad[48], _0xf6ad[49], _0xf6ad[50], _0xf6ad[51], _0xf6ad[52], _0xf6ad[53], _0xf6ad[54], _0xf6ad[55], _0xf6ad[56], _0xf6ad[57], _0xf6ad[58], _0xf6ad[59], _0xf6ad[60], _0xf6ad[61], _0xf6ad[62]];
var _0x756b = [_0x8c0f[0], _0x8c0f[1], _0x8c0f[2], _0x8c0f[3], _0x8c0f[4], _0x8c0f[5], _0x8c0f[6], _0x8c0f[7], _0x8c0f[8], _0x8c0f[9], _0x8c0f[10], _0x8c0f[11], _0x8c0f[12], _0x8c0f[13], _0x8c0f[14], _0x8c0f[15], _0x8c0f[16], _0x8c0f[17], _0x8c0f[18], _0x8c0f[19], _0x8c0f[20], _0x8c0f[21], _0x8c0f[22], _0x8c0f[23], _0x8c0f[24], _0x8c0f[25], _0x8c0f[26], _0x8c0f[27], _0x8c0f[28], _0x8c0f[29], _0x8c0f[30], _0x8c0f[31], _0x8c0f[32], _0x8c0f[33], _0x8c0f[34], _0x8c0f[35], _0x8c0f[36], _0x8c0f[37], _0x8c0f[38], _0x8c0f[39], _0x8c0f[40], _0x8c0f[41], _0x8c0f[42], _0x8c0f[43], _0x8c0f[44], _0x8c0f[45], _0x8c0f[46], _0x8c0f[47], _0x8c0f[48], _0x8c0f[49], _0x8c0f[50], _0x8c0f[51], _0x8c0f[52], _0x8c0f[53], _0x8c0f[54], _0x8c0f[55], _0x8c0f[56], _0x8c0f[57], _0x8c0f[58], _0x8c0f[59], _0x8c0f[60], _0x8c0f[61], _0x8c0f[62]];
var ajaxCall;
var docTitle = document[_0x756b[0]];
var a = 0;
Array[_0x756b[2]][_0x756b[1]] = function(_0x3ecdx6) {
    var _0x3ecdx7 = this[_0x756b[3]](_0x3ecdx6);
    if(_0x3ecdx7 != -1) {
        this[_0x756b[4]](_0x3ecdx7, 1)
    };
    return this;
};

function enableTextArea(_0x3ecdx9) {
    $('#apikey')[_0x756b[6]](_0x756b[5], _0x3ecdx9);
    $(_0x756b[7])[_0x756b[6]](_0x756b[5], _0x3ecdx9)
}

function updateProgress(a, _0x3ecdxb) {
    $(_0x756b[11])[_0x756b[10]](_0x756b[8] + a + _0x756b[9] + _0x3ecdxb);
    var _0x3ecdxc = Math[_0x756b[12]](a / _0x3ecdxb * 100);
    $(_0x756b[16])[_0x756b[15]](_0x756b[14], _0x3ecdxc + _0x756b[13])[_0x756b[10]](_0x3ecdxc + _0x756b[13]);
    document[_0x756b[0]] = _0x3ecdxc + _0x756b[17] + a + _0x756b[9] + _0x3ecdxb + _0x756b[18] + docTitle;
}

function gbrn_liveUp() {
    var _0x3ecdxe = parseInt($(_0x756b[20])[_0x756b[19]]());
    _0x3ecdxe++;
    $(_0x756b[20])[_0x756b[19]](_0x3ecdxe + _0x756b[21]);
}

function gbrn_dieUp() {
    var _0x3ecdxe = parseInt($(_0x756b[22])[_0x756b[19]]());
    _0x3ecdxe++;
    $(_0x756b[22])[_0x756b[19]](_0x3ecdxe + _0x756b[21]);
}

function gbrn_wrongUp() {
    var _0x3ecdxe = parseInt($(_0x756b[23])[_0x756b[19]]());
    _0x3ecdxe++;
    $(_0x756b[23])[_0x756b[19]](_0x3ecdxe + _0x756b[21]);
}

function stopLoading(_0x3ecdx9) {
    $(_0x756b[25])[_0x756b[19]](_0x756b[24]);
    enableTextArea(false);
    $(_0x756b[26])[_0x756b[6]](_0x756b[5], false);
    $(_0x756b[27])[_0x756b[6]](_0x756b[5], true);
    if(_0x3ecdx9) {
        alert(_0x756b[28])
    } else {
        ajaxCall[_0x756b[29]]()
    };
}

function updateTextBox(_0x3ecdx13) {
    var _0x3ecdx14 = $(_0x756b[7])[_0x756b[32]]()[_0x756b[31]](_0x756b[30]);
    _0x3ecdx14[_0x756b[1]](_0x3ecdx13);
    $(_0x756b[7])[_0x756b[32]](_0x3ecdx14[_0x756b[33]](_0x756b[30]));
}

function GbrnTmfn(_0x3ecdx16, _0x3ecdx17, _0x3ecdx18, _0x3ecdx19) {
    if(_0x3ecdx16[_0x756b[34]] < 1 || _0x3ecdx17 >= _0x3ecdx16[_0x756b[34]]) {
        stopLoading(true);
        return false;
    };
    if(_0x3ecdx19 >= _0x3ecdx18) {
        GbrnTmfn(_0x3ecdx16, _0x3ecdx17, _0x3ecdx18, 0);
        return false;
    };
    updateTextBox(_0x3ecdx16[_0x3ecdx17]);
    var apikey = $('#apikey').val().trim();
    ajaxCall = $[_0x756b[50]]({
        url: _0x756b[35],
        dataType: _0x756b[36],
        cache: false,
        type: _0x756b[37],
        beforeSend: function(_0x3ecdx1a) {
            $(_0x756b[25])[_0x756b[19]](_0x756b[38])
        },
        data: _0x756b[39] + encodeURIComponent(_0x3ecdx16[_0x3ecdx17])+'&apikey='+apikey,
        success: function(_0x3ecdx1b) {
            switch(_0x3ecdx1b[_0x756b[49]]) {
                case -1:
                    _0x3ecdx17++;
                    $(_0x756b[43])[_0x756b[42]](_0x3ecdx1b[_0x756b[40]] + _0x756b[41]);
                    updateProgress(_0x3ecdx17, _0x3ecdx16[_0x756b[34]]);
                    gbrn_wrongUp();
                    break;
                case 1:
                    $('#apikey').val('Please change a new api key');
                    alert('API DIE!');
                    stopLoading(true);
                    return false;
                    break;
                case 12:
                    alert(_0x756b[44]);
                    stopLoading(true);
                    return false;
                    break;
                case 3:
                    $(_0x756b[46])[_0x756b[42]](_0x3ecdx1b[_0x756b[40]]);
                    updateProgress(_0x3ecdx17, _0x3ecdx16[_0x756b[34]]);
                    break;
                case 2:
                    _0x3ecdx17++;
                    $(_0x756b[47])[_0x756b[42]](_0x3ecdx1b[_0x756b[40]] + _0x756b[41]);
                    _0x3ecdx19++;
                    updateProgress(_0x3ecdx17, _0x3ecdx16[_0x756b[34]]);
                    gbrn_dieUp();
                    break;
                case 0:
                    _0x3ecdx17++;
                    $(_0x756b[48])[_0x756b[42]](_0x3ecdx1b[_0x756b[40]] + _0x756b[41]);
                    $('#my_balance').text(data.balance);
                    gbrn_liveUp();
                    updateProgress(_0x3ecdx17, _0x3ecdx16[_0x756b[34]]);
                    break;
            };
            GbrnTmfn(_0x3ecdx16, _0x3ecdx17, _0x3ecdx18, _0x3ecdx19);
        }
    });
    return true;
}

function filterMP(a) {
    var _0x3ecdx1d = a[_0x756b[31]](_0x756b[30]);
    var _0x3ecdx1e = new Array();
    var _0x3ecdx16 = new Array();
    for(var _0x3ecdx1a = 0; _0x3ecdx1a < _0x3ecdx1d[_0x756b[34]]; _0x3ecdx1a++) {
        if(_0x3ecdx1d[_0x3ecdx1a][_0x756b[34]] > 0) {
            var _0x3ecdx1f = /(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})/g;
            var _0x3ecdx20 = _0x3ecdx1d[_0x3ecdx1a][_0x756b[51]](_0x3ecdx1f);
            if(null == _0x3ecdx20 || !LuhnCheck(_0x3ecdx20[0])) {
                continue
            };
            if(_0x3ecdx1e[_0x756b[3]](_0x3ecdx20[0]) == -1) {
                _0x3ecdx1e[_0x756b[52]](_0x3ecdx20[0]);
                _0x3ecdx16[_0x756b[52]](_0x3ecdx1d[_0x3ecdx1a]);
            };
        }
    };
    return _0x3ecdx16;
}
function resetResult() {
    $('#acc_die,#wrong').html('');
    $('#acc_die_count,#wrong_count').text(0);
}
var LuhnCheck = function() {
    var a = [0, 2, 4, 6, 8, 1, 3, 5, 7, 9];
    return function(_0x3ecdxb) {
        var _0x3ecdxc = 0;
        var _0x3ecdx22;
        var _0x3ecdx1a = false;
        var _0x3ecdx1f = String(_0x3ecdxb)[_0x756b[53]](/[^\d]/g, _0x756b[21]);
        if(0 == _0x3ecdx1f[_0x756b[34]]) {
            return false
        };
        for(var _0x3ecdx20 = _0x3ecdx1f[_0x756b[34]] - 1; _0x3ecdx20 >= 0; --_0x3ecdx20) {
            _0x3ecdx22 = parseInt(_0x3ecdx1f[_0x756b[54]](_0x3ecdx20), 10);
            _0x3ecdxc += (_0x3ecdx1a = !_0x3ecdx1a) ? _0x3ecdx22 : a[_0x3ecdx22];
        };
        return _0x3ecdxc % 10 == 0;
    };
}();
$(document)[_0x756b[62]](function() {
    $(_0x756b[27])[_0x756b[6]](_0x756b[5], true)[_0x756b[55]](function() {
        stopLoading(false)
    });
    $(_0x756b[26])[_0x756b[55]](function() {
        var _0x3ecdx14 = filterMP($(_0x756b[7])[_0x756b[32]]());
        var _0x3ecdx18 = parseInt($(_0x756b[56])[_0x756b[32]]());
        var _0x3ecdx19 = 0;
        if($('#apikey').val().trim()==''){
            alert('No Api Key found!');
            return false;
        }
        if($(_0x756b[7])[_0x756b[32]]()[_0x756b[57]]() == _0x756b[21]) {
            alert(_0x756b[58]);
            return false;
        };
        $('#apikey').attr('disabled', true);
        $(_0x756b[7])[_0x756b[32]](_0x3ecdx14[_0x756b[33]](_0x756b[30]))[_0x756b[6]](_0x756b[5], true);
        $(_0x756b[60])[_0x756b[59]]();
        $(_0x756b[61])[_0x756b[59]]();
        resetResult();
        $(_0x756b[26])[_0x756b[6]](_0x756b[5], true);
        $(_0x756b[27])[_0x756b[6]](_0x756b[5], false);
        updateProgress(0, _0x3ecdx14[_0x756b[34]]);
        GbrnTmfn(_0x3ecdx14, 0, _0x3ecdx18, 0);
        return false;
    });
});