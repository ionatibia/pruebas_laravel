<?php

namespace App\Http\Controllers;

use App\Jobs\SendMessage;
use App\Models\Message;
use App\Models\Chat;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', auth()->id())->select([
            'id', 'name', 'email',
        ])->first();
        $services = Service::where('user_id', auth()->id())->get();

        return view('home', [
            'user' => $user,
            'services' => $services
        ]);
    }

    public function messages(): JsonResponse
    {
        $tmp = [];
        $chats = Chat::where('service_id', 1)->get();

        foreach ($chats as $chat) {
            $messages = Message::where('chat_id', $chat->id)->get();
            $chat->messages = $messages;
            array_push($tmp, $chat);
        }

        /* $messages = Message::where('user_id', auth()->id())->orWhere('to', auth()->id())->get()->append('time'); */

        return response()->json($tmp);
    }

    public function message(Request $request): JsonResponse
    {
        $message = Message::create([
            'chat_id' => 1,
            'text' => $request->get('text'),
            'to' => User::where('id', $request->to)->get()[0]->id,
        ]);
        $message->servicio_id = 1;
        SendMessage::dispatch($message);

        return response()->json([
            'success' => true,
            'message' => "Message created and job dispatched.",
        ]);
    }
}
