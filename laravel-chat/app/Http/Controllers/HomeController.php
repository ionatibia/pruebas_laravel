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
        $tmp = Service::find(1)->first();
        if (!$tmp) {
            Service::create([
                'name' => 'Uno',
                'description' => 'Descripcion',
                'img_src' => 'source',
                'user_id' => 1
            ]);
            Chat::create([
                'name' => 'Uno',
                'service_id' => 1,
            ]);
        }
        $user = User::where('id', auth()->id())->select([
            'id', 'name', 'email',
        ])->first();
        /* $services = Service::where('user_id', auth()->id())->get(); */
        //$services = Service::where('user_id', auth()->id())->with('chats')->get();
        $services = Service::all();

        return view('home', [
            'user' => $user,
            'services' => $services
        ]);
    }

    public function messages($id): JsonResponse
    {
        $chats = Chat::find($id)->get();
        foreach ($chats as $chat) {
            $messages =  Message::where('chat_id', $chat->id)->with('from', 'to')->get();
            $chat->messages = $messages;
        }

        return response()->json($chats);
    }

    public function message(Request $request): JsonResponse
    {
        $message = Message::create([
            'chat_id' => 1,
            'text' => $request->get('text'),
            'to' => User::where('id', $request->to)->get()[0]->id,
            'from' => auth()->id(),
            'read' => false
        ]);
        $message->servicio_id = 1;
        SendMessage::dispatch($message);

        return response()->json([
            'success' => true,
            'message' => "Message created and job dispatched.",
        ]);
    }
}
