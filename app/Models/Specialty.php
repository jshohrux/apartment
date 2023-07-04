<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialty extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'faculty_id',
    ];

    public function faculty(){
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
