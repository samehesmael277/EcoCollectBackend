<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserNotification extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'title', 'des', 'time'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
