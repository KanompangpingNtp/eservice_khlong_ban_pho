<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizHazLicenseFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'biz_haz_licenses_id', 'file_path', 'file_type',
    ];

    public function bizHazLicense()
    {
        return $this->belongsTo(BizHazLicense::class, 'biz_haz_licenses_id');
    }
}
