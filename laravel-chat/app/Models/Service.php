<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
        //return $this->belongsTo(User::class,'id','user_id');
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
}
