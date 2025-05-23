<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    protected $fillable = [
        'conversation_id',
        'sender_id',
        'receiver_id',
        'message',
        'file',
        'file_type',
        'is_read',
    ];

    public function conversation():  BelongsTo 
    {
        return $this->belongsTo(Conversation::class, 'conversation_id');
    }
}
