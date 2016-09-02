<?php

namespace App\Http\Controllers;

use Auth;
use App\ChatMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ChatController extends Controller
{
    var $pusher;
    var $user;
    var $chatChannel;

    const DEFAULT_CHAT_CHANNEL = 'chat';

    public function __construct()
    {
        $this->pusher = App::make('pusher');
        $this->user = Auth::user()->character; //Session::get('user');
        $this->chatChannel = self::DEFAULT_CHAT_CHANNEL;
    }

    public function getIndex()
    {		    
	    $messages = ChatMessage::all();
	    $newMessages = array();
	    
	    foreach ($messages as $message) {
		    $message[4] = 11;
		    $newMessages[] = $message;
	    }
	    
        return view('chat', ['chatChannel' => $this->chatChannel])->with('messages', $newMessages);
    }

    public function postMessage(Request $request)
    {	                    
        $message = [
            'text' => e($request->input('chat_text')),
            'username' => $this->user->name,
            'avatar' => '',
            'timestamp' => (time()*1000)
        ];
        
        //record to database
        ChatMessage::create([
	        'character_id' => $this->user->id,
	        'name' => $this->user->name,
	        'message' => e($request->input('chat_text')),
	        'created_at' => (time()*1000)
        ]);
        
        $this->pusher->trigger($this->chatChannel, 'new-message', $message);
    }
}