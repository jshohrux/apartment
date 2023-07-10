<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'count',
        'apartment_id',
    ];

    public function apartment(){
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }

    public function arizalar(){
        return $this->hasMany(Ariza::class, 'floor','name');
    }
}
