<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class medical_records extends Model
{
    use HasFactory;

    protected $table = 'medical_records';

    protected $fillable = [
        'service_number',
    'presenting_complaint',
    'history_presenting_complaint',
    'on_direct_questioning',
    'past_medical_history',
    'drug_history',
    'family_history',
    'social_history',
    'on_examination',
    'cardiovascular_system',
    'respiratory_system',
    'abdominal_system',
    'central_nervous_system',
    'musculoskeletal_system',
    'diagnosis',
    'treatment',
    'referral',
    'excuse_physical_training',
    'excuse_duty',
   'excuse_riffle_drill',
   'excuse_boot',
    'excuse_shaving',
    'summary'
    ];

    // public function personnelInfo() : BelongsTo {
    //     return $this->belongsTo(personnel_info::class);
    // }

    public function personalInfo() {
        return $this->belongsTo(personnel_info::class);
    }
}
