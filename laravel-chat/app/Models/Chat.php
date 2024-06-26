<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
        //return $this->belongsTo(User::class,'id','user_id');
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
