<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
    ];


    public function arizalar(){
        return $this->hasMany(Ariza::class, 'region_id');
    }
}
