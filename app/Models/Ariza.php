<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ariza extends Model
{
    use HasFactory;

    protected $fillable=[
        'fullname',
        'birthday',
        'passport',
        'region',
        'district',
        'photo',
        'file',
        'user_id',
        'faculty_id',
        'specialty_id',
        'course',
        'gender',
        'city',
        'status',
        'description',
        'apartment_id',
        'floor',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function specialty(){
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }

    public function faculty(){
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function apartment(){
        return $this->belongsTo(Apartment::class, 'apartment_id');
    }

    public function region(){
        return $this->belongsTo(Region::class, 'region_id');
    }

    public function district(){
        return $this->belongsTo(District::class, 'district_id');
    }
}
