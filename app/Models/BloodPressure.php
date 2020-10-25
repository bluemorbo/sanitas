<?php

namespace App\Models;

use App\Scopes\UserScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BloodPressure extends Model
{
    use HasFactory;

    public $dates = ['reading_date'];
    public $fillable = ['user_id', 'systolic', 'diastolic', 'heart_rate', 'reading_date', 'notes'];

    protected static function booted()
    {
        static::addGlobalScope(new UserScope);
    }
}
