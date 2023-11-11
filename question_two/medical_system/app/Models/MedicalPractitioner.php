<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Appointment;
use App\Models\LabResult;



class MedicalPractitioner extends Model
{
    use HasFactory;

    protected $table = 'medical_practitioners';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact',
        'address',
        'designation',

    ];

    // relationhip between medical practitioner and appointments

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // relationhip between medical practitioner and lab results
    public function lab_results()
    {
        return $this->hasMany(LabResult::class);
    }



}
