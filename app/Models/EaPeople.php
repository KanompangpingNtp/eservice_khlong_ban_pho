<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EaPeople extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'users_id',
        'status',
        'admin_name_verifier',
        'written_at',
        'written_date',
        'salutation',
        'first_name',
        'last_name',
        'birth_day',
        'age',
        'nationality',
        'house_number',
        'village',
        'alley',
        'road',
        'subdistrict',
        'district',
        'province',
        'postal_code',
        'phone_number',
        'citizen_id',
        'marital_status',
        'monthly_income',
        'occupation'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function traders()
    {
        return $this->hasMany(EaTraders::class, 'ea_people_id');
    }

    public function personsOptions()
    {
        return $this->hasMany(EaPersonsOptions::class, 'ea_people_id');
    }

    public function attachments()
    {
        return $this->hasMany(EaAttachments::class, 'ea_people_id');
    }

    public function replies()
    {
        return $this->hasMany(EaReplies::class, 'ea_people_id');
    }
}
