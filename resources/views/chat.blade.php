@extends("layouts.gamewrapper")

@section("content")
<div class="container-fluid game-container">
	<h1>Game Chat</h1>

	<section class="blue-gradient-background">
	    <div class="container">
	        <div class="row light-grey-blue-background chat-app">
	
	            <div id="messages">
	                <div class="time-divide">
	                    <span class="date">Today</span>
	                </div>
	            </div>
	
	            <div class="action-bar">
	                <textarea class="input-message col-xs-10" placeholder="Your message"></textarea>
	                <div class="option col-xs-1 white-background">
	                    <span class="fa fa-smile-o light-grey"></span>
	                </div>
	                <div class="option col-xs-1 green-background send-message">
	                    <span class="white light fa fa-paper-plane-o"></span>
	                </div>
	            </div>
	
	        </div>
	    </div>
	</section>
</div>
@stop

@section("page-script-head")
<meta name="csrf-token" content="{{ csrf_token() }}" />

<style>
.chat-app {
    margin: 50px;
    padding-top: 10px;
}

.chat-app .message:first-child {
    margin-top: 15px;
}

#messages {
    height: 300px;
    overflow: auto;
    padding-top: 5px;
}
</style>

<script src="https://cdn.rawgit.com/samsonjs/strftime/master/strftime-min.js"></script>
<script src="//js.pusher.com/3.0/pusher.min.js"></script>

<script>
    // Ensure CSRF token is sent with AJAX requests
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Added Pusher logging
    Pusher.log = function(msg) {
        console.log(msg);
    };
</script>
@stop
    
@section("page-script")
<script id="chat_message_template" type="text/template">
    <div class="message">
        <div class="avatar">
            <img src="">
        </div>
        <div class="text-display">
            <div class="message-data">
                <span class="author"></span>
                <span class="timestamp"></span>
                <span class="seen"></span>
            </div>
            <p class="message-body"></p>
        </div>
    </div>
</script>

<script>
    function init() {
        // send button click handling
        $('.send-message').click(sendMessage);
        $('.input-message').keypress(checkSend);
    }

    // Send on enter/return key
    function checkSend(e) {
        if (e.keyCode === 13) {
            return sendMessage();
        }
    }

    // Handle the send button being clicked
    function sendMessage() {
        var messageText = $('.input-message').val();
        if(messageText.length < 3) {
            return false;
        }

        // Build POST data and make AJAX request
        var data = {chat_text: messageText};
        $.post('/chat/message', data).success(sendMessageSuccess);

        // Ensure the normal browser event doesn't take place
        return false;
    }

    // Handle the success callback
    function sendMessageSuccess() {
        $('.input-message').val('')
        console.log('message sent successfully');
    }

    // Build the UI for a new message and add to the DOM
    function addMessage(data) {
        // Create element from template and set values
        var el = createMessageEl();
        el.find('.message-body').html(data.text);
        el.find('.author').text(data.username);
        el.find('.avatar img').attr('src', data.avatar)
        
        // Utility to build nicely formatted time
        el.find('.timestamp').text(strftime('%H:%M:%S %P', new Date(data.timestamp)));
        
        var messages = $('#messages');
        messages.append(el)
        
        // Make sure the incoming message is shown
        messages.scrollTop(messages[0].scrollHeight);
    }

    // Creates an activity element from the template
    function createMessageEl() {
        var text = $('#chat_message_template').text();
        var el = $(text);
        return el;
    }

    $(init);

    /***********************************************/

    var pusher = new Pusher('{{env("PUSHER_KEY")}}');

    var channel = pusher.subscribe('{{$chatChannel}}');
    channel.bind('new-message', addMessage);

</script>
@stop