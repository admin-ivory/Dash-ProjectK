<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chauffeurs extends Model
{
    use HasFactory;

    public $table = 'drivers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'contact',
        'Numero Permis ',
        'Compagnies ',
        'created_at',
        'updated_at',
        
    ];

   

    public function getSelectNameAttribute()
    {
        return $this->name . ' (' . $this->places_available . ' ' . \Str::plural('place', $this->places_available) . ')';
    }
}

