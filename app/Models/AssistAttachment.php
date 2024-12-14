<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'assist_person_id', 'file_path', 'file_type'
    ];

    /**
     * Relationship: AssistAttachment belongs to AssistPerson
     */
    public function assistPerson()
    {
        return $this->belongsTo(AssistPerson::class);
    }
}
