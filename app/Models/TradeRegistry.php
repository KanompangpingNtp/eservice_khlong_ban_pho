<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeRegistry extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'receive_day', 'written_at', 'write_the_date',
        'full_name', 'ethnicity', 'nationality', 'house_number', 'village', 'alley', 'road',
        'subdistrict', 'district', 'province', 'name_used_to_call', 'registered', 'registration', 'detail','salutation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function files()
    {
        return $this->hasMany(TradeRegistryFile::class, 'trade_registries_id');
    }

    public function replies()
    {
        return $this->hasMany(TradeRegistryReply::class, 'trade_registries_id');
    }
}
