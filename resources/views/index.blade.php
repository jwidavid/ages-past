@extends("layouts.public")

@section("content")
    <main>
        <div class="container">
            <div class="row main-wrap">
                <div class="col-xs-8 l-col">
                    <div class="content-block front-content content">
                        <div class="row">
                            <div class="col-xs-6">

                                Testing
                            </div>
                        </div>
                    </div>
                </div>
                
                <p class="copy">&copy;Copyright Ages Past 2015</p>
            </div>
        </div>
    </main>
    
    <script src="//js.pusher.com/3.0/pusher.min.js"></script>
	<script>
	var pusher = new Pusher("{{env('PUSHER_KEY')}}");
	var channel = pusher.subscribe('test-channel');
	channel.bind('test-event', function(data) {
	  alert(data.text);
	});
	</script>
@stop