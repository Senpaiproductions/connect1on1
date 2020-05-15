<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

use App\User;
use App\Message;
use App\Conversation;

use App\Events\MessageSent;

class MessageController extends Controller
{
    /*public function chat(Request $request, $id)
    {
        $user = User::find(Auth::user()->id);
        $user2 = User::find($id);

        $channel_name = $user->id  . '-' . $user2->id;
        

        $twilio = new Client(env('TWILIO_AUTH_SID'), env('TWILIO_AUTH_TOKEN'));

        // Fetch channel or create a new one if it doesn't exist
        try {
                $channel = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->fetch();
        } catch (\Twilio\Exceptions\RestException $e) {
                $channel = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels
                        ->create([
                                'uniqueName' => $channel_name,
                                'type' => 'private',
                        ]);
        }

        // Add first user to the channel
        try {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members($user->email)
                        ->fetch();

        } catch (\Twilio\Exceptions\RestException $e) {
                $member = $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members
                        ->create($user->email);
        }

        // Add second user to the channel
        try {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members($user2->email)
                        ->fetch();

        } catch (\Twilio\Exceptions\RestException $e) {
                $twilio->chat->v2->services(env('TWILIO_SERVICE_SID'))
                        ->channels($channel_name)
                        ->members
                        ->create($user2->email);
        }

        //return view('messages.chat', compact('users', 'otherUser'));
        return response()->json([
            'authUser' => $user,
            'otherUser' => $user2
        ]);
    }*/

    public function chats(Request $request, $slug)
    {
        $user = User::find(Auth::user()->id);
        $otherUser = User::where('slug', $slug)->first();

        if ($user->id == $otherUser->id) {
                return redirect()->back();
        }

        /*$conversation = Conversation::where(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $user->id)->where('second_user_id', $otherUser->id);
            })->orWhere(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $otherUser->id)->where('second_user_id', $user->id);
            })->first();

        
        if (!$conversation) {
                $conversation = [];
                return view('frontend.user.chat')->with('otherUser', $otherUser)->with('conversation', $conversation);
         }
         
        $messages = $conversation->messages;
 
        foreach ($messages as $message) {
                if($message->seen === 0 && ($message->user_id !== Auth::user()->id)) {
                        $message->seen = 1;
                        $message->save();
                }
                 
                $message['user'] = User::find($message->user_id);
        }*/
 
        return view('frontend.user.chat')->with('otherUser', $otherUser);
    }


    public function chat(Request $request, $slug)
    {
        $user = User::find(Auth::user()->id);
        $otherUser = User::where('slug', $slug)->first();

        if ($user->id == $otherUser->id) {
                return redirect()->back();
        }

        $conversation = Conversation::where(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $user->id)->where('second_user_id', $otherUser->id);
            })->orWhere(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $otherUser->id)->where('second_user_id', $user->id);
            })->first();
            

        if (!$conversation) {
               $conversation = new Conversation;
               
               $conversation->first_user_id = $user->id;
               $conversation->second_user_id = $otherUser->id;
               $conversation->save();
        }
    
        return dd($conversation->to_user);

        return view('user.dashboard', compact('conversation'));
    }

    public function getConversations($user_id) 
    {
        $user = User::find(Auth::user()->id);


        $conversations = [];

        $sender_conversations = Conversation::where('second_user_id', $user->id)
            ->latest()
            ->get();
        
        if ( count($sender_conversations) ) {
                foreach ($sender_conversations as $convo) {
                        $convo['person'] = User::find($convo->first_user_id);
                }       
        }

        $receiver_conversations = Conversation::where('first_user_id', $user->id)
            ->latest()
            ->get();

        if ( count($receiver_conversations) ) {
                foreach ($receiver_conversations as $convo) {
                        $convo['person'] = User::find($convo->second_user_id);
                }       
        }
        
        $conversations = array_merge($sender_conversations->toArray(), $receiver_conversations->toArray());

        return response()->json(['conversations' => $conversations]);
    }

    public function fetchMessages($user_id)
    {
        $user = User::find(Auth::user()->id);
        $otherUser = User::find($user_id);

        if ($user->id == $otherUser->id) {
                return redirect()->back();
        }

        $conversation = Conversation::where(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $user->id)->where('second_user_id', $otherUser->id);
            })->orWhere(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $otherUser->id)->where('second_user_id', $user->id);
            })->first();
            

        if (!$conversation) {
               return response()->json(['messages' => null]);
        }
        
        $messages = $conversation->messages;

        foreach ($messages as $message) {
                if($message->seen === 0 && ($message->user_id !== \Auth::user()->id)) {
                        $message->seen = 1;
                        $message->save();
                }
                
                $message['user'] = User::find($message->user_id);
        }

        return response()->json(['messages' => $messages]);
    }

    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'message' => 'required'
        ]);
          
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 418);
        }

        $user = User::find(Auth::user()->id);
        $otherUser = User::find($request->user_id);
        
        $body = $request->message;

        $conversation = Conversation::where(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $user->id)->where('second_user_id', $otherUser->id);
            })->orWhere(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $otherUser->id)->where('second_user_id', $user->id);
            })->first();
            

        if (!$conversation) {
                $conversation = new Conversation;
               
                $conversation->first_user_id = $user->id;
                $conversation->second_user_id = $otherUser->id;
                $conversation->save();
        }


        $message = $conversation->messages()->create([
                'user_id' => $user->id,
                'body' => $body
        ]);

        //broadcast(new MessageSent($message->load('user')))->toOthers();

        return response()->json([
                'message' => $message->load('user')
        ], 200);
    }


    /*public function fetchMessages($conversation_id)
    {
        $conversation = Conversation::find($conversation_id);
        $messages = $conversation->messages;

        foreach ($messages as $message) {
                if($message->seen === 0 && ($message->user_id !== \Auth::user()->id)) {
                        $message->seen = 1;
                        $message->save();
                }
                
                $message['user'] = User::find($message->user_id);
        }

        return response()->json(['messages' => $messages]);
    }*/

    public function sendMessageWithoutConvo(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'message' => 'required'
        ]);
          
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 418);
        }

        $user = User::find(Auth::user()->id);
        $otherUser = User::find($request->user_id);
        
        $body = $request->message;

        $conversation = Conversation::where(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $user->id)->where('second_user_id', $otherUser->id);
            })->orWhere(function ($query) use ($user, $otherUser) {
                $query->where('first_user_id', $otherUser->id)->where('second_user_id', $user->id);
            })->first();
            

        if (!$conversation) {
                $conversation = new Conversation;
               
                $conversation->first_user_id = $user->id;
                $conversation->second_user_id = $otherUser->id;
                $conversation->save();
        }


        $message = $conversation->messages()->create([
                'user_id' => $user->id,
                'body' => $body
        ]);

        //broadcast(new MessageSent($message->load('user')))->toOthers();

        return response()->json([
                'message' => $message->load('user')
        ], 200);
    }

    /*public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'message' => 'required'
        ]);
          
        if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 418);
        }

        $user = User::find(Auth::user()->id);

        $conversation = Conversation::find($request->conversation_id);
        $body = $request->message;


        $message = $conversation->messages()->create([
                'user_id' => $user->id,
                'body' => $body
        ]);

        //return response($message->load('user'));

        broadcast(new MessageSent($message->load('user')))->toOthers();

        return response()->json([
                'message' => $message->load('user')
        ], 200);
    }*/
}
