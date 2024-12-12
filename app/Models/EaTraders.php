<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EaTraders extends Model
{
    use HasFactory;

    protected $fillable = ['ea_people_id', 'trade_condition', 'elderly_name', 'citizen_id', 'address', 'phone_number'];

    public function eaPeople()
    {
        return $this->belongsTo(EaPeople::class, 'ea_people_id');
    }
}
