<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bus extends Model
{
    use HasFactory;

    public $table = 'buses';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'total_seat',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

   

    public function getSelectNameAttribute()
    {
        return $this->name . ' (' . $this->places_available . ' ' . \Str::plural('place', $this->places_available) . ')';
    }
}

