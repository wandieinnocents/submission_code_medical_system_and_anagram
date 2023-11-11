<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MedicalPractitioner;
use App\Models\Patient;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'medical_practitioner_id',
        'patient_id',
        'appointment_date',
        'reason_of_appointment',
        'detailed_description_of_issue',
        'clinical_notes',
        'appointment_time',
        'appointment_status',
        'created_by',
    ];


    // relationship betweeen medical practitioner and appointments
    public function medical_practitioner()
    {
        return $this->belongsTo(MedicalPractitioner::class);

    }

    // relationship between appointments and patients
    public function patient()
    {
        return $this->belongsTo(Patient::class);





    }




}
