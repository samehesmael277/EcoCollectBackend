<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WasteCollector extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'business_name', 'phone', 'password', 'logo', 'location_id'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function wallet()
    {
        return $this->hasOne(CollectorWallet::class);
    }

    public function notifications()
    {
        return $this->hasMany(CollectorNotification::class);
    }

    public function wasteTypes()
    {
        return $this->belongsToMany(WasteType::class, 'waste_collector_types')
                    ->withPivot('waste_price');
    }

    public function orders()
    {
        return $this->hasMany(CurrentOrder::class);
    }
}
