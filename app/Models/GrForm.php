<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrForm extends Model
{
    use HasFactory;

    protected $fillable = ['users_id', 'date', 'subject', 'salutation', 'name', 'age', 'house_number', 'village', 'subdistrict', 'district', 'province', 'request_details', 'admin_name_verifier'];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function grAttachments()
    {
        return $this->hasMany(GrAttachment::class, 'gr_forms_id');
    }

    public function grReplies()
    {
        return $this->hasMany(GrReply::class, 'gr_forms_id');
    }
}
