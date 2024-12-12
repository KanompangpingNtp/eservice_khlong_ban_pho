<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EaPersonsOptions extends Model
{
    use HasFactory;

    protected $fillable = ['ea_people_id', 'welfare_type', 'welfare_other_types', 'request_for_money_type', 'document_type'];

    public function eaPeople()
    {
        return $this->belongsTo(EaPeople::class, 'ea_people_id');
    }
}
