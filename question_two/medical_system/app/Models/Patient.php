<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LabResult;
use App\Models\MedicalRecord;
use App\Models\MedicalHistory;




class Patient extends Model
{
    use HasFactory;

    // relationhip between patient and appointments
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    // relationhip between patient and lab results
    public function lab_results()
    {
        return $this->belongsTo(LabResult::class);
    }

    // relationhip between patient and medical records
    public function medical_records()
    {
        return $this->hasMany(MedicalRecord::class);
    }

    // relationhip between patient and medical history
    public function medical_history()
    {
        return $this->hasMany(MedicalHistory::class);
    }




}
