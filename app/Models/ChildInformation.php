<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildInformation extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'full_name', 'ethnicity', 'nationality',
        'birthday', 'age', 'age_months', 'citizen_id', 'age_since_date', 'regis_house_number',
        'regis_village', 'regis_road', 'regis_subdistrict', 'regis_district', 'regis_province',
        'current_house_number', 'current_village', 'current_road', 'current_subdistrict',
        'current_district', 'current_province', 'current_phone_number', 'number_of_siblings',
        'congenital_disease', 'blood_group'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function caregiverInformation()
    {
        return $this->hasOne(CaregiverInformation::class);
    }
}
