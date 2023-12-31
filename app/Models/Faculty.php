<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];

    public function specialities(){
        return $this->hasMany(Specialty::class, 'faculty_id');
    }

    public function arizalar(){
        return $this->hasMany(Ariza::class, 'faculty_id');
    }
}
