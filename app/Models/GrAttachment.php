<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrAttachment extends Model
{
    use HasFactory;

    protected $fillable = ['gr_forms_id', 'file_path', 'file_type'];

    public function grForm()
    {
        return $this->belongsTo(GrForm::class, 'gr_forms_id');
    }
}
