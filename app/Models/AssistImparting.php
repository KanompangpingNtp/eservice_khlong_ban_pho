<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistImparting extends Model
{
    use HasFactory;

    protected $fillable = [
        'assist_person_id', 'accommodation', 'accommodation_detail', 'away_from_home',
        'away_from_home_option', 'away_from_home_option_dueto', 'away_from_community',
        'away_from_community_option', 'away_from_community_option_dueto', 'stay_away_from_agency',
        'stay_away_from_agency_option', 'stay_away_from_agency_option_dueto', 'residence',
        'residence_stay_alone_dueto', 'residence_stay_alone_dueto_detail', 'residence_living_with',
        'residence_living_with_quantity', 'residence_living_with_working', 'residence_living_with_total_income',
        'residence_living_with_non_workers', 'total_income', 'source_of_income', 'used_for_expenses',
        'contact_person', 'contact_address_number', 'contact_road', 'contact_alley', 'contact_village',
        'contact_subdistrict', 'contact_district', 'contact_province', 'contact_postal_code', 'contact_telephone',
        'contact_fax', 'contact_relevant_as'
    ];

    /**
     * Relationship: AssistImparting belongs to AssistPerson
     */
    public function assistPerson()
    {
        return $this->belongsTo(AssistPerson::class);
    }
}
