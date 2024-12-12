<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EaAttachments extends Model
{
    use HasFactory;

    protected $fillable = ['ea_people_id', 'file_path', 'file_type'];

    public function eaPeople()
    {
        return $this->belongsTo(EaPeople::class, 'ea_people_id');
    }
}
