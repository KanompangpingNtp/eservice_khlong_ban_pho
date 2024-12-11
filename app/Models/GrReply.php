<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrReply extends Model
{
    use HasFactory;

    protected $fillable = ['gr_forms_id', 'users_id', 'reply_text', 'reply_date'];

    public function grForm()
    {
        return $this->belongsTo(GrForm::class, 'gr_forms_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
