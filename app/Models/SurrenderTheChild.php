<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurrenderTheChild extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'full_name', 'age', 'occupation', 'income',
        'village', 'alley_road', 'subdistrict', 'district', 'province', 'phone_number', 'childs_name',
        'contact_location', 'salutation', 'child_recipient', 'child_recipient_relevant', 'child_recipient_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
