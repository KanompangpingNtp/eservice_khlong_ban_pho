<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChildRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'child_name', 'child_nickname', 'citizen_id',
        'birthday', 'birth_province', 'ethnicity', 'nationality', 'religion', 'house_number', 'village',
        'alley_road', 'subdistrict', 'district', 'province', 'health_option', 'health_option_detail',
        'blood_group', 'congenital_disease', 'edited_by', 'drug_allergy', 'drug_allergy_detail',
        'accident_history', 'accident_history_when_age', 'ge_immunity', 'ge_immunity_detail',
        'specially_about', 'the_eldest_son', 'number_of_siblings', 'elder_brother', 'younger_brother',
        'elder_sister', 'younger_sister', 'fathers_name', 'fathers_age', 'fathers_occupation',
        'fathers_workplace', 'fathers_phone', 'mother_name', 'mother_age', 'mother_occupation',
        'mother_workplace', 'mother_phone', 'marital_status', 'parent_name', 'parent_age',
        'parent_relevant_as', 'parent_occupation', 'parent_workplace', 'parent_phone'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
