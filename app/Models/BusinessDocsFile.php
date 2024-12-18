<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDocsFile extends Model
{
    use HasFactory;

    protected $fillable = [
        'business_docs_id', 'file_path', 'file_type',
    ];

    public function businessDoc()
    {
        return $this->belongsTo(BusinessDoc::class, 'business_docs_id');
    }
}
