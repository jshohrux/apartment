<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    use HasFactory;

    public function places(){
        return $this->hasMany(Places::class, 'apartment_id');
    }

    public function arizalar(){
        return $this->hasMany(Ariza::class, 'apartment_id');
    }

    public function empty_places(){
        return $this->places->sum('count') - $this->arizalar->count();
    }

    public function total(){
        return $this->places->sum('count');
    }
}
