<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\LabResult;
use App\Models\Patient;
use App\Models\MedicalPractitioner;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = [
        'patient_id',
        'lab_test_results_id',
        'medical_practitioner_id',
        'symptoms',
        'medical_condition_diagnosed',
        'treatment_given',
        'visit_outcome',
        'patient_status',
        'blood_pressure',
        'temperature',
        'weight',
        'height',
        'created_by',
        'comment_on_patient',
        'date_of_record',
        'prescribed_medicine',

    ];



    // relationhip between medical record and lab results
    public function lab_results()
    {
        return $this->belongsTo(LabResult::class);
    }

    // relationhip between medical record and patient
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // relationhip between medical record and medical practitioner
    public function medical_practitioner()
    {
        return $this->belongsTo(MedicalPractitioner::class);
    }


}
