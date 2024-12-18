<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDoc extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'status', 'admin_name_verifier', 'business_operator_name',
        'registration_number', 'owner_name', 'company_name', 'address', 'website',
        'group_of_websites', 'types_of_business', 'order_products_used', 'payment_method',
        'shipping_method', 'capital_amount', 'telephone_number', 'fax_number', 'e_mail',
        'manager_name', 'registered_office','order_products_used_detail','payment_method_detail','shipping_method_detail'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id');
    }

    public function files()
    {
        return $this->hasMany(BusinessDocsFile::class, 'business_docs_id');
    }

    public function replies()
    {
        return $this->hasMany(BusinessDocsReply::class, 'business_docs_id');
    }
}
