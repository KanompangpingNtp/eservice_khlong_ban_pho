<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EaReplies extends Model
{
    use HasFactory;

    protected $fillable = ['ea_people_id', 'users_id', 'reply_text', 'reply_date'];

    public function eaPeople()
    {
        return $this->belongsTo(EaPeople::class, 'ea_people_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
