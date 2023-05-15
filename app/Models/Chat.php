<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    public function sentBy()
    {
        return $this->belongsTo(User::class, 'sent_by');
    }

    public function sentTo()
    {
        return $this->belongsTo(User::class, 'sent_to');
    }

    public function parent()
    {
        return $this->belongsTo(Chat::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Chat::class, 'parent_id');
    }
}
