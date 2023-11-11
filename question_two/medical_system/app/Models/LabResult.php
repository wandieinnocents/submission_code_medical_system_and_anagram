<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Patient;
use App\Models\MedicalPractitioner;
use App\Models\MedicalRecord;

class LabResult extends Model
{
    use HasFactory;

    protected $table = 'lab_results';

    protected $fillable = [
        'hiv',
        'urinalysis',
        'blood_tests',
        'sputum_tests',
        'fecel_tests',
        'medical_practitioner_id',
        'patient_id',
    ];



    // relationship betwen labresults and patients
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // relationship between labresult and medical practitioners
    public function medical_practitioner()
    {
        return $this->belongsTo(MedicalPractitioner::class);
    }

    // relationhip between labresult and medical record
    public function medical_record()
    {
        return $this->belongsTo(MedicalRecord::class);
    }


}
