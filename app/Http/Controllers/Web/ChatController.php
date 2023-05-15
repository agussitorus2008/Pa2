<?php

namespace App\Http\Controllers\Web;

use App\Models\Chat;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    public function index()
    {
        $chats = Chat::where('sent_by', Auth::user()->id)->orWhere('sent_to', Auth::user()->id)->get();
        // dd($chats);
        return view('pages.web.chat.main', compact('chats'));
    }

    public function store(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'message' => 'required|string|max:255',
        ]);

        if ($validators->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validators->errors()->first(),
            ]);
        }

        // Send Message
        $chats = Chat::where('sent_by', auth()->user()->id)->orWhere('sent_to', auth()->user()->id)->first();
        if ($chats) {
            $reply = new Chat;
            $reply->parent_id = $chats->id;
            $reply->sent_by = auth()->user()->id;
            $reply->sent_to = 1;
            $reply->message = $request->message;
            $reply->save();
            $time = $reply->created_at->diffForHumans();
        } else {
            $chat = new Chat;
            $chat->sent_by = auth()->user()->id;
            $chat->sent_to = 1;
            $chat->message = $request->message;
            $chat->save();
            $time = $chat->created_at->diffForHumans();
        }

        $notification = new Notification;
        $notification->user_id = 1;
        $notification->message = "Anda mendapatkan pesan dari " . auth()->user()->name;
        $notification->type = 'info';
        $notification->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesan berhasil dikirim',
            'content' => $request->message,
            'time' => $time,
        ]);
    }
}
