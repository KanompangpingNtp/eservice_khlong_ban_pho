<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BizHazLicense extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'written_at', 'write_the_date',
        'salutation', 'full_name', 'age', 'house_number', 'village', 'alley', 'road',
        'subdistrict', 'district', 'province', 'food_distribution', 'food_distribution_type',
        'food_distribution_area', 'it_dangerous', 'it_dangerous_type', 'it_there_are_workers',
        'it_use_machinery_size', 'on_sale', 'on_sale_detail', 'public_health_products',
        'public_health_products_area', 'public_health_products_way', 'collection_service_business',
        'waste_collection', 'waste_collection_detail', 'collect_and_dispose_waste',
        'collect_and_dispose_detail', 'garbage_collection', 'garbage_collection_detail',
        'collect_and_dispose_of_waste', 'collect_and_dispose_of_waste_detail', 'local_officials',
        'copy_of_ID_card', 'evidence_of_permission', 'evidence_of_permission_detail_1',
        'evidence_of_permission_detail_2', 'detail_1', 'detail_2','public_health_products_detail','nationality','phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function files()
    {
        return $this->hasMany(BizHazLicenseFile::class, 'biz_haz_licenses_id');
    }

    public function replies()
    {
        return $this->hasMany(BizHazLicenseReply::class, 'biz_haz_licenses_id');
    }
}
