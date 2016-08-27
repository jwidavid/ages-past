<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>

    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/chat/main.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/chat/bootstrap.min.css') }}" />
    <script type="text/javascript" src="{{ URL::asset('js/chat/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('js/chat/bootstrap.min.js') }}"></script>
    <title>demo chat</title>
    <script>
        $(function(){
            function wsStart() {
                ws = new WebSocket("ws://127.0.0.1:8001/");
                ws.onopen = function() {
                    $("#chat").append("<p>system: connection is open. Please enter a name that will be displayed. The name can be used English letters and numbers. The name must not exceed 10 characters.</p>");
                }
                ws.onclose = function() {
                    $("#chat").append("<p>system: the connection is closed, I try to reconnect</p>");
                    $("#login p").remove();
                    $('#login span').text('0');
                    setTimeout(wsStart, 1000);
                }
                ws.onmessage = function(evt) {
                    var pack = JSON.parse(evt.data);
                    if (pack.cmd == 'message') {
                        $("#chat").append("<p>"+pack.data+"</p>");
                        $('#chat').scrollTop($('#chat')[0].scrollHeight);
                    } else if (pack.cmd == 'login') {
                        $("#login").append("<p id='l_" + pack.data + "'>" + pack.data + "</p>");
                        $('#login span').text($('#login p').size());
                        $('#login').scrollTop($('#login')[0].scrollHeight);
                    } else if (pack.cmd == 'logout') {
                        $("#l_" + pack.data).remove();
                        $('#login span').text($('#login p').size());
                        $('#login').scrollTop($('#login')[0].scrollHeight);
                    } else if (pack.cmd == 'logins') {
                        pack.data.forEach(function(login) {
                            $("#login").append("<p id='l_" + login + "'>" + login + "</p>");
                        })
                        $('#login span').text($('#login p').size());
                        $('#login').scrollTop($('#login')[0].scrollHeight);
                    }
                }
            }
            wsStart();
            $('#chat').height($(window).height() - 80);
            $('#login').height($(window).height() - 80);
            $('#input').focus();
        });
    </script>
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <div style="float: left;width: 85%;padding: 10px;">
            <div id="chat" style="overflow: auto;" class="well"><p>system: please wait, I try to connect to the server.</p></div>
        </div>
        <div style="width: 15%;margin-left: 85%; padding: 10px;">
            <div id="login" style="overflow: auto;" class="well"><b>Users (<span>0</span>):</b></div>
        </div>
    </div>
</div>
    <div class="navbar-fixed-bottom" style="margin-bottom: -30px;margin-top: 0px;margin-left: 10px;margin-right: 20px;">
        <form onsubmit="ws.send($('input').val()); $('input').val(''); return false; ">
            <input id="input" type="text" class="form-control" placeholder="Text input" style="width: 100%;" maxlength="140" autocomplete="off">
        </form>
    </div>
</body>
</html>