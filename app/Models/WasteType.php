<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WasteType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

    public function collectors()
    {
        return $this->belongsToMany(WasteCollector::class, 'waste_collector_types')
                    ->withPivot('waste_price');
    }

    public function orders()
    {
        return $this->belongsToMany(CurrentOrder::class, 'waste_type_current_order')
                    ->withPivot('quantity_kg', 'price_for_kg');
    }}
