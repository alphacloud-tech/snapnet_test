<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lga extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'state_id'
    ];

    public function lga () {
        return $this->belongsTo(State::class);
    }

    public function wards () {
        return $this->hasMany(Ward::class);
    }
}
