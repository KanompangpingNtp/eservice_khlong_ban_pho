<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'level',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userDetails()
    {
        return $this->hasOne(UserDetail::class, 'users_id');
    }

    public function grForms()
    {
        return $this->hasMany(GrForm::class, 'users_id');
    }

    public function grReplies()
    {
        return $this->hasMany(GrReply::class, 'users_id');
    }

    public function eaPeople()
    {
        return $this->hasMany(EaPeople::class, 'users_id');
    }

    public function replies()
    {
        return $this->hasMany(EaReplies::class, 'users_id');
    }

    public function disabilityPeople()
    {
        return $this->hasMany(DisabilityPerson::class, 'users_id');
    }

    public function disabilityReplies()
    {
        return $this->hasMany(DisabilityReply::class, 'users_id');
    }

    public function childInformation()
    {
        return $this->hasOne(ChildInformation::class, 'users_id');
    }

    public function surrenderTheChildren()
    {
        return $this->hasMany(SurrenderTheChild::class, 'users_id');
    }

    public function childRegistrations()
    {
        return $this->hasMany(ChildRegistration::class, 'users_id');
    }

    public function childReplies()
    {
        return $this->hasMany(ChildReply::class, 'users_id');
    }

    public function assistPersons()
    {
        return $this->hasMany(AssistPerson::class, 'users_id');
    }

    public function tradeRegistries()
    {
        return $this->hasMany(TradeRegistry::class, 'users_id');
    }

    public function tradeRegistryFlie()
    {
        return $this->hasMany(TradeRegistryFile::class, 'users_id');
    }

    public function tradeRegistryReplies()
    {
        return $this->hasMany(TradeRegistryReply::class, 'users_id');
    }

    public function buildBuildings()
    {
        return $this->hasMany(BuildBuilding::class, 'users_id');
    }

    public function buildBuildingFiles()
    {
        return $this->hasManyThrough(BuildBuildingFile::class, 'users_id');
    }

    public function buildBuildingReplies()
    {
        return $this->hasMany(BuildBuildingReply::class, 'users_id');
    }

    public function bizHazLicense()
    {
        return $this->hasMany(BizHazLicense::class, 'users_id');
    }

    public function bizHazLicenseReply()
    {
        return $this->hasMany(BizHazLicenseReply::class, 'users_id');
    }

    public function businessDocs()
    {
        return $this->hasMany(BusinessDoc::class, 'users_id');
    }

    public function businessDocsReplies()
    {
        return $this->hasMany(BusinessDocsReply::class, 'users_id');
    }

    public function buildingChanges()
    {
        return $this->hasMany(BuildingChange::class, 'users_id');
    }

    public function buildingChangeReplies()
    {
        return $this->hasMany(BuildingChangeReply::class, 'users_id');
    }
}
