<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDocsReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'business_docs_id', 'reply_text', 'reply_date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function businessDoc()
    {
        return $this->belongsTo(BusinessDoc::class, 'business_docs_id');
    }
}
