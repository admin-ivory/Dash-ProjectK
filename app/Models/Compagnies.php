<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compagnies extends Model
{
    use HasFactory;

    public $table = 'compagnies';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'telephone',
        'siege',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

   

    public function getSelectNameAttribute()
    {
        return $this->name . ' (' . $this->places_available . ' ' . \Str::plural('place', $this->places_available) . ')';
    }
}

