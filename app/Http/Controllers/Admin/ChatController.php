<?php

namespace App\Http\Controllers\Admin;

use App\Models\Chat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', '1')->get();
        return view('pages.admin.chat.main', compact('users'));
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
        $chats = Chat::where('sent_by', $request->sent_to)->orWhere('sent_to', $request->sent_to)->first();
        if ($chats) {
            $reply = new Chat;
            $reply->parent_id = $chats->id;
            $reply->sent_by = 1;
            $reply->sent_to = $request->sent_to;
            $reply->message = $request->message;
            $reply->save();
            $time = $reply->created_at->diffForHumans();
        } else {
            $chat = new Chat;
            $chat->sent_by = 1;
            $chat->sent_to = $request->sent_to;
            $chat->message = $request->message;
            $chat->save();
            $time = $chat->created_at->diffForHumans();
        }

        $notification = new Notification;
        $notification->user_id = $request->sent_to;
        $notification->message = "Anda mendapatkan pesan dari Admin";
        $notification->type = 'info';
        $notification->save();

        return response()->json([
            'alert' => 'success',
            'message' => 'Pesan berhasil dikirim',
            'content' => $request->message,
            'time' => $time,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        // Get Conversation
        $chats = Chat::where('sent_by', $id)->orWhere('sent_to', $id)->first();
        if ($chats) {
            if ($chats->parent_id == null) {
                return view('pages.admin.chat.detail', compact('chats', 'user'));
            } else {
                $chats = Chat::where('parent_id', $chats->parent_id)->get();
                return view('pages.admin.chat.detail', compact('chats', 'user'));
            }
        } else {
            return view('pages.admin.chat.detail', compact('chats', 'user'));
        }
    }
}
