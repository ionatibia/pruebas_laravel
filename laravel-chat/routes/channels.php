<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\User;
use App\Models\Chat;

/* Broadcast::channel('servicios', function (User $user) {
    return $user->can('viewAny', Service::class);
}); */

Broadcast::channel('servicios.{servicio}', function (User $user, $chat) {
    $tmp = Chat::where('id', (int)$chat)->get();
    return $user->id === $tmp[0]->to || $user->id === $tmp[0]->from;
});
