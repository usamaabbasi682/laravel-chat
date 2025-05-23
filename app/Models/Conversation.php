<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Conversation extends Model
{
    protected $fillable = [
        'initiator_id',
        'participant_id',
        'last_message_id',
    ];

    public function initiator(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'initiator_id');
    }

    public function participant(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'participant_id');
    }

    public function messages(): HasMany 
    {
        return $this->hasMany(Message::class, 'conversation_id');
    }
}
