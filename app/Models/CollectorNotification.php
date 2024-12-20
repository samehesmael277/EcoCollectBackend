<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CollectorNotification extends Model
{
    use HasFactory;

    protected $fillable = ['collector_id', 'title', 'des', 'time'];

    public function collector()
    {
        return $this->belongsTo(WasteCollector::class);
    }
}
