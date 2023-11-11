<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;

class MedicalHistory extends Model
{
    use HasFactory;

    protected $table = 'medical_histories';

    protected $fillable = [
        'created_by',
        'patient_id',
        'allergies',
        'past_diagnosis',
        'present_diagnosis',
        'family_history',
        'past_medical_history',
        'surgical_history',
        'problematic_medicine',
        'date_of_last_medical_facility_visit',
        'scan_history',
        'last_medical_facility_visited',
        'immunization_history',
        'history_of_illness',
        'past_lab_results',
        'last_recommended_medicine',
    ];

    // relationhip between medical history and patient
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
