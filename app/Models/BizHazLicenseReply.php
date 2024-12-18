<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizHazLicenseReply extends Model
{
    use HasFactory;

    protected $fillable = [
        'biz_haz_licenses_id', 'users_id', 'reply_text', 'reply_date',
    ];

    public function bizHazLicense()
    {
        return $this->belongsTo(BizHazLicense::class, 'biz_haz_licenses_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
