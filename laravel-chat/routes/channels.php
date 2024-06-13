<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;
use App\Models\Chat;
use App\Models\Message;

/* Broadcast::channel('servicios', function (User $user) {
    return $user->can('viewAny', Service::class);
}); */

Broadcast::channel('servicios.{servicio}', function (User $user, $chat) {
    $tmp = Chat::where('id', (int)$chat)->first();
    $tmp2 = Message::where('chat_id', $tmp->id)->first();
    return $user->id === $tmp2->to || $user->id === $tmp2->from;
});
